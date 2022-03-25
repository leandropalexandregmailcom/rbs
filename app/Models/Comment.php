<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'user_id', 'service_id', 'created_at', 'updated_at', 'deleted_at'];

    public function user() {
        $this->belongsTo(User::class);
    }
}
