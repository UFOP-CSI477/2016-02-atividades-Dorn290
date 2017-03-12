<?php

class ExamesController extends AppController {

  public $helpers = array('Html', 'Form');
  public $components = array('Flash');

  var $qtdexam = 0;
  var $qtdvalor = 0;
  var $eventos;

  public function solicita_exame(){
    $this->set('procedimentos', $this->Exame->Procedimento->find('all', array('order' => array('Procedimento.nome ASC'))));
  }

  public function exames_solicitados() {
    $id = $this->Session->read('Paciente');

    $this->set('exames', $this->Exame->find('all',
    array('conditions'=> array('Paciente.id' => $id[0]['Paciente']['id']), 'order' => array('Exame.data DESC','Procedimento.nome ASC' )),
    array('recursive' => 2)));
  }

  public function salva_solicitacao($id){
    $codpaci = $this->Session->read('Paciente');

      if (empty($this->request->data)) {
        $procedimentos = $this->Exame->Procedimento->findById($id);
        $this->set('procedimento', $procedimentos);
      }
      else{
        $this->request->data['Exame']['procedimento_id'] = $id;
        $this->request->data['Exame']['paciente_id'] = $codpaci[0]['Paciente']['id'] ;

        if ($this->Exame->save($this->request->data)) {
        $this->Flash->set('Exame gravado com Sucesso !');
        $this->redirect(array('action' => 'exames_solicitados'));
        }
      }

  }
  public function lista_exames(){
    $this->set('exames', $this->Exame->find('all', array('order' => array('Exame.data DESC'), array('recursive' => 2))));
  }


  public function crud_exames(){
    $this->set('exames', $this->Exame->find('all', array('order' => array('Exame.data DESC'), array('recursive' => 2))));
  }

  public function altera_exames($id){
    if (empty($this->request->data)) {
      $this->set('exames', $this->Exame->find('all', array('conditions'=> array('Exame.id' => $id))));
    }else {
      $this->request->data['Exame']['id'] = $id;
          if ($this->Exame->save($this->request->data)) {
              $this->Flash->set('Exame editado com sucesso !!!');
              $this->set('exames', $this->Exame->find('all', array('conditions'=> array('Exame.id' => $id))));
            }
      }
    }
    public function exclui_exames($id){
      $this->Exame->delete($id);

      $this->Flash->set('Exame excluído com Sucesso !');
      $this->redirect(array('action' => 'crud_exames'));

    }

}
?>
