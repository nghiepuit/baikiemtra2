<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            'txtName' => 'required',
            'txtVideo' => 'required',
            'txtLink' => 'required',
            'txtEmail' => 'required',
            'txtContent' => 'required'
        ];
    }

    public function messages(){
        return [
            'txtName.required' => 'Name is not empty !',
            'txtVideo.required' => 'Video Name is not empty !',
            'txtLink.required' => 'Link is not empty !',
            'txtEmail.required' => 'Email is not empty !',
            'txtContent.required' => 'Email is not empty !'
        ];
    }

}
