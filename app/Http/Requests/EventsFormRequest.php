<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
use Auth;

class EventsFormRequest extends FormRequest
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
            'venue' => 'required|string|min:1|max:50',
            'description' => 'required|string|min:1|max:256',
            'description2' => 'nullable|string|min:1|max:256',
            'description3' => 'nullable|string|min:1|max:256',
            'description4' => 'nullable|string|min:1|max:256',
            'urllink' => 'nullable|string|min:1|max:190',
            'attachment' => 'nullable|file',
            'image' => 'nullable|file',
            'image2' => 'nullable|file',
            'image3' => 'nullable|file',
            'image4' => 'nullable|file',
            'starttime' => 'required',
            'endtime' => 'required',
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
        $data = $this->only(['title', 'venue', 'description', 'description2','description3','description4','urllink','attachment', 'image', 'image2',  'image3',  'image4',  'starttime', 'endtime', 'is_public']);
        $data['is_public'] = $this->has('is_public') ? 1 : 0 ;

        return $data;
    }

}
