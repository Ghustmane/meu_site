<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model{

	use HasFactory;

    #public function categoria(){
    #   return $this-> belongsTo(Categoria::class);
    #}

    public function produtos(){
        return $this->hasMany(Produto::class);
    }

    public function posts(){
        return $this->hasMany('App\Models\Post');
    }
}
?>