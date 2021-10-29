<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    public function articles(){
        return $this->hasMany(Article::class);
    }

    public function chats(){
        return $this->hasMany(Chat::class);
    }

    public function shcedules(){
        return $this->hasOne(Schedule::class);
    }


}
