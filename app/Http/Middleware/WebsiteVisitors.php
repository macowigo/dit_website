<?php

namespace App\Http\Middleware;

use App\Models\Visitor;
use Carbon\Carbon;
use Closure;
use Stevebauman\Location\Facades\Location;

class WebsiteVisitors
{
    public function handle($request, Closure $next)
    {
        $checkExistToday = Visitor::where([['ip_address', $request->ip()],
        ['user_agent',$request->header('User-Agent')],['url',$request->fullUrl()]])
        ->whereDate('created_at', Carbon::today())->count();
        if ($checkExistToday < 10) {
            $location = Location::get($request->ip());
            
            Visitor::create([
                'ip_address' => $request->ip(),
                'url' => $location ? $request->fullUrl() : 'Unknown',
                'country' => $location ? $location->countryName : 'Unknown',
                'city' => $location ? $location->cityName : 'Unknown',
                'region' => $location ? $location->regionName : 'Unknown',
                'user_agent' =>$request->header('User-Agent'),
                'created_at' => Carbon::now()
            ]);
        }
        return $next($request);
    }
}
