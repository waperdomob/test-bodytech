<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'test_Bdt.Product';
    protected $primaryKey = 'idProduct';
    public $timestamps = false; 

    protected $fillable = [
        'name',
        'price',
        'status',
        'user_creator',
        'user_last_update',
    ];

}
