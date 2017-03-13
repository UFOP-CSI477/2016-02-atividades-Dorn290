<?php

class EventosController extends AppController {

  public $helpers = array('Html');
  public $components = array('Flash');

  public function index(){
    $this->set('eventos', $this->Evento->find('all', array('order' => array('Evento.nome ASC'))));
  }

  public function view($id = null){

    if (!$id){
      throw new NotFoundException("Evento Inválido");
    }

    $evento = $this->Evento->findById($id);
    $this->set('evento', $evento);

  }


  public function add() {
    if (empty($this->request->data)){
      // data esta vazio -> carregar campos para inclusão.

      //Carregar os estados - combo
      //$estados = $this->Cidade->Estado->find('list',array('fields' => array('id', 'nome')));

      //$this->set('estados',$estados);

    }else{
      //Pesistir os dados
      if ($this->Evento->save($this->request->data)){
        $this->Flash->set('Evento inserido com sucesso!');
        $this ->redirect(array('action' => 'index'));
      }
    }
  }

  public function edit($id = null){

    if (!$id){
      throw new NotFoundException("Evento Inválido");
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
      if ($this->Evento->save($this->request->data)){
        $this->Flash->set("Evento atualizado com Sucesso!");
        $this->redirect(array('action'=>'index'));
      }
    }
  }


  public function delete ($id = null){

    if (!$id){
      throw new NotFoundException("Evento Inválido");
    }

    $this->Evento->delete($id);
    $this->Flash->set("Evento excluído com sucesso!");
    $this->redirect(array('action' => 'index'));

  }


}
