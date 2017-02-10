<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    Public $timestamps = false;
    protected $fillable = ['name', 'price','description','stock'];
}
