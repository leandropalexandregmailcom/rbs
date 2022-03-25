<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'name', 'description', 'category_id', 'created_at', 'updated_at', 'deleted_at'];

    public function category() {
        $this->belongsTo(category::class);
    }

    public function user() {
        $this->belongsTo(User::class);
    }
}
