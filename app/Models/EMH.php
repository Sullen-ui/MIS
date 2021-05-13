<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EMH extends Model
{
    use HasFactory;
    
    protected $fillable = ['id_patient','id_doctor','create_date', 'description', 'name'];
}
