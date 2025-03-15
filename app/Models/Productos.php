<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MongoDB\Laravel\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Productos extends Model
{
    use HasFactory;
    protected $connection = 'mongodb';
    protected $collection = 'productos';
    protected $fillable = ['Nombre', 'Descripcion', 'Precio', 'Tipo'];
}