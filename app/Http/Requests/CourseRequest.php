<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class CourseRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => ['required', 'min:5', 'max:30'],
            'subtitle' => ['required', 'min:5', 'max:30'],
            'description' =>['required', 'max:200'],
            'n_weeks' =>['required', 'numeric'],
            'thumbnail' =>['required', 'mimes:png,jpg']
        ];
    }
}
