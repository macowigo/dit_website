<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\DepartmentsFormRequest;
use App\Models\Department;
use App\Traits\Authorisable;
use Yajra\Datatables\Datatables;
use Illuminate\Http\Request;


class DepartmentsController extends Controller
{
    //use Authorisable;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
	public function __construct()
	{
	    $this->middleware('auth');
	}

  /**
   * Display a listing of the departments.
   *
   * @return Illuminate\View\View
   */
  public function index()
  {
      $departments = Department::count();
      return view('admin.dit_site_department.index', compact('departments'));
  }

 public function getData(){

      $departments = Department::select(['id','code','name','hod_name']);

      return Datatables::of($departments)
          ->addColumn('action',function ($row){
              $departmentName = ucwords(strtolower(trim($row->name == '' ? '' : $row->name)));
                   return view('includes.partials._dit.actions_departments')->with(['id'=>$row->id,'name'=>$departmentName]);
                })->make(true);

  }


  /**
   * Show the form for creating a new department.
   *
   * @return Illuminate\View\View
   */
  public function create()
  {

      return view('admin.dit_site_department.create');
  }

  /**
   * Store a new department in the storage.
   *
   * @param App\Http\Requests\DepartmentsFormRequest $request
   *
   * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
   */
  public function store(DepartmentsFormRequest $request)
  {
      try {

          $data = $request->getData();

					if($request->hasFile('imgurl')){
							$extension = $request->file('imgurl')->extension();
							$filename= 'dit_dept_image_'.date("Y_m_d_h_i_s").'.'.$extension;
							$path = $request->file('imgurl')->storeAs('/images',$filename,'public');
							$data['imgurl']= $path;
					 }

					 if($request->hasFile('hod_imgulr')){
 							$extension = $request->file('hod_imgulr')->extension();
 							$filename= 'dit_dept_hod_image_'.date("Y_m_d_h_i_s").'.'.$extension;
 							$path = $request->file('hod_imgulr')->storeAs('/images',$filename,'public');
 							$data['hod_imgulr']= $path;
 					 }

          Department::create($data);

            return response()->json([
              'error' => false,
              'messages' => [trans('departments.model_was_added')]
          ]);


      } catch (Exception $exception) {
          return response()->json([
              'error' => true,
              'messages' => [trans('departments.unexpected_error')]
          ]);

      }
  }

  /**
   * Display the specified department.
   *
   * @param int $id
   *
   * @return Illuminate\View\View
   */
  public function show($id)
  {
      $department = Department::findOrFail($id);
      return view('admin.dit_site_department.show', compact('department'));
  }

  /**
   * Show the form for editing the specified department.
   *
   * @param int $id
   *
   * @return Illuminate\View\View
   */
  public function edit($id)
  {
      $department = Department::findOrFail($id);


      return view('admin.dit_site_department.edit', compact('department'));
  }

  /**
   * Update the specified department in the storage.
   *
   * @param  int $id
   * @param App\Http\Requests\DepartmentsFormRequest $request
   *
   * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
   */
  public function update($id, DepartmentsFormRequest $request)
  {
      try {

          $data = $request->getData();

          $department = Department::findOrFail($id);

					if($request->hasFile('imgurl')){
							$extension = $request->file('imgurl')->extension();
							$filename= 'dit_dept_image_'.date("Y_m_d_h_i_s").'.'.$extension;
							$path = $request->file('imgurl')->storeAs('/images',$filename,'public');
							$data['imgurl']= $path;
					 }

					 if($request->hasFile('hod_imgulr')){
 							$extension = $request->file('hod_imgulr')->extension();
 							$filename= 'dit_dept_hod_image_'.date("Y_m_d_h_i_s").'.'.$extension;
 							$path = $request->file('hod_imgulr')->storeAs('/images',$filename,'public');
 							$data['hod_imgulr']= $path;
 					 }
					 
          $department->update($data);

          return response()->json([
              'error' => false,
              'messages' => [trans('departments.model_was_updated')]
          ]);


      } catch (Exception $exception) {

          return response()->json([
              'error' => true,
              'messages' => [trans('departments.unexpected_error')]
          ]);


      }
  }
  /**
   * Remove the specified department from the storage.
   *
   * @param  int $id
   *
   * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
   */
  public function destroy($id)
  {
      try {
          $department = Department::findOrFail($id);
          $department->delete();

              return response()->json([
                  'error' => false,
                  'messages' =>  [trans('departments.model_was_deleted')]
              ]);

      } catch (Exception $exception) {

          return response()->json([
              'error' => true,
              'messages' => [trans('departments.unexpected_error')]
          ]);

      }
  }



}
