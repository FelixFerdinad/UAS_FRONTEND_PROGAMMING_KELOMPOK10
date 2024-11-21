<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class subscription extends Model
{
    protected $fillable = [
        'name',
        'username',
        'email',
        'message',
    ];

    protected $table = 'subscription';
}
