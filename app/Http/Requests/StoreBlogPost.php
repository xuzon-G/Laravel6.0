<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBlogPost extends FormRequest
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
             'title' => 'required|alpha|bail',
            // 'content' => 'required',
          'check'=>'required|array',
            // 'image'=>'required',
            'tos'=>'accepted',
            'website'=>'required|active_url',
            'start_date'=>'required|date',
            'end_date'=>'required|after:start_date'
        ];
    }
    // public function messages()
    // {
    //     // return [
    //     //     'required'=>'This field is required'
    //     // ];
    // }
    public function attributes()
    {
        return [
            'check'=>'Study',
            'tos'=>'Terms of Services'
        ];
    }
}
