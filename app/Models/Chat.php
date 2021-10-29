<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    use HasFactory;

    public function doctors(){
        return $this->belongsTo(Doctor::class,'id');
    }

    public function users(){
        return $this->belongsTo(User::class,'id');
    }
}
