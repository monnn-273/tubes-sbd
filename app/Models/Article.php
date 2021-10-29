<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    use HasFactory;

    // protected $fillable = [
    //     'chapter_title',
    //     'user_id',
    //     'description',
    //     'body',
    // ];
    
    public function doctors(){
       return $this->belongsTo(Doctor::class,'id');
    }
}
