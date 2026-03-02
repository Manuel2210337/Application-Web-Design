<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory; // <--- 1. IMPORTAR ESTO

class Course extends Model
{
    use HasFactory;
    public function groups() 
{ 
return $this->belongsToMany(Group::class); 
} 
public function roboticsKit() 
{ 
return $this->belongsTo(RoboticsKit::class); 
}
}
