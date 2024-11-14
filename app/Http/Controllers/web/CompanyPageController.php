<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CompanyPageController extends Controller
{
  public function index()
  {    
       return view('web.company.index');
  }
}
