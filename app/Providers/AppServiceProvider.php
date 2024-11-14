<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Programme;
use App\Models\Event;
use App\Models\News;
use App\Models\User;
use App\Models\Slider;
use App\Models\Campus;
use App\Models\Staff;
use App\Models\QuickLink;
use App\Models\Visitor;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
      $startOfWeek = Carbon::now()->startOfWeek();
      $endOfWeek = Carbon::now()->endOfWeek();
      $users = User::get();
      $departments = Department::get();
      $campus = Campus::get();
      $programes = Programme::all();
      $events = Event::orderByDesc('updated_at')->where('is_public',1)->paginate(3);
      $allevents = Event::orderByDesc('updated_at')->get();
      $news = News:: orderByDesc('updated_at')->where('is_public',1)->paginate(3);
      $allnews =  News::where('is_public',1)->orderByDesc('updated_at')->get();
      $quick_link = QuickLink::where('is_public',1)->get();
      $top3 = Staff::where('status', '>', 1)->get();
      $s_staff = Staff::get();
      $results = News::where('description','results')->where('is_public',0)->orderByDesc('created_at')->get();
      $mnews = News::where('description','multiple')->where('is_public',0)->orderByDesc('created_at')->get();
      $news_title =News::where('description','multiple')->where('is_public',1)->orderByDesc('created_at')->first();
      
      view()->share('departments', $departments);
      view()->share('programes',$programes);
      view()->share('news', $news);
      view()->share('events',$events);
      view()->share('top3',$top3);
      view()->share('s_staff',$s_staff);
      view()->share('allnews',$allnews);
      view()->share('allevents',$allevents);
      view()->share('quick_link',$quick_link);
      view()->share('mnews',$mnews);
      view()->share('news_title',$news_title);
      view()->share('results',$results);
      view()->share('campus',$campus);
    
    }
}
