<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Visitor;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Yajra\Datatables\Datatables;

class WebsiteVisitorsController extends Controller
{
    function index() : View {
        $visitor=Visitor::count();
        return view('admin.site_visitors.all-visitors',compact('visitor'));
    }
    public function getVisitorsAll(){
        $visitors = Visitor::select(['id', 'ip_address', 'country','city','region','url','created_at']);
        return Datatables::of($visitors)
            ->editColumn('created_at', function ($visitor) {
                return $visitor->created_at ? with(new Carbon($visitor->created_at))->format('d/m/Y H:i:s') : '';
            })->make(true);
    }

    function todayVisitors() : View {
        $visitor=Visitor::whereDate('created_at', Carbon::today())->count();
        return view('admin.site_visitors.today-visitors',compact('visitor'));
    }
    public function getVisitorsToday(){
        $visitors = Visitor::whereDate('created_at', Carbon::today())->select(['id', 'ip_address', 'country','city','region','url','created_at']);
        return Datatables::of($visitors)
            ->editColumn('created_at', function ($visitor) {
                return $visitor->created_at ? with(new Carbon($visitor->created_at))->format('d/m/Y H:i:s') : '';
            })->make(true);
    }

    function thisWeekVisitors() : View {
        $visitor=Visitor::whereBetween('created_at',[Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->count();
        return view('admin.site_visitors.week-visitors',compact('visitor'));
    }
    public function getVisitorsThisWeek(){
        $visitors = Visitor::whereBetween('created_at',[Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->select(['id', 'ip_address', 'country','city','region','url','created_at']);
        return Datatables::of($visitors)
            ->editColumn('created_at', function ($visitor) {
                return $visitor->created_at ? with(new Carbon($visitor->created_at))->format('d/m/Y H:i:s') : '';
            })->make(true);
    }


    function thisMonthVisitors() : View {
        $visitor=Visitor::whereMonth('created_at',Carbon::now()->month)->whereYear('created_at', Carbon::now()->year)->count();
        return view('admin.site_visitors.month-visitors',compact('visitor'));
    }
    public function getVisitorsThisMonth(){
        $visitors = Visitor::whereMonth('created_at',Carbon::now()->month)->whereYear('created_at', Carbon::now()->year)->select(['id', 'ip_address', 'country','city','region','url','created_at']);
        return Datatables::of($visitors)
            ->editColumn('created_at', function ($visitor) {
                return $visitor->created_at ? with(new Carbon($visitor->created_at))->format('d/m/Y H:i:s') : '';
            })->make(true);
    }

   
}
