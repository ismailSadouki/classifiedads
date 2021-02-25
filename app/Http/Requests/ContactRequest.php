<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|max:50',
            'email' => 'required|email',
            'msg' => 'required',
        ];
    }

    public function messages() 
    { 
        return [ 
            'name.required' => 'حقل الإسم مطلوب', 
            'name.max' => 'يجب أن لا يتجاوز الإسم المدخل 50 حرف',     
            'email.required' => 'حقل البريد الالكتروني مطلوب'  ,     
            'email.email' => 'تحقق من أن صيغة البريد الإلكتروني المُدخَل صحيحة', 
            'msg.required' => 'أدخل تفاصيل الإعلان',
        ]; 
    }

}
