<?php

namespace Modules\Name\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveNameRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'fullname'    => 'required|min:5|max:255',
            'given_name'  => 'nullable|min:3|max:255',
            'family_name' => 'nullable|min:3|max:255',
            'nickname'    => 'nullable|min:5|max:255',
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
}
