<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Http\Requests\AlumniFormRequest;
use App\Models\Alumni;
use \Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;


class AlumniPageController extends Controller
{
  public function index()
  {

    return view('web.alumni.index');
  }
  public function register()
  {
      $alumni = Alumni::count();

    return view('web.alumni.register', compact('alumni'));
  }

  public function insert(){
      $urlData = getURLList();
      return view('web.alumni.index');
  }
  public function create(Request $request){
      $rules = [
          'title' => 'nullable|string',
          'first_name' => 'required|string|max:255',
          'middle_name' => 'nullable|string|max:255',
          'last_name' => 'required|string|max:255',
          'email_address' => 'required|string|max:255',
          'organization' => 'nullable|string|max:255',
          'current_location' => 'required|string|max:255',
          'short_bio' => 'required|string|max:900',
          'registration_no' => 'required|string|max:50',
          'image_path' => 'nullable|file',
          'education' => 'required|string|max:255',
          'ward_id' => 'nullable|string',
          'employer' => 'nullable|string|min:3|max:255'
      ];

  $validator = Validator::make($request->all(),$rules);

  if ($validator->fails()) {

    return Redirect::back()->withErrors($validator);

  }
  else{
          $data = $request->input();
    try{
      $alumni = new Alumni;
              $alumni->title = $data['title'];
              $alumni->first_name = $data['first_name'];
              $alumni->middle_name = $data['middle_name'];
              $alumni->last_name = $data['last_name'];
              $alumni->email_address = $data['email_address'];
              $alumni->organization = $data['organization'];
              $alumni->current_location = $data['current_location'];
              $alumni->short_bio = $data['short_bio'];
              $alumni->registration_no = $data['registration_no'];
              $alumni->image_path = $data['image_path'];
              $alumni->education = $data['education'];
              $alumni->ward_id = $data['ward_id'];
              $alumni->employer = $data['employer'];
              $alumni->save();
      return redirect('insert')->with('status',"Insert successfully");
    }
    catch(Exception $e){
      return redirect('insert')->with('failed',"operation failed");
    }
  }
  }

  public function store(AlumniFormRequest $request)
  {
    try {

      if($request->hasFile('image_path')){
          $extension = $request->file('image_path')->extension();
          $filename= 'dit_alumni_'.date("Y_m_d_h_i_s").'.'.$extension;
          $path = $request->file('image_path')->storeAs('/images',$filename,'public');
          $data['image_path']= $path;
       }
      $validatedData = $request->validated();
      $alumni = Alumni::create($validatedData);
        }catch (\Exception $e) {
          // It's actually a QueryException but this works too
                if ($e->getCode() == 23000) {
                 $request->session()->flash('infoo', 'This person already exists');
                  return redirect()->back()
                  ->withInput($validatedData);
                }
              }

              $request->session()->flash('status', 'Registered Successfully!');
              return redirect()->route('web.alumni.register');
             }
}
