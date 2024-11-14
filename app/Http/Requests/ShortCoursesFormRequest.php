<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
use Auth;

class ShortCoursesFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'code' => 'required|string|min:3|max:20',
            'name' => 'required|string|min:3|max:50',
            'department_id' => 'required',
        ];
    }

    protected function failedValidation(Validator $validator) {
        $messages = $validator->errors()->all();
        throw new HttpResponseException(response()->json([
          'error' => true,
          'messages' => $messages
        ]));
    }


    /**
     * Get the request's data from the request.
     *
     *
     * @return array
     */
    public function getData()
    {
        $data = $this->only(['code', 'name', 'department_id']);
        return $data;
    }

}
