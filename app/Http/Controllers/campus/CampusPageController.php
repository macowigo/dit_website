<?php

namespace App\Http\Controllers\campus;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Department;
use App\Models\Campus;
use App\Models\Campusprogramme;
use App\Models\Staff;
use App\Models\ShortCourse;


class CampusPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index( )
     {

         return view('web.campus.index');
     }
     public function staffs($id)
     {
       $campus = Campus::where('id',$id)->first();
       $staffs = Staff::where('campus_id', $id)->get();
       $staff = Staff::where('campus_id', $id)->where('staff_type', 'Professors and Senior Lecturers')->first();
       $staff_1 = Staff::where('campus_id', $id)->where('staff_type', 'Lecturers')->first();
       $staff_2 = Staff::where('campus_id', $id)->where('staff_type', 'Assistant Lecturers')->first();
       $staff_3 = Staff::where('campus_id', $id)->where('staff_type', 'Tutorial Assistants')->first();
       $staff_4 = Staff::where('campus_id', $id)->where('staff_type', 'Instructors')->first();
       $staff_5 = Staff::where('campus_id', $id)->where('staff_type', 'Administrative and Supporting Staff')->first();

        /*
       $quick_links = QuickLink::all();
       $news = News::orderByDesc('updated_at')->paginate(5);
       $newfirst = collect(['id'])->max();
       $events = Event::orderByDesc('updated_at')->paginate(5);
       $partners = Partner :: all();
       $i=0; */

       return view('web.campus.staffs',compact('staffs','campus','staff','staff_1','staff_2'
       ,'staff_3','staff_4','staff_5'
       ));
     }
     public function campuses($id)
     {

         $campus = Campus::where('id', $id)->first();
         $programmes = Campusprogramme::where('campus_id', $id)->get();
         $has_programmes = Campusprogramme::where('campus_id', $id)->first();
          $veta_programmes = Campusprogramme::where('campus_id', $id)->where('level', 3)->first();
          $besictc_programmes = Campusprogramme::where('campus_id', $id)->where('level', 4)->first();

          $techc_programmes = Campusprogramme::where('campus_id', $id)->where('level', 5)->first();
         $od_programmes = Campusprogramme::where('campus_id', $id)->where('level', 6)->first();
         $beng_programmes = Campusprogramme::where('campus_id', $id)->where('level', 8)->first();
         $meng_programmes = Campusprogramme::where('campus_id', $id)->where('level', 9)->first();

          /* $professioncourses = ShortCourse::where('campus_id', $id)->get();
         $short_cs = ShortCourse::where('campus_id', $id)->first();



         $quick_links = QuickLink::all();
         $news = News::orderByDesc('updated_at')->paginate(5);
         $newfirst = collect(['id'])->max();
         $events = Event::orderByDesc('updated_at')->paginate(5);
         $partners = Partner :: all();
         $i=0; */

         return view('web.campus.campus',compact('campus','programmes','has_programmes',
         'veta_programmes','od_programmes','beng_programmes','meng_programmes','besictc_programmes','techc_programmes'
         ));
     }
    public function mwanza_campus()
    {
        //
    }
    public function myunga_campus()
    {
        //
    }

}
