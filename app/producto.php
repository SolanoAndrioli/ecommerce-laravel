<?php

namespace App;
use App\producto;
use Illuminate\Database\Eloquent\Model;

class producto extends Model
{
    public function getCategoria()
    {
        return $this->belongsTo('App\Categoria', 'Idcategoria', 'Idcategoria');
    }
}
