<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    use HasFactory;

    protected $fillable=[
        'nama', 'umur', 'alamat', 'jenis_kelamin', 'class_id'
    ];
   
   public function class()
{
    return $this->belongsTo(ClassRoom::class,'class_id','id');
} 
}
