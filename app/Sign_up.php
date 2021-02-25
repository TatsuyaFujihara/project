<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sign_up extends Model
{
    protected $fillable = [
        'name', 'email', 'password',
    ];
}
