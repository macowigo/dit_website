<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SlidersFormRequest;
use App\Models\Slider;
use App\Traits\Authorisable;
use Yajra\Datatables\Datatables;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;


class SlidersController extends Controller
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
   * Display a listing of the sliders.
   *
   * @return Illuminate\View\View
   */
  public function index()
  {
      $sliders = Slider::count();
      return view('admin.dit_site_sliders.index', compact('sliders'));
  }

 public function getData(){

      $sliders = Slider::select(['id','url','caption','title','is_public']);

      return Datatables::of($sliders)

					->editColumn('is_public',function ($row){
					 return $row->is_public ? "<span class='badge badge-success'>Public</span>" : "<span class='badge badge-danger'>Not Public</span>";
					})
					->editColumn('url',function ($row){
						  return '<a href='.asset($row->url).' target="_blank">Preview</a>';

					})
				  ->rawColumns(['is_public','url'])

          ->addColumn('action',function ($row){
              $sliderName = ucwords(strtolower(trim($row->title == '' ? '' : $row->title)));

                   return view('includes.partials._dit.actions_sliders')->with(['id'=>$row->id,'name'=>$sliderName]);
          })->make(true);

  }


  /**
   * Show the form for creating a new slider.
   *
   * @return Illuminate\View\View
   */
  public function create()
  {
      return view('admin.dit_site_sliders.create');
  }

  /**
   * Store a new slider in the storage.
   *
   * @param App\Http\Requests\SlidersFormRequest $request
   *
   * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
   */
  public function store(SlidersFormRequest $request)
  {
      try {

          $data = $request->getData();

					if($request->hasFile('url')){
					$extension = $request->file('url')->extension();
					$filename= 'dit_slider_image_'.date("Y_m_d_h_i_s").'.'.$extension;
					$path = $request->file('url')->storeAs('/sliders',$filename,'public');
					$data['url']= $path;
			     }

          Slider::create($data);

            return response()->json([
              'error' => false,
              'messages' => [trans('sliders.model_was_added')]
          ]);


      } catch (Exception $exception) {
          return response()->json([
              'error' => true,
              'messages' => [trans('sliders.unexpected_error')]
          ]);

      }
  }

  /**
   * Display the specified slider.
   *
   * @param int $id
   *
   * @return Illuminate\View\View
   */
  public function show($id)
  {
      $slider = Slider::findOrFail($id);
      return view('admin.dit_site_sliders.show', compact('slider'));
  }

  /**
   * Show the form for editing the specified slider.
   *
   * @param int $id
   *
   * @return Illuminate\View\View
   */
  public function edit($id)
  {
      $slider = Slider::findOrFail($id);
      return view('admin.dit_site_sliders.edit', compact('slider'));
  }

  /**
   * Update the specified slider in the storage.
   *
   * @param  int $id
   * @param App\Http\Requests\SlidersFormRequest $request
   *
   * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
   */
  public function update($id, SlidersFormRequest $request)
  {
      try {

          $data = $request->getData();

          $slider = Slider::findOrFail($id);

					if($request->hasFile('url')){
					$extension = $request->file('url')->extension();
					$filename= 'dit_slider_image_'.date("Y_m_d_h_i_s").'.'.$extension;
					$path = $request->file('url')->storeAs('/sliders',$filename,'public');
					$data['url']= $path;
			     }

          $slider->update($data);

          return response()->json([
              'error' => false,
              'messages' => [trans('sliders.model_was_updated')]
          ]);


      } catch (Exception $exception) {

          return response()->json([
              'error' => true,
              'messages' => [trans('sliders.unexpected_error')]
          ]);


      }
  }
  /**
   * Remove the specified slider from the storage.
   *
   * @param  int $id
   *
   * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
   */
  public function destroy($id)
  {
      try {
          $slider = Slider::findOrFail($id);
           $slider->delete();

              return response()->json([
                  'error' => false,
                  'messages' =>  [trans('sliders.model_was_deleted')]
              ]);

      } catch (Exception $exception) {

          return response()->json([
              'error' => true,
              'messages' => [trans('sliders.unexpected_error')]
          ]);

      }
  }



}
