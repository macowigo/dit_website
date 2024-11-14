<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Support\Facades\Auth;

class SlidersFormRequest extends FormRequest
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
            'url' => 'nullable|file',
            'caption' => 'nullable|string',
            'title' => 'required|string|min:1|max:50',
            'is_public' => 'boolean|nullable',
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
        $data = $this->only(['url', 'caption', 'title', 'is_public']);
        $data['added_by']  = Auth::Id();
        $data['is_public'] = $this->has('is_public')? 1:0;

        return $data;
    }

}
