<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee_User extends Model
{
    protected $fillable = [
        'employee_name', 'employee_email', 'employee_password','employee_status'
    ];
    public $table = 'Employee_Users';

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
