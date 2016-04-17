<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cv extends Model
{
    public static $rules = [
        'firstname' => 'required',
        'lastname' => 'required',
        'age' => 'required',
        'email' => 'required|email'
    ];
}
