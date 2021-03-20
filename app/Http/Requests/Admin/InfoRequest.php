<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class InfoRequest extends FormRequest
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
          'footer' => 'required',
          'email' => 'required',
          'phone' => 'required',
          'phone2' => 'nullable',
          'facebook' => 'nullable',
          'twitter' => 'nullable',
          'instagram' => 'nullable',
          'address' => 'required',
        ];
    }
}
