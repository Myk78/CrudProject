<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'product'; // Explicitly specifying the table name
    protected $fillable = ['name', 'sku', 'price', 'description','image'];
}
