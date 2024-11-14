<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\QuickLinksFormRequest;
use App\Models\QuickLink;
use App\Traits\Authorisable;
use Yajra\Datatables\Datatables;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;


class QuickLinksController extends Controller
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
   * Display a listing of the quick links.
   *
   * @return Illuminate\View\View
   */
  public function index()
  {
      $quickLinks = QuickLink::count();
      return view('admin.quick_links.index', compact('quickLinks'));
  }

  public function getData(){

      $quickLinks = QuickLink::select(['id','title','urllink','is_public']);
      return Datatables::of($quickLinks)
					 ->editColumn('is_public',function ($row){
						return $row->is_public ? "<span class='badge badge-success'>Public</span>" : "<span class='badge badge-danger'>Not Public</span>";
					 })
					 ->rawColumns(['is_public'])
           ->addColumn('action',function ($row){
                   $quickLinkName = ucwords(strtolower(trim($row->title == '' ? '' : $row->title)));
                   return view('includes.partials._dit.actions_quick_links')->with(['id'=>$row->id,'name'=>$quickLinkName]);
                })->make(true);

  }


  /**
   * Show the form for creating a new quick link.
   *
   * @return Illuminate\View\View
   */
  public function create()
  {
      return view('admin.quick_links.create');
  }

  /**
   * Store a new quick link in the storage.
   *
   * @param App\Http\Requests\QuickLinksFormRequest $request
   *
   * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
   */
  public function store(QuickLinksFormRequest $request)
  {
      try {

          $data = $request->getData();

          QuickLink::create($data);

            return response()->json([
              'error' => false,
              'messages' => [trans('quick_links.model_was_added')]
          ]);


      } catch (Exception $exception) {
          return response()->json([
              'error' => true,
              'messages' => [trans('quick_links.unexpected_error')]
          ]);

      }
  }

  /**
   * Display the specified quick link.
   *
   * @param int $id
   *
   * @return Illuminate\View\View
   */
  public function show($id)
  {
      $quickLink = QuickLink::findOrFail($id);
      return view('admin.quick_links.show', compact('quickLink'));
  }

  /**
   * Show the form for editing the specified quick link.
   *
   * @param int $id
   *
   * @return Illuminate\View\View
   */
  public function edit($id)
  {
      $quickLink = QuickLink::findOrFail($id);
      return view('admin.quick_links.edit', compact('quickLink'));
  }

  /**
   * Update the specified quick link in the storage.
   *
   * @param  int $id
   * @param App\Http\Requests\QuickLinksFormRequest $request
   *
   * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
   */
  public function update($id, QuickLinksFormRequest $request)
  {
      try {

          $data = $request->getData();
          $quickLink = QuickLink::findOrFail($id);
          $quickLink->update($data);

          return response()->json([
              'error' => false,
              'messages' => [trans('quick_links.model_was_updated')]
          ]);


      } catch (Exception $exception) {

          return response()->json([
              'error' => true,
              'messages' => [trans('quick_links.unexpected_error')]
          ]);


      }
  }
  /**
   * Remove the specified quick link from the storage.
   *
   * @param  int $id
   *
   * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
   */
  public function destroy($id)
  {
      try {
          $quickLink = QuickLink::findOrFail($id);
          $quickLink->delete();

              return response()->json([
                  'error' => false,
                  'messages' =>  [trans('quick_links.model_was_deleted')]
              ]);

      } catch (Exception $exception) {

          return response()->json([
              'error' => true,
              'messages' => [trans('quick_links.unexpected_error')]
          ]);

      }
  }



}
