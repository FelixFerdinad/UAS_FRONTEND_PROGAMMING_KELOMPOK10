<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Register extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password',
        'confirm_password'
    ];

    protected $table = 'registers';
}
