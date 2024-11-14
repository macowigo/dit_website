<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class AlumniFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
      return [
         'title' => 'nullable|string',
         'first_name' => 'required|string|max:255',
         'middle_name' => 'nullable|string|max:255',
         'last_name' => 'required|string|max:255',
         'email_address' => 'required|email|max:255',
         'organization' => 'nullable|string|max:255',
         'current_location' => 'required|string|max:255',
         'short_bio' => 'nullable|string|max:900',
         'registration_no' => 'required|string|max:50',
         'image_path' =>  'nullable|file',
         'education' => 'required|string|max:255',
         'ward_id' => 'nullable|string',
         'employer' => 'nullable|string|max:255'
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
       $data = $this->only(['title',
       'first_name','second_name','last_name','email_address','current_location','organization','short_bio','registration_no','image_path','education','ward_id','employer']);
       return $data;
   }

}
