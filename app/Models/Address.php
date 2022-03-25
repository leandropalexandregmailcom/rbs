<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'cities_id', 'cep', 'street', 'complement', 'number', 'created_at',
    'updated_at', 'deleted_at'];
}
