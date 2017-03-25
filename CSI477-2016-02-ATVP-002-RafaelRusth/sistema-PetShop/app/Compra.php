<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
  protected $table = 'compras';
  protected $fillable = ['users_id', 'produtos_id', 'quantidade', 'data'];
}
