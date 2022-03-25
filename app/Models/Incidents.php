<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Incidents extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'title', 'description', 'criticality', 'type', 'status','updated_at', 'deleted_at'];
}
