<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;

    class Visit_log extends Model
{
    use HasFactory;

    protected $fillable = ['uid','id_patient', 'visit_date','id_branch','status'];

}
