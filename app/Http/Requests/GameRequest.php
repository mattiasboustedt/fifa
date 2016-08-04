<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class GameRequest extends Request
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
            'user_one_id' => 'required',
            'user_two_id' => 'required',
            'user_one_score' => 'required',
            'user_two_score' => 'required'
        ];
    }
}
