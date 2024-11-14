<?php

namespace App\Http\Controllers\Location;

use App\Http\Controllers\Controller;
use App\Http\Requests\DistrictsFormRequest;
use App\Models\District;
use App\Models\Region;
use App\Traits\Authorisable;
use Yajra\Datatables\Datatables;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use Carbon\Carbon;

class DistrictsController extends Controller
{
    use Authorisable;
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
     * Display a listing of the districts.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $districts = District::count();

        return view('admin.districts.index', compact('districts'));
    }

   public function getData(){

    $districts = District::join('regions', 'districts.region_id', '=', 'regions.id')
            ->select(['districts.id', 'districts.name', 'districts.code', 'regions.name as region_name']);


        return Datatables::of($districts)
           // ->editColumn('created_at', function ($district) {
           //     return $district->created_at ? with(new Carbon($district->created_at))->format('d/m/Y') : '';
           // })
            ->addColumn('action',function ($row){
                $districtName = ucwords(strtolower(trim($row->name == '' ? '' : $row->name)));
                return view('includes.partials._dit.actions_districts')->with(['id'=>$row->id,'name'=>$districtName]);
                })->make(true);

    }


    /**
     * Show the form for creating a new district.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        $Regions = Region::pluck('name','id')->all();
        return view('admin.districts.create', compact('Regions'));
    }

    /**
     * Store a new district in the storage.
     *
     * @param App\Http\Requests\DistrictsFormRequest $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(DistrictsFormRequest $request)
    {
        try {

            $data = $request->getData();

            //District::create($data);

              return response()->json([
                'error' => false,
                'messages' => [trans('districts.model_was_added')]
            ]);


        } catch (Exception $exception) {
            return response()->json([
                'error' => true,
                'messages' => [trans('districts.unexpected_error')]
            ]);

        }
    }

    /**
     * Display the specified district.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $district = District::with('region')->findOrFail($id);

        return view('admin.districts.show', compact('district'));
    }

    /**
     * Show the form for editing the specified district.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $district = District::findOrFail($id);
        $Regions = Region::pluck('name','id')->all();

        return view('admin.districts.edit', compact('district','Regions'));
    }

    /**
     * Update the specified district in the storage.
     *
     * @param  int $id
     * @param App\Http\Requests\DistrictsFormRequest $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function update($id, DistrictsFormRequest $request)
    {
        try {

            $data = $request->getData();

            $district = District::findOrFail($id);
            $district->update($data);

            return response()->json([
                'error' => false,
                'messages' => [trans('districts.model_was_updated')]
            ]);


        } catch (Exception $exception) {

            return response()->json([
                'error' => true,
                'messages' => [trans('districts.unexpected_error')]
            ]);


        }
    }

    /**
     * Remove the specified district from the storage.
     *
     * @param  int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $district = District::findOrFail($id);
            //$district->delete();

                return response()->json([
                    'error' => false,
                    'messages' =>  [trans('districts.model_was_deleted')]
                ]);

        } catch (Exception $exception) {

            return response()->json([
                'error' => true,
                'messages' => [trans('districts.unexpected_error')]
            ]);

        }
    }



}
