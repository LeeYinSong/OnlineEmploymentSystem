<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class recruitment_notice extends Model
{
    use HasFactory;
    protected $fillable=['employer_id','career_levelName','salary','job_description','requirements','job_type','qualification', 'job_specialization'];

    public function careerlevel(){

        return $this->belongsTo('App\CareerLevel');
    }
}