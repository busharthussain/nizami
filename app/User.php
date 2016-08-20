<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','user_name', 'email', 'password', 'father_name', 'type', 'institute_type',
        'admission_date', 'admission_number', 'dob', 'city', 'district', 'blood_group',
        'user_id_card_number', 'guardian_id_card_number', 'landlord_number', 'mobile_number',
        'guardian_mobile_number', 'academic_background', 'academic_background_institute_name',
        'permanent_address', 'current_address'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
