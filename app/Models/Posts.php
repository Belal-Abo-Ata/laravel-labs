<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Posts extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = ['title', 'body', 'enabled', 'user_id', 'image'];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
