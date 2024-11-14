<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
use Auth;

class NewsFormRequest extends FormRequest
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
            'title' => 'required|string|min:1|max:90',
            'urllink' => 'nullable|string|min:1|max:90',
            'description' => 'required|string|min:1|max:16777215',
            'attachment' => 'nullable|file',
            'image' => 'nullable|file',
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
        $data = $this->only(['title', 'urllink', 'description', 'attachment', 'image', 'is_public']);
        $data['is_public'] = $this->has('is_public')? 1 : 0;
        return $data;
    }

}
