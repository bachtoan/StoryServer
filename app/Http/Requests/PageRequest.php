<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class PageRequest extends FormRequest
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
            
            'sound'=>'required',
            'background'=>'required',
            'page_number'=>'required|integer|min:1',
            
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
            'id_story.required' => 'id_story is required',
            'sound.required' => 'sound is required',
            'background.required' => 'background is required',
            'page_number.required' => 'page_number is number, required',
        ];
    }
}
