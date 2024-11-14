<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SkillsFormRequest;
use App\Models\Staff;
use App\Models\Skills;
use App\Traits\Authorisable;
use Yajra\Datatables\Datatables;
use Illuminate\Http\Request;



class SkillsController extends Controller
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
   * Display a listing of the skills.
   *
   * @return Illuminate\View\View
   */
  public function index()
  {
      $skills = Skills::count();
      return view('admin.dit_site_skill.index', compact('skills'));
  }

 public function getData(){

      $skills = SKills::with('staff')->select(['dit_site_skill.id as IDD','staff_id','rating','description']);

      return Datatables::of($skills)
          ->addColumn('action',function ($row){
              $skillsName = ucwords(strtolower(trim($row->description == '' ? '' : $row->description)));
                   return view('includes.partials._dit.actions_staff_skill')->with(['id'=>$row->IDD,'name'=>$skillsName]);
                })->make(true);

  }


  /**
   * Show the form for creating a new skills.
   *
   * @return Illuminate\View\View
   */
  public function create()
  {
      $staffs = Staff::pluck('fname','id')->all();
      return view('admin.dit_site_skill.create', compact('staffs'));
  }

  /**
   * Store a new skills in the storage.
   *
   * @param App\Http\Requests\SkillsFormRequest $request
   *
   * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
   */
  public function store(SkillsFormRequest $request)
  {
      try {

          $data = $request->getData();

          Skills::create($data);

            return response()->json([
              'error' => false,
              'messages' => [trans('skills.model_was_added')]
          ]);


      } catch (Exception $exception) {
          return response()->json([
              'error' => true,
              'messages' => [trans('skills.unexpected_error')]
          ]);

      }
  }

  /**
   * Display the specified skills.
   *
   * @param int $id
   *
   * @return Illuminate\View\View
   */
  public function show($id)
  {
      $skills = Skills::with('staff')->findOrFail($id);
      return view('admin.dit_site_skill.show', compact('skills'));
  }

  /**
   * Show the form for editing the specified skills.
   *
   * @param int $id
   *
   * @return Illuminate\View\View
   */
  public function edit($id)
  {
      $skills = Skills::findOrFail($id);
      $staffs = Staff::pluck('fname','id')->all();

      return view('admin.dit_site_skill.edit', compact('skills','staffs'));
  }

  /**
   * Update the specified skills in the storage.
   *
   * @param  int $id
   * @param App\Http\Requests\SkillsFormRequest $request
   *
   * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
   */
  public function update($id, SkillsFormRequest $request)
  {
      try {

          $data = $request->getData();

          $skills = Skills::findOrFail($id);
          $skills->update($data);

          return response()->json([
              'error' => false,
              'messages' => [trans('skills.model_was_updated')]
          ]);


      } catch (Exception $exception) {

          return response()->json([
              'error' => true,
              'messages' => [trans('skills.unexpected_error')]
          ]);


      }
  }
  /**
   * Remove the specified skills from the storage.
   *
   * @param  int $id
   *
   * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
   */
  public function destroy($id)
  {
      try {
          $skills = Skills::findOrFail($id);
          $skills->delete();

              return response()->json([
                  'error' => false,
                  'messages' =>  [trans('skills.model_was_deleted')]
              ]);

      } catch (Exception $exception) {

          return response()->json([
              'error' => true,
              'messages' => [trans('skills.unexpected_error')]
          ]);

      }
  }



}
