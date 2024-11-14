<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;



class DashboardController extends Controller
{
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'users' => User::count(),
            'admin' => User::role('Admin')->count(),
            'active_users' =>  User::where('deleted_at',NULL)->count(),
            'inactive_users' => User::where("deleted_at","!=",NULL)->count()
        ];
        return view('admin.dashboards.index',compact('data'));
    }

}
