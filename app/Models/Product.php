<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;
    Use SoftDeletes;
    protected $fillable = ['label','price','detail'];
    protected $dates = ['deleted_at'];
}
