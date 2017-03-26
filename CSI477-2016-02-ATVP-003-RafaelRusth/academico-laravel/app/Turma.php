<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Turma extends Model
{
  protected $table = 'turmas';
  protected $fillable = ['nome','disciplina_id'];

  public function disciplina() {
    return $this->belongsTo('App\Disciplina');
  }

}
