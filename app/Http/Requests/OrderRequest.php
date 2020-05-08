<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'first_name' => 'required',
            'last_name' => 'required',
            'company_name' => 'required',
            'country' => 'required',
            'email_address' => 'required',
            'phone_no' => 'required',
            'address1' => 'required',
            'address2' => 'required',
            'city' => 'required',
            'zip_code' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'first_name.required' => 'Поле "first_name" не заполнено!',
            'last_name.required' => 'Поле "last_name" не заполнено!',
            'company_name.required' => 'Поле "company_name" не заполнено!',
            'country.required' => 'Поле "country" не заполнено!',
            'email_address.required' => 'Поле "email_address" не заполнено!',
            'phone_no.required' => 'Поле "phone_no" не заполнено!',
            'address1.required' => 'Поле "address1" не заполнено!',
            'address2.required' => 'Поле "address2" не заполнено!',
            'city.required' => 'Поле "city" не заполнено!',
            'zip_code.required' => 'Поле "zip_code" не заполнено!',
        ];
    }
}
