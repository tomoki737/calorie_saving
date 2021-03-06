<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuestionRequest extends FormRequest
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
            'question' => 'required|max:250',
            'answer' => 'required|max:500',
        ];
    }

    public function attributes()
    {
        return [
            'question' => '問題',
            'answer' => '回答',
        ];
    }
}
