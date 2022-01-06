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
        if(isset($_POST['back'])) {
            return [];
        }
        else {
            return [
                'content'        => "required",
                'option1'        => "required",
                'option2'        => "required",
                'option3'        => "required",
                'option4'        => "required",
                'correct_answer' => "required",
                'point'          => "required",
                'exam_id'        => "required"
            ];
        }
    }

    // public function messages()
    // {
    //     return [
    //         'point.required' => "write a number between 0-10"
    //     ];
    // }
}
