<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\EventsFormRequest;
use App\Models\Event;
use App\Traits\Authorisable;
use Yajra\Datatables\Datatables;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use DB;


class EventsController extends Controller
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
   * Display a listing of the events.
   *
   * @return Illuminate\View\View
   */
  public function index()
  {
      $events = Event::count();
      return view('admin.dit_site_events.index', compact('events'));
  }

 public function getData(){

      $events = Event::select(['id','title','venue','description','description2','description3',
			'description4','urllink','attachment','image','image2','image3','image4','starttime','endtime','is_public']);

      return Datatables::of($events)
					->editColumn('is_public',function ($row){
					 return $row->is_public ? "<span class='badge badge-success'>Public</span>" : "<span class='badge badge-danger'>Not Public</span>";
					})
					->editColumn('attachment',function ($row){
							return '<a href='.asset($row->attachment).' target="_blank">Preview</a>';

					})
					->editColumn('image',function ($row){
							return '<a href='.asset($row->image).' target="_blank">Preview</a>';

					})
					->editColumn('image2',function ($row){
							return '<a href='.asset($row->image2).' target="_blank">Preview</a>';

					})
					->editColumn('image3',function ($row){
							return '<a href='.asset($row->image3).' target="_blank">Preview</a>';

					})
					->editColumn('image4',function ($row){
							return '<a href='.asset($row->image4).' target="_blank">Preview</a>';

					})
					->rawColumns(['attachment','image','image2','image3','image4','is_public'])
          ->addColumn('action',function ($row){
              $eventName = ucwords(strtolower(trim($row->title == '' ? '' : $row->title)));
                   return view('includes.partials._dit.actions_events')->with(['id'=>$row->id,'name'=>$eventName]);
                })->make(true);

  }


  /**
   * Show the form for creating a new event.
   *
   * @return Illuminate\View\View
   */
  public function create()
  {

      return view('admin.dit_site_events.create');
  }

  /**
   * Store a new event in the storage.
   *
   * @param App\Http\Requests\EventsFormRequest $request
   *
   * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
   */
  public function store(EventsFormRequest $request)
  {
      try {

          $data = $request->getData();

					if($request->hasFile('attachment')){
					$extension = $request->file('attachment')->extension();
					$filename= 'dit_attachment_'.date("Y_m_d_h_i_s").'.'.$extension;
					$path = $request->file('attachment')->storeAs('/attachments',$filename,'public');
					$data['attachment']= $path;
					 }

					 if($request->hasFile('image')){
 					$extension = $request->file('image')->extension();
 					$filename= 'dit_images_'.date("Y_m_d_h_i_s").'.'.$extension;
 					$path = $request->file('image')->storeAs('/images',$filename,'public');
 					$data['image']= $path;
 					 }
 					 if($request->hasFile('image2')){
 					 $extension = $request->file('image2')->extension();
 					 $filename= 'dit_images_2_'.date("Y_m_d_h_i_s").'.'.$extension;
 					 $path = $request->file('image2')->storeAs('/images',$filename,'public');
 					 $data['image2']= $path;
 						}
 					 if($request->hasFile('image3')){
 					 $extension = $request->file('image3')->extension();
 					 $filename= 'dit_image_3_'.date("Y_m_d_h_i_s").'.'.$extension;
 					 $path = $request->file('image3')->storeAs('/images',$filename,'public');
 					 $data['image3']= $path;
 						}
 					 if($request->hasFile('image4')){
 					 $extension = $request->file('image4')->extension();
 					 $filename= 'dit_image_4_'.date("Y_m_d_h_i_s").'.'.$extension;
 					 $path = $request->file('image4')->storeAs('/images',$filename,'public');
 					 $data['image4']= $path;
 						}


          Event::create($data);

            return response()->json([
              'error' => false,
              'messages' => [trans('events.model_was_added')]
          ]);


      } catch (Exception $exception) {
          return response()->json([
              'error' => true,
              'messages' => [trans('events.unexpected_error')]
          ]);

      }
  }

  /**
   * Display the specified event.
   *
   * @param int $id
   *
   * @return Illuminate\View\View
   */
  public function show($id)
  {
      $event = Event::findOrFail($id);
      return view('admin.dit_site_events.show', compact('event'));
  }

  /**
   * Show the form for editing the specified event.
   *
   * @param int $id
   *
   * @return Illuminate\View\View
   */
  public function edit($id)
  {
      $event = Event::findOrFail($id);
      return view('admin.dit_site_events.edit', compact('event'));
  }

  /**
   * Update the specified event in the storage.
   *
   * @param  int $id
   * @param App\Http\Requests\EventsFormRequest $request
   *
   * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
   */
  public function update($id, EventsFormRequest $request)
  {
      try {

          $data = $request->getData();

          $event = Event::findOrFail($id);

					if($request->hasFile('attachment')){
					$extension = $request->file('attachment')->extension();
					$filename= 'dit_attachment_'.date("Y_m_d_h_i_s").'.'.$extension;
					$path = $request->file('attachment')->storeAs('/attachments',$filename,'public');
					$data['attachment']= $path;
					 }

					 if($request->hasFile('image')){
 					$extension = $request->file('image')->extension();
 					$filename= 'dit_images_'.date("Y_m_d_h_i_s").'.'.$extension;
 					$path = $request->file('image')->storeAs('/images',$filename,'public');
 					$data['image']= $path;
 					 }
					 if($request->hasFile('image2')){
 					$extension = $request->file('image2')->extension();
 					$filename= 'dit_images_2_'.date("Y_m_d_h_i_s").'.'.$extension;
 					$path = $request->file('image2')->storeAs('/images',$filename,'public');
 					$data['image2']= $path;
 					 }
					 if($request->hasFile('image3')){
 					$extension = $request->file('image3')->extension();
 					$filename= 'dit_images_3_'.date("Y_m_d_h_i_s").'.'.$extension;
 					$path = $request->file('image3')->storeAs('/images',$filename,'public');
 					$data['image3']= $path;
 					 }
					 if($request->hasFile('image4')){
 					$extension = $request->file('image4')->extension();
 					$filename= 'dit_images_4_'.date("Y_m_d_h_i_s").'.'.$extension;
 					$path = $request->file('image4')->storeAs('/images',$filename,'public');
 					$data['image4']= $path;
 					 }


					 $event->update($data);

          return response()->json([
              'error' => false,
              'messages' => [trans('events.model_was_updated')]
          ]);


      } catch (Exception $exception) {

          return response()->json([
              'error' => true,
              'messages' => [trans('events.unexpected_error')]
          ]);


      }
  }
  /**
   * Remove the specified event from the storage.
   *
   * @param  int $id
   *
   * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
   */
  public function destroy($id)
  {
      try {
          $event = Event::findOrFail($id);
          $event->delete();

              return response()->json([
                  'error' => false,
                  'messages' =>  [trans('events.model_was_deleted')]
              ]);

      } catch (Exception $exception) {

          return response()->json([
              'error' => true,
              'messages' => [trans('events.unexpected_error')]
          ]);

      }
  }



}
