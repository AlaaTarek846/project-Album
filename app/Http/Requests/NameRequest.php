<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NameRequest extends FormRequest
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
      switch ($this->method()){
          case 'POST':{
              return [
                  'name' => 'required|max:255|string',
                  'images' => 'required',
                  'images.*' => 'mimes:jpg,jpeg,png,gif|max:3000',
              ];
          }

          case 'PUT':
          case 'PATCH':{
              return [
                  'name' => 'required|max:255|string',
                  'images' => 'nullable',
                  'images.*' => 'mimes:jpg,jpeg,png,gif|max:3000',
              ];
          }
          default: break;
      }

    }


}
