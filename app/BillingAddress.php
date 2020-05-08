<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BillingAddress extends Model
{
    //
    protected $fillable = ['user_id', 'first_name', 'last_name', 'company_name', 'country',
                           'email_address', 'phone_no', 'address1', 'address2', 'city',
                            'zip_code'];
}
