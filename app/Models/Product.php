<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $primaryKey = 'idProduct';
    protected $table = "products";
    protected $fillable = ['name', 'description', 'price'];
}
