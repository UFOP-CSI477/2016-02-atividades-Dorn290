<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrinho extends Model
{
   protected $table = 'compras';
   protected $fillable = ['users_id', 'produtos_id', 'quantidade', 'data' ];
}
