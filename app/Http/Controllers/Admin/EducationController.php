<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\EducationFormRequest;
use App\Models\Staff;
use App\Models\Education;
use App\Traits\Authorisable;
use Yajra\Datatables\Datatables;
use Illuminate\Http\Request;



class EducationController extends Controller
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
   * Display a listing of the education.
   *
   * @return Illuminate\View\View
   */
  public function index()
  {
      $education = Education::with('staff')->count();
      return view('admin.dit_site_education.index', compact('education'));
  }

 public function getData(){

      $education = Education::with('staff')->select(['dit_site_education.id as IDD','staff_id','description','level']);

      return Datatables::of($education)
          ->addColumn('action',function ($row){
              $educationName = ucwords(strtolower(trim($row->description == '' ? '' : $row->description)));
                   return view('includes.partials._dit.actions_staff_education')->with(['id'=>$row->IDD,'name'=>$educationName]);
                })->make(true);

  }


  /**
   * Show the form for creating a new education.
   *
   * @return Illuminate\View\View
   */
  public function create()
  {
      $staffs = Staff::pluck('fname','id')->all();
      return view('admin.dit_site_education.create', compact('staffs'));
  }

  /**
   * Store a new education in the storage.
   *
   * @param App\Http\Requests\EducationFormRequest $request
   *
   * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
   */
  public function store(EducationFormRequest $request)
  {
      try {

          $data = $request->getData();

          Education::create($data);

            return response()->json([
              'error' => false,
              'messages' => [trans('education.model_was_added')]
          ]);


      } catch (Exception $exception) {
          return response()->json([
              'error' => true,
              'messages' => [trans('education.unexpected_error')]
          ]);

      }
  }

  /**
   * Display the specified education.
   *
   * @param int $id
   *
   * @return Illuminate\View\View
   */
  public function show($id)
  {
      $education = Education::with('staff')->findOrFail($id);
      return view('admin.dit_site_education.show', compact('education'));
  }

  /**
   * Show the form for editing the specified education.
   *
   * @param int $id
   *
   * @return Illuminate\View\View
   */
  public function edit($id)
  {
      $education = Education::findOrFail($id);
      $staffs = Staff::pluck('fname','id')->all();

      return view('admin.dit_site_education.edit', compact('education','staffs'));
  }

  /**
   * Update the specified education in the storage.
   *
   * @param  int $id
   * @param App\Http\Requests\EducationFormRequest $request
   *
   * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
   */
  public function update($id, EducationFormRequest $request)
  {
      try {

          $data = $request->getData();

          $education = Education::findOrFail($id);
          $education->update($data);

          return response()->json([
              'error' => false,
              'messages' => [trans('education.model_was_updated')]
          ]);


      } catch (Exception $exception) {

          return response()->json([
              'error' => true,
              'messages' => [trans('education.unexpected_error')]
          ]);


      }
  }
  /**
   * Remove the specified education from the storage.
   *
   * @param  int $id
   *
   * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
   */
  public function destroy($id)
  {
      try {
          $education = Education::findOrFail($id);
          $education->delete();

              return response()->json([
                  'error' => false,
                  'messages' =>  [trans('education.model_was_deleted')]
              ]);

      } catch (Exception $exception) {

          return response()->json([
              'error' => true,
              'messages' => [trans('education.unexpected_error')]
          ]);

      }
  }



}
