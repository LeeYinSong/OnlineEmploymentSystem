<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    use HasFactory;
    protected $fillable=['name','ic_number','birthdate','phone_number','email','school_name', 'education_level','proof_of_enrollment','password','bank','bank_account_number'];
    										

}
