<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProgrammesFormRequest;
use App\Models\Department;
use App\Models\Programme;
use App\Traits\Authorisable;
use Exception;
use Yajra\Datatables\Datatables;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ProgrammesController extends Controller
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
   * Display a listing of the programmes.
   *
   * @return Illuminate\View\View
   */
  public function index()
  {
      $programmes = Programme::count();
      return view('admin.dit_site_programmes.index', compact('programmes'));
  }

 public function getData(){

      $programmes = Programme::select(['id','code','name','level']);

      return Datatables::of($programmes)
          ->addColumn('action',function ($row){
              $programmeName = ucwords(strtolower(trim($row->name == '' ? '' : $row->name)));
                   return view('includes.partials._dit.actions_programmes')->with(['id'=>$row->id,'name'=>$programmeName]);
                })->make(true);

  }


  /**
   * Show the form for creating a new programme.
   *
   * @return Illuminate\View\View
   */
  public function create()
  {
      $departments = Department::pluck('name','id')->all();
      return view('admin.dit_site_programmes.create', compact('departments'));
  }

  /**
   * Store a new programme in the storage.
   *
   * @param App\Http\Requests\ProgrammesFormRequest $request
   *
   * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
   */
  public function store(ProgrammesFormRequest $request)
  {
      try {

          $data = $request->getData();

          Programme::create($data);

            return response()->json([
              'error' => false,
              'messages' => [trans('programmes.model_was_added')]
          ]);


      } catch (Exception $exception) {
          return response()->json([
              'error' => true,
              'messages' => [trans('programmes.unexpected_error')]
          ]);

      }


  }

  /**
   * Display the specified programme.
   *
   * @param int $id
   *
   * @return Illuminate\View\View
   */
  public function show($id)
  {
      $programme = Programme::with('department')->findOrFail($id);
      return view('admin.dit_site_programmes.show', compact('programme'));
  }

  /**
   * Show the form for editing the specified programme.
   *
   * @param int $id
   *
   * @return Illuminate\View\View
   */
  public function edit($id)
  {
      $programme = Programme::findOrFail($id);
      $departments = Department::pluck('name','id')->all();

      return view('admin.dit_site_programmes.edit', compact('programme','departments'));
  }

  /**
   * Update the specified programme in the storage.
   *
   * @param  int $id
   * @param App\Http\Requests\ProgrammesFormRequest $request
   *
   * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
   */
  public function update($id, ProgrammesFormRequest $request)
  {
      try {

          $data = $request->getData();

          $programme = Programme::findOrFail($id);
          $programme->update($data);

          return response()->json([
              'error' => false,
              'messages' => [trans('programmes.model_was_updated')]
          ]);


      } catch (Exception $exception) {

          return response()->json([
              'error' => true,
              'messages' => [trans('programmes.unexpected_error')]
          ]);


      }
  }
  /**
   * Remove the specified programme from the storage.
   *
   * @param  int $id
   *
   * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
   */
  public function destroy($id)
  {
      try {
          $programme = Programme::findOrFail($id);
          $programme->delete();

              return response()->json([
                  'error' => false,
                  'messages' =>  [trans('programmes.model_was_deleted')]
              ]);

      } catch (Exception $exception) {

          return response()->json([
              'error' => true,
              'messages' => [trans('programmes.unexpected_error')]
          ]);

      }
  }



}
