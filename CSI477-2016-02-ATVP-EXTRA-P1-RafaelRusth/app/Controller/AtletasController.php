<?php

class AtletasController extends AppController {

  public $components = array('Flash');
  public $helpers = array('Form', 'Html');


  public function geral() {
    $this->set('atletas', $this->Atleta->find('all'));
  }

  public function validar() {
      $atleta = $this->Atleta->findAllByLoginAndSenha(
              $this->data['Atleta']['login'],
              $this->data['Atleta']['senha']);
      if (!empty($atleta)) {
        return $atleta;
      } else {
        return false;
      }
  }

  public function index_login(){

  }

  public function login() {

      if(!empty($this->data['Atleta']['login'])) {

        $atleta = $this->validar();
        if ($atleta != false) {
          $this->Flash->set('Acesso realizado com sucesso!');
          $this->Session->write('Atleta', $atleta);
          $this->redirect('/atletas/geral');
          exit();
        } else {
            $this->Flash->set('Usuário e/ou Senha inválidos!');
            $this->redirect(array('action' => 'index_login'));
            exit();
        }
      } else {
        $this->redirect(array('action' => 'index_login'));
        exit();
      }

  }
  public function logout() {
    $this->Session->destroy();
    $this->Flash->set('Atividades encerradas com sucesso!');
    $this->redirect(Router::url('http://localhost/CSI477-2016-02-ATVP-001-RafaelRusth'));
    exit();
  }

  public function lista_atletas(){
    $this->set('atletas', $this->Atleta->find('all', array('order' => array('Atleta.nome ASC'))));
  }

  public function altera_registro(){
    $id = $this->Session->read('Atleta');
    $atleta = $this->Atleta->find('all', array('conditions'=> array('Atleta.id' => $id[0]['Atleta']['id'])));

    if (empty($this->request->data)) {

      $this->set('atletas', $this->Atleta->find('all', array('conditions'=> array('Atleta.id' => $id[0]['Atleta']['id']))));

    }else {
      $this->request->data['Atleta']['id'] = $id[0]['Atleta']['id'];

      if($this->request->data['Atleta']['login'] != $atleta[0]['Atleta']['login']){
          if($this->Atleta->find('all', array('conditions'=> array('Atleta.login' => $this->request->data['Atleta']['login'])))){
            echo "<script language='javascript'>window.alert('Login já está sendo utilizado !!!')</script>";
            $this->set('atletas', $this->Atleta->find('all', array('conditions'=> array('Atleta.id' => $id[0]['Atleta']['id']))));
          }else{
            if ($this->Atleta->save($this->request->data)) {
              $at = $this->validar();
              $this->Session->write('Atleta', $at);
              $this->Flash->set('Usuário editado com sucesso !!!');
              $this->redirect(array('action' => 'editar'));
            }
          }
        }else{
          if ($this->Atleta->save($this->request->data)) {
            $at = $this->validar();
            $this->Session->write('Atleta', $at);
            $this->Flash->set('Usuário editado com sucesso !!!');
            $this->redirect(array('action' => 'editar'));
          }
        }
      }
    }

  public function index_cadastro(){

    if (empty($this->request->data)) {

    }

    else{
      if($this->Atleta->find('all', array('conditions'=> array('Atleta.login' => $this->request->data['Atleta']['login'])))){
        echo "<script language='javascript'>window.alert('Login já está sendo utilizado !!!')</script>";
        $this->set('atletas', $this->request->data);
      }else{
        // Persistir os dados
        if ($this->Atleta->save($this->request->data)) {
            $this->Flash->set('Você foi cadastrado com sucesso ! Faça login !!!');
            $this->redirect(array('action' => 'index_login'));
        }
      }
    }
  }

  public function delete(){
    $id = $this->Session->read('Atleta');

    $this->Atleta->delete($id[0]['Atleta']['id']);

    $this->Flash->set('Atleta excluído com Sucesso !');
    $this->redirect(array('action' => 'logout'));
  }


}
