<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ExperiencesFormRequest;
use App\Models\Staff;
use App\Models\Experience;
use App\Traits\Authorisable;
use Yajra\Datatables\Datatables;
use Illuminate\Http\Request;


class ExperiencesController extends Controller
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
   * Display a listing of the experiences.
   *
   * @return Illuminate\View\View
   */
  public function index()
  {
      $experiences = Experience::count();
      return view('admin.dit_site_experience.index', compact('experiences'));
  }

 public function getData(){

      $experiences = Experience::with('staff')->select(['dit_site_experience.id as IDD','staff_id','description']);

      return Datatables::of($experiences)
          ->addColumn('action',function ($row){
              $experienceName = ucwords(strtolower(trim($row->description == '' ? '' : $row->description)));
                   return view('includes.partials._dit.actions_staff_experience')->with(['id'=>$row->IDD,'name'=>$experienceName]);
                })->make(true);

  }


  /**
   * Show the form for creating a new experience.
   *
   * @return Illuminate\View\View
   */
  public function create()
  {
      $staffs = Staff::pluck('fname','id')->all();
      return view('admin.dit_site_experience.create', compact('staffs'));
  }

  /**
   * Store a new experience in the storage.
   *
   * @param App\Http\Requests\ExperiencesFormRequest $request
   *
   * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
   */
  public function store(ExperiencesFormRequest $request)
  {
      try {

          $data = $request->getData();

          Experience::create($data);

            return response()->json([
              'error' => false,
              'messages' => [trans('experiences.model_was_added')]
          ]);


      } catch (Exception $exception) {
          return response()->json([
              'error' => true,
              'messages' => [trans('experiences.unexpected_error')]
          ]);

      }
  }

  /**
   * Display the specified experience.
   *
   * @param int $id
   *
   * @return Illuminate\View\View
   */
  public function show($id)
  {
      $experience = Experience::with('staff')->findOrFail($id);
      return view('admin.dit_site_experience.show', compact('experience'));
  }

  /**
   * Show the form for editing the specified experience.
   *
   * @param int $id
   *
   * @return Illuminate\View\View
   */
  public function edit($id)
  {
      $experience = Experience::findOrFail($id);
      $staffs = Staff::pluck('fname','id')->all();

      return view('admin.dit_site_experience.edit', compact('experience','staffs'));
  }

  /**
   * Update the specified experience in the storage.
   *
   * @param  int $id
   * @param App\Http\Requests\ExperiencesFormRequest $request
   *
   * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
   */
  public function update($id, ExperiencesFormRequest $request)
  {
      try {

          $data = $request->getData();

          $experience = Experience::findOrFail($id);
          $experience->update($data);

          return response()->json([
              'error' => false,
              'messages' => [trans('experiences.model_was_updated')]
          ]);


      } catch (Exception $exception) {

          return response()->json([
              'error' => true,
              'messages' => [trans('experiences.unexpected_error')]
          ]);


      }
  }
  /**
   * Remove the specified experience from the storage.
   *
   * @param  int $id
   *
   * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
   */
  public function destroy($id)
  {
      try {
          $experience = Experience::findOrFail($id);
          $experience->delete();

              return response()->json([
                  'error' => false,
                  'messages' =>  [trans('experiences.model_was_deleted')]
              ]);

      } catch (Exception $exception) {

          return response()->json([
              'error' => true,
              'messages' => [trans('experiences.unexpected_error')]
          ]);

      }
  }



}
