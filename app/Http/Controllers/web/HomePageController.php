<?php

namespace App\Http\Controllers\web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\QuickLink;
use App\Models\Slider;
use App\Models\News;
use App\Models\Event;
use App\Models\AboutUs;

class HomePageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $sliders = Slider::where('is_public',1)->orderByRaw('RAND()')->get();
      $quick_links = QuickLink::where('is_public',1)->get();
      $news = News::where('is_public',1)->orderByDesc('created_at')->paginate(7);
      $newfirst = collect(['id'])->max();
      $events = Event::where('is_public',1)->orderByDesc('created_at')->paginate(4);


      return view('web.home.index',compact('quick_links','news','events','sliders','newfirst'));
    }

    public function news()
    {
      return view('web.home.all_news');
    }
    public function results()
    {
      return view('web.home.results');
    }
    public function mnews()
    {
      return view('web.home.mnews');
    }

    public function single_new($id)
    {
      $single_new = News::where('id', $id)->first();
      return view('web.home.single_new', compact('single_new'));
    }


    public function events()
    {
      return view('web.home.all_events');
    }

    public function publication()
    {
      return view('web.about_us.publication');
    }
    public function project()
    {
      return view('web.home.project.index');
    }
      public function ntp()
    {
      return view('web.home.project.ntp');
    }
	
    public function inhub()
    {
      return view('web.home.project.inhub');
    }

    public function inhub2()
    {
      return view('web.home.project.inhub2');
    }
    public function ongoing()
    {
      return view('web.home.project.ongoing');
    }

    public function partners()
    {
      return view('web.about_us.partners');
    }

    public function single_event($id)
    {
      $single_event = Event::where('id', $id)->first();
      $event_imgs = Event::where('id',$id)->get();
      return view('web.home.single_event', compact('single_event','event_imgs'));
    }
    public function news_attachment($id)
  {
      $single_new = News::where('id', $id)->first();
      //PDF file is stored under project/public/download/info.pdf
      $file= $single_new->attachment;
      $name1 =  $single_new->updated_at.'-DIT-'.$single_new->title;
      $name = str_replace( array( '\'','/', '"',
	          ',' , ';', '<', '>' ), '', $name1);

      $headers = [
                  'Content-Type' => 'pdf',
               ];

    return response()->download($file,   $name .'.'.'pdf', $headers);
  }

  public function event_attachment($id)
{
    $single_event = Event::where('id', $id)->first();
    //PDF file is stored under project/public/download/info.pdf
    $file= $single_event->attachment;
    $name1 = $single_event->updated_at.'-DIT-'.$single_event->title;
    $name = str_replace( array( '\'','/','"',
	        ',' , ';', '<', '>' ), ' ', $name1);

    $headers = [
                'Content-Type' => 'pdf',
             ];

  return response()->download($file, $name.'.'.'pdf', $headers);
}




public function e_resources()
{
	 /*
	  *   $quick_links = QuickLink::all();
	  *     $news = News::orderByDesc('updated_at')->paginate(5);
	  *       $newfirst = collect(['id'])->max();
	  *         $events = Event::orderByDesc('updated_at')->paginate(5);
	  *           $partners = Partner :: all();
	  *             $i=0; */

	  return view('web.home.e_resources');
}


}
