<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class ContentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            //
            'content'=>'required|max:100',
            'id_sound'=>'required|integer|min:1',
            
            
        ];
    }
    public function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json([
            'success'=> false,
            'message'=> 'Validation errors',
            'data'   => $validator->errors()
        ],404));
    }
    public function messages()
    {
        return [
            'content.required' => 'content is required',
            'id_sound.required' => 'id_sound is required and is a number',
        
        ];
    }
}
