<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Staff;
use App\Models\Department;
use App\Models\Education;
use App\Models\Skills;
use App\Models\Experience;

class StaffPageController extends Controller
{
  public function index($id)
  {
    $staffs = Staff::where('department_id', $id)->get();
    $dept = Department::where('id',$id)->first();

    return view('web.departments.staffs',compact('staffs','dept'));
  }

  public function all_staff()
  {
      $all_staff = Staff::all();
      return view('web.home.all_staff',compact('all_staff'));
  }

  public function single_staff($id)
  {
      $single_staff = Staff::where('id',$id)->first();
      if(!$single_staff){
        return abort(404);
      }
      $educations = Education::where('staff_id',$id)->get();
      $experiences = Experience::where('staff_id',$id)->get();
      $skills = Skills::where('staff_id',$id)->get();

      return view('web.home.single_staff',compact('single_staff','skills','experiences','educations'));

  }

}
