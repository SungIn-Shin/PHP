<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AllimtalkFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
            'call_from' => 'required',
            'call_to'   => 'required',
            'sms_txt'   => 'required'
        ];
    }  
}
