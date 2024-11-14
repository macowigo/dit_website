<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\NewsFormRequest;
use App\Models\News;
use App\Traits\Authorisable;
use Yajra\Datatables\Datatables;
use Illuminate\Http\Request;


class NewsController extends Controller
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
   * Display a listing of the news.
   *
   * @return Illuminate\View\View
   */
  public function index()
  {
      $news = News::count();
      return view('admin.dit_site_news.index', compact('news'));
  }

 public function getData(){

      $news = News::select(['id','title','urllink','attachment','image','description','is_public']);

      return Datatables::of($news)
						->editColumn('is_public',function ($row){
						 return $row->is_public ? "<span class='badge badge-success'>Public</span>" : "<span class='badge badge-danger'>Not Public</span>";
						})
						->editColumn('attachment',function ($row){
								return '<a href='.asset($row->attachment).' target="_blank">Preview</a>';
						})
						->editColumn('image',function ($row){
								return '<a href='.asset($row->image).' target="_blank">Preview</a>';
						})
						->rawColumns(['attachment','image','is_public'])

	          ->addColumn('action',function ($row){
	              $title = ucwords(strtolower(trim($row->title == '' ? '' : $row->title)));
	                   return view('includes.partials._dit.actions_news')->with(['id'=>$row->id,'name'=>$title]);
	                })->make(true);

  }


  /**
   * Show the form for creating a new news.
   *
   * @return Illuminate\View\View
   */
  public function create()
  {
      return view('admin.dit_site_news.create');
  }

  /**
   * Store a new news in the storage.
   *
   * @param App\Http\Requests\NewsFormRequest $request
   *
   * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
   */
  public function store(NewsFormRequest $request)
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

          News::create($data);

            return response()->json([
              'error' => false,
              'messages' => [trans('news.model_was_added')]
          ]);


      } catch (Exception $exception) {
          return response()->json([
              'error' => true,
              'messages' => [trans('news.unexpected_error')]
          ]);

      }
  }

  /**
   * Display the specified news.
   *
   * @param int $id
   *
   * @return Illuminate\View\View
   */
  public function show($id)
  {
      $news = News::findOrFail($id);
      return view('admin.dit_site_news.show', compact('news'));
  }

  /**
   * Show the form for editing the specified news.
   *
   * @param int $id
   *
   * @return Illuminate\View\View
   */
  public function edit($id)
  {
      $news = News::findOrFail($id);
      return view('admin.dit_site_news.edit', compact('news'));
  }

  /**
   * Update the specified news in the storage.
   *
   * @param  int $id
   * @param App\Http\Requests\NewsFormRequest $request
   *
   * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
   */
  public function update($id, NewsFormRequest $request)
  {
      try {

          $data = $request->getData();
          $news = News::findOrFail($id);

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

          $news->update($data);

          return response()->json([
              'error' => false,
              'messages' => [trans('news.model_was_updated')]
          ]);


      } catch (Exception $exception) {

          return response()->json([
              'error' => true,
              'messages' => [trans('news.unexpected_error')]
          ]);


      }
  }
  /**
   * Remove the specified news from the storage.
   *
   * @param  int $id
   *
   * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
   */
  public function destroy($id)
  {
      try {
          $news = News::findOrFail($id);
          $news->delete();

              return response()->json([
                  'error' => false,
                  'messages' =>  [trans('news.model_was_deleted')]
              ]);

      } catch (Exception $exception) {

          return response()->json([
              'error' => true,
              'messages' => [trans('news.unexpected_error')]
          ]);

      }
  }




}
