<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employer extends Model
{
    use HasFactory;
    protected $fillable=['name','ic_number','birthdate','phone_number','email','belongs_to', 'position'];

}
