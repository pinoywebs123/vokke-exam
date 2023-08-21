<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KangarooRequest extends FormRequest
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
            'name'          => 'required|max:50',
            'nickname'      => 'required|max:50',
            'weight'        => 'required|max:20',
            'height'        => 'required|max:20',
            'gender'        => 'required|max:20',
            'friendliness'  => 'required|max:20',
            'dob'           => 'required|max:20',
            'color'         => 'required|max:20',
        ];
    }
}
