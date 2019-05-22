<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UniversityModel extends Model{

    protected $table = 'universities';
    protected $fillable = ['image','university_name','location','phone_number','email','website','description'];
}