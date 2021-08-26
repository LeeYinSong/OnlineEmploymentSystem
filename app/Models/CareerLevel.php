<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CareerLevel extends Model
{
    use HasFactory;
    protected $fillable=['id','Career_Level'];
    				
    public function RecruitmentNotice(){

        return $this->hasMany('App\recruitment_notice');
    }
}