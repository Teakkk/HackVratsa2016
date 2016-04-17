<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    public static $rules = [
        'title' => 'required',
        'cat_id' => 'required|morezero',
        'description' => 'required|min:20',
        'jobtype_id' => 'required|morezero',
        'jobterm_id' => 'required|morezero',
        'clevel_id' => 'required|morezero',
        'contact_name' => 'required',
        'phone' => 'required',
        'email' => 'required|email'
    ];
}
