<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

         protected $fillable = [
            'id', 'name','first_name'
            ,'civility','provenance_dg'
            ,'m','miss_name','employer','salary_net'
            ,'social_security_number','date_of_birth'
            ,'place_of_birth','father_name'
            ,'mother_name','function'
            ,'address','commune','phone_fax','email'
            ,'web_site','rib2','commercial_initial'
            ,'commercial','affectation_date'
            ,'pi_type','piece_number','delivery'
            ,'from','birth_certificat_number'
    ];
}
