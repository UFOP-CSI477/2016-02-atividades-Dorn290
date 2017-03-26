<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    //
    //protected $table = 'cidades';
    protected $table = 'alunos';
    protected $fillable = ['nome','rua','numero','bairro','cidade_id','cep','mail'];

    public function isMatriculado() {
      return true;
    }

    public function cidade(){
      return $this->belongsTo('App\Cidade');
    }

}
