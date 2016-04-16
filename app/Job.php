<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    public static $rules = [
        'title' => 'required',
        'category' => 'required|morezero',
        'description' => 'required|min:20',
        'jobtype' => 'required|morezero',
        'jobterm' => 'required|morezero',
        'clevel' => 'required|morezero',
        'contact_name' => 'required',
        'phone' => 'required',
        'email' => 'required',
        'logo' => 'mimes:jpeg,png,gif,jpg,JPG'
    ];
}
