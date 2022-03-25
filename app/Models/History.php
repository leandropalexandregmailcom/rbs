<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'client_id', 'service_id', 'created_at', 'updated_at', 'deleted_at'];
}
