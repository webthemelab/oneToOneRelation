<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\classs;
use App\Models\section;

class Shift extends Model
{
    use HasFactory;
    public function classses(){
        return $this->belongsTo(classs::class,'class_id');
    }
    public function sections(){
        return $this->belongsTo(section::class,'section_id');
    }
}
