<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StaffFormRequest;
use App\Models\Department;
use App\Models\Staff;
use App\Traits\Authorisable;
use Yajra\Datatables\Datatables;
use Illuminate\Http\Request;



class StaffController extends Controller
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
   * Display a listing of the staff.
   *
   * @return Illuminate\View\View
   */
  public function index()
  {
      $staffs = Staff::count();
      return view('admin.dit_site_staff.index', compact('staffs'));
  }

 public function getData(){

      $staffs = Staff::select(['id','prefix','fname','lname','email']);

      return Datatables::of($staffs)
          ->addColumn('action',function ($row){
              $staffName = ucwords(strtolower(trim($row->fname == '' ? '' : $row->fname)));
                   return view('includes.partials._dit.actions_staff')->with(['id'=>$row->id,'name'=>$staffName]);
                })->make(true);

  }


  /**
   * Show the form for creating a new staff.
   *
   * @return Illuminate\View\View
   */
  public function create()
  {
      $departments = Department::pluck('name','id')->all();
      return view('admin.dit_site_staff.create', compact('departments'));
  }

  /**
   * Store a new staff in the storage.
   *
   * @param App\Http\Requests\StaffFormRequest $request
   *
   * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
   */
  public function store(StaffFormRequest $request)
  {
      try {

          $data = $request->getData();

					if($request->hasFile('imgurl')){
							$extension = $request->file('imgurl')->extension();
							$filename= 'dit_imgurl_'.date("Y_m_d_h_i_s").'.'.$extension;
							$path = $request->file('imgurl')->storeAs('/images',$filename,'public');
							$data['imgurl']= $path;
					 }

            Staff::create($data);
            return response()->json([
              'error' => false,
              'messages' => [trans('staff.model_was_added')]
          ]);


      } catch (Exception $exception) {
          return response()->json([
              'error' => true,
              'messages' => [trans('staff.unexpected_error')]
          ]);

      }
  }

  /**
   * Display the specified staff.
   *
   * @param int $id
   *
   * @return Illuminate\View\View
   */
  public function show($id)
  {
      $staff = Staff::with('department')->findOrFail($id);
      return view('admin.dit_site_staff.show', compact('staff'));
  }

  /**
   * Show the form for editing the specified staff.
   *
   * @param int $id
   *
   * @return Illuminate\View\View
   */
  public function edit($id)
  {
      $staff = Staff::findOrFail($id);
      $departments = Department::pluck('name','id')->all();

      return view('admin.dit_site_staff.edit', compact('staff','departments'));
  }

  /**
   * Update the specified staff in the storage.
   *
   * @param  int $id
   * @param App\Http\Requests\StaffFormRequest $request
   *
   * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
   */
  public function update($id, StaffFormRequest $request)
  {
      try {

          $data = $request->getData();

					if($request->hasFile('imgurl')){
						$extension = $request->file('imgurl')->extension();
						$filename= 'dit_imgurl_'.date("Y_m_d_h_i_s").'.'.$extension;
						$path = $request->file('imgurl')->storeAs('/images',$filename,'public');
						$data['imgurl']= $path;
					 }

          $staff = Staff::findOrFail($id);
          $staff->update($data);

          return response()->json([
              'error' => false,
              'messages' => [trans('staff.model_was_updated')]
          ]);


      } catch (Exception $exception) {

          return response()->json([
              'error' => true,
              'messages' => [trans('staff.unexpected_error')]
          ]);


      }
  }
  /**
   * Remove the specified staff from the storage.
   *
   * @param  int $id
   *
   * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
   */
  public function destroy($id)
  {
      try {
          $staff = Staff::findOrFail($id);
          $staff->delete();

              return response()->json([
                  'error' => false,
                  'messages' =>  [trans('staff.model_was_deleted')]
              ]);

      } catch (Exception $exception) {

          return response()->json([
              'error' => true,
              'messages' => [trans('staff.unexpected_error')]
          ]);

      }
  }



}
