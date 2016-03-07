<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'user_id', 'firstname', 'lastname', 'identification', 'birthday', 'phone_home', 'phone_mobile', 'phone_cellular', 'phone_related', 'phone_extra', 'address_home', 'address_extra', 'email_home', 'email_extra', 'email_related', 'related_info', 'name', 'email', 'password',
    ];
}
