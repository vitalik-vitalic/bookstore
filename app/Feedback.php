<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    //
    protected $fillable = ['con_name', 'con_email', 'con_phone', 'con_message'];
}
