<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $fillable = [
    'nombre', 'precio', 'imagen', 'stock', 'tipo',
    'descripcion', 'tamano', 'material', 'peso', 'modelo'
    ];
}
