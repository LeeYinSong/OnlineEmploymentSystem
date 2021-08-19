<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EducationLevel extends Model
{
    use HasFactory;
    protected $fillable=['id','education_level'];
    				
    public function Resume(){

        return $this->hasMany('App\resume');
    }
}