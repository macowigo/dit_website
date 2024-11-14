<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
use Auth;

class DepartmentsFormRequest extends FormRequest
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
            'code' => 'required|string|min:1|max:20',
            'name' => 'required|string|min:1|max:50',
            'caption1' => 'nullable|string|min:5|max:900',
            'caption2' => 'nullable|string|min:5',
            'hod_name' => 'required|string|min:5|max:50',
            'hod_imgulr' => 'file',
            'hod_academy' => 'required|string|min:1|max:250',
            'hod_email' => 'required|string|min:6|max:40',
            'hod_phone' => 'required|string|min:5|max:15',
            'category' => 'required',
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
        $data = $this->only(['code', 'name', 'imgurl', 'caption1', 'caption2', 'hod_name', 'hod_imgulr', 'hod_academy', 'hod_email', 'hod_phone', 'category']);
        return $data;
    }

}
