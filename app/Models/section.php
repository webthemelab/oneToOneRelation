<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\classs;

class section extends Model
{
    use HasFactory;
    public function classses(){
        return $this->belongsTo(classs::class,'class_id');
    }
}
