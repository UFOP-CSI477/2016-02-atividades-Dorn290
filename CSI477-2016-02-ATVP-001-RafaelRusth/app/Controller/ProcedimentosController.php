<?php

class ProcedimentosController extends AppController {

  public $helpers = array('Html');
  public $components = array('Flash');

  public function index(){
    $this->set('procedimentos', $this->Procedimento->find('all', array('order' => array('Procedimento.nome ASC'))));
  }

  public function view($id = null){

    if (!$id){
      throw new NotFoundException("Procedimento Inválido");
    }

    $procedimento = $this->Procedimento->findById($id);
    $this->set('procedimento', $procedimento);

  }


  public function add() {
    if (empty($this->request->data)){
      // data esta vazio -> carregar campos para inclusão.

      //Carregar os estados - combo
      //$estados = $this->Cidade->Estado->find('list',array('fields' => array('id', 'nome')));

      //$this->set('estados',$estados);

    }else{
      //Pesistir os dados
      if ($this->Procedimento->save($this->request->data)){
        $this->Flash->set('Procedimento inserido com sucesso!');
        $this ->redirect(array('action' => 'index'));
      }
    }
  }

  public function edit($id = null){

    if (!$id){
      throw new NotFoundException("Procedimento Inválido");
    }

    if (empty($this->request->data)){

      // data esta vazio -> carregar campos para inclusão.

      //Carregar os estados - combo
      //$estados = $this->Cidade->Estado->find('list',array('fields' => array('id', 'nome')));

      //$this->set('estados',$estados);

      //carregar os dados atuais
      //$this->request->data = $this->Cidade->findById($id);
    } else {
      //persistir os dados
      if ($this->Procedimento->save($this->request->data)){
        $this->Flash->set("Procedimento atualizado com Sucesso!");
        $this->redirect(array('action'=>'index'));
      }
    }
  }


  public function delete ($id = null){

    if (!$id){
      throw new NotFoundException("Procedimento Inválido");
    }

    $this->Procedimento->delete($id);
    $this->Flash->set("Procedimento excluído com sucesso!");
    $this->redirect(array('action' => 'index'));

  }


}
