<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ShortCoursesFormRequest;
use App\Models\Department;
use App\Models\ShortCourse;
use App\Traits\Authorisable;
use Yajra\Datatables\Datatables;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ShortCoursesController extends Controller
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
   * Display a listing of the short courses.
   *
   * @return Illuminate\View\View
   */
  public function index()
  {
      $shortCourses = ShortCourse::count();
      return view('admin.dit_site_short_courses.index', compact('shortCourses'));
  }

 public function getData(){

      $shortCourses = ShortCourse::select(['id','code','name']);
      return Datatables::of($shortCourses)
          ->addColumn('action',function ($row){
              $shortCourseName = ucwords(strtolower(trim($row->name == '' ? '' : $row->name)));
                   return view('includes.partials._dit.actions_short_courses')->with(['id'=>$row->id,'name'=>$shortCourseName]);
                })->make(true);

  }


  /**
   * Show the form for creating a new short course.
   *
   * @return Illuminate\View\View
   */
  public function create()
  {
      $departments = Department::pluck('name','id')->all();
      return view('admin.dit_site_short_courses.create', compact('departments'));
  }

  /**
   * Store a new short course in the storage.
   *
   * @param App\Http\Requests\ShortCoursesFormRequest $request
   *
   * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
   */
  public function store(ShortCoursesFormRequest $request)
  {
      try {

          $data = $request->getData();

          ShortCourse::create($data);

            return response()->json([
              'error' => false,
              'messages' => [trans('short_courses.model_was_added')]
          ]);


      } catch (Exception $exception) {
          return response()->json([
              'error' => true,
              'messages' => [trans('short_courses.unexpected_error')]
          ]);

      }
  }

  /**
   * Display the specified short course.
   *
   * @param int $id
   *
   * @return Illuminate\View\View
   */
  public function show($id)
  {
      $shortCourse = ShortCourse::with('department')->findOrFail($id);
      return view('admin.dit_site_short_courses.show', compact('shortCourse'));
  }

  /**
   * Show the form for editing the specified short course.
   *
   * @param int $id
   *
   * @return Illuminate\View\View
   */
  public function edit($id)
  {
      $shortCourse = ShortCourse::findOrFail($id);
      $departments = Department::pluck('name','id')->all();

      return view('admin.dit_site_short_courses.edit', compact('shortCourse','departments'));
  }

  /**
   * Update the specified short course in the storage.
   *
   * @param  int $id
   * @param App\Http\Requests\ShortCoursesFormRequest $request
   *
   * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
   */
  public function update($id, ShortCoursesFormRequest $request)
  {
      try {

          $data = $request->getData();

          $shortCourse = ShortCourse::findOrFail($id);
          $shortCourse->update($data);

          return response()->json([
              'error' => false,
              'messages' => [trans('short_courses.model_was_updated')]
          ]);


      } catch (Exception $exception) {

          return response()->json([
              'error' => true,
              'messages' => [trans('short_courses.unexpected_error')]
          ]);


      }
  }
  /**
   * Remove the specified short course from the storage.
   *
   * @param  int $id
   *
   * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
   */
  public function destroy($id)
  {
      try {
          $shortCourse = ShortCourse::findOrFail($id);
          $shortCourse->delete();

              return response()->json([
                  'error' => false,
                  'messages' =>  [trans('short_courses.model_was_deleted')]
              ]);

      } catch (Exception $exception) {

          return response()->json([
              'error' => true,
              'messages' => [trans('short_courses.unexpected_error')]
          ]);

      }
  }



}
