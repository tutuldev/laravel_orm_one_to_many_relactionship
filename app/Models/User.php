<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function post(){
        // use this get not set foregin key before migrate
        // return $this->hasMany(Post::class,'user_id','id');

        return $this->hasMany(Post::class);
    }
}
