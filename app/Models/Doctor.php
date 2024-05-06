<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;
    protected $fillable = ['name_en','name_ar','description_en','description_ar','image','educational_qualifications_en','educational_qualifications_ar','professional_experience_en','professional_experience_ar','certificate_ar','certificate_en','video'];







}
