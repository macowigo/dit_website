<?php

namespace App\Http\Controllers\departments;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Department;
use App\Models\Programme;
use App\Models\Staff;
use App\Models\ShortCourse;

class DepartmentPageController extends Controller
{

  public function index($id)
  {
    $department = Department::where('id', $id)->first();
    $programmes = Programme::where('department_id', $id)->get();
    $has_programmes = Programme::where('department_id', $id)->first();
    $od_programmes = Programme::where('department_id', $id)->where('level', 6)->first();
    $beng_programmes = Programme::where('department_id', $id)->where('level', 8)->first();
    $meng_programmes = Programme::where('department_id', $id)->where('level', 9)->first();
    $professioncourses = ShortCourse::where('department_id', $id)->get();
    $short_cs = ShortCourse::where('department_id', $id)->first();
    $hod = Staff::where('department_id', $id)->where('status', 1)->first();


     /*
    $quick_links = QuickLink::all();
    $news = News::orderByDesc('updated_at')->paginate(5);
    $newfirst = collect(['id'])->max();
    $events = Event::orderByDesc('updated_at')->paginate(5);
    $partners = Partner :: all();
    $i=0; */

    return view('web.departments.index',compact('department','hod','programmes','professioncourses','has_programmes',
    'od_programmes','beng_programmes','meng_programmes','short_cs'
    ));
  }
  public function staffs($id)
  {
    $dept = Department::where('id',$id)->first();
    $staffs = Staff::where('department_id', $id)->get();
    $staff = Staff::where('department_id', $id)->where('staff_type', 'Professors and Senior Lecturers')->first();
    $hod = Staff::where('department_id', $id)->where('title', 'Head of Department')->first();
    $staff_1 = Staff::where('department_id', $id)->where('staff_type', 'Lecturers')->first();
    $staff_2 = Staff::where('department_id', $id)->where('staff_type', 'Assistant Lecturers')->first();
    $staff_3 = Staff::where('department_id', $id)->where('staff_type', 'Tutorial Assistants')->first();
    $staff_4 = Staff::where('department_id', $id)->where('staff_type', 'Instructors')->first();
    $staff_5 = Staff::where('department_id', $id)->where('staff_type', 'Administrative and Supporting Staff')->first();

     /*
    $quick_links = QuickLink::all();
    $news = News::orderByDesc('updated_at')->paginate(5);
    $newfirst = collect(['id'])->max();
    $events = Event::orderByDesc('updated_at')->paginate(5);
    $partners = Partner :: all();
    $i=0; */

    return view('web.departments.staffs',compact('staffs','dept','hod','staff','staff_1','staff_2'
    ,'staff_3','staff_4','staff_5'
    ));
  }
}
