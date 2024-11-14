<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
use Auth;

class StaffFormRequest extends FormRequest
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
            'prefix' => 'required',
            'fname' => 'required|string|min:3|max:20',
            'mname' => 'nullable|string|min:3|max:20',
            'lname' => 'required|string|min:3|max:20',
            'imgurl' => 'nullable|file',
            'email' => 'nullable|string|min:10|max:40',
            'phone' => 'nullable|string|min:8|max:15',
            'designation' => 'required|string|min:1|max:70',
            'title' => 'required|string|min:1|max:70',
            'bio_paragraph1' => 'nullable',
            'bio_paragraph2' => 'nullable',
            'bio_paragraph3' => 'nullable',
            'staff_type' => 'required',
            'status' => 'nullable',
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
        $data = $this->only(['prefix', 'fname', 'mname', 'lname', 'imgurl', 'email', 'phone', 'designation', 'title', 'bio_paragraph1', 'bio_paragraph2', 'bio_paragraph3', 'staff_type', 'status', 'department_id']);

        return $data;
    }

}
