<?php

namespace App\Http\Controllers\admission;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Department;
use App\Models\Programme;
use App\Models\Staff;
use App\Models\Programmes\Professioncourses;

class ProgrammeController extends Controller
{

  public function index()
  {



     /*
    $news = News::orderByDesc('updated_at')->paginate(5);
    $newfirst = collect(['id'])->max();
    $events = Event::orderByDesc('updated_at')->paginate(5);
    $partners = Partner :: all();
    $i=0; */

    return view('web.admission.programmes.index');

  }


    public function requirements()
    {
     /*
      $quick_links = QuickLink::all();
      $news = News::orderByDesc('updated_at')->paginate(5);
      $newfirst = collect(['id'])->max();
      $events = Event::orderByDesc('updated_at')->paginate(5);
      $partners = Partner :: all();
      $i=0; */

      return view('web.admission.requirements.index');
    }

    public function fees()
    {
     /*
      $quick_links = QuickLink::all();
      $news = News::orderByDesc('updated_at')->paginate(5);
      $newfirst = collect(['id'])->max();
      $events = Event::orderByDesc('updated_at')->paginate(5);
      $partners = Partner :: all();
      $i=0; */

      return view('web.admission.fees.index');
    }

  
}
