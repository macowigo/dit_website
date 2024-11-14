<?php

namespace App\Http\Controllers\Location;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegionsFormRequest;
use App\Models\Region;
use App\Traits\Authorisable;
use Yajra\Datatables\Datatables;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use Carbon\Carbon;

class RegionsController extends Controller
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
     * Display a listing of the regions.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $regions = Region::count();

        return view('admin.regions.index', compact('regions'));
    }

   public function getData(){

        $regions = DB::table('regions')->select(['id','name','code']);

        return Datatables::of($regions)
            ->addColumn('action',function ($row){
                $regionName = ucwords(strtolower(trim($row->name == '' ? '' : $row->name)));
                return view('includes.partials._dit.actions_regions')->with(['id'=>$row->id,'name'=>$regionName]);
                })->make(true);

    }


    /**
     * Show the form for creating a new region.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {

        return view('admin.regions.create');
    }

    /**
     * Store a new region in the storage.
     *
     * @param App\Http\Requests\RegionsFormRequest $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(RegionsFormRequest $request)
    {
        try {

            $data = $request->getData();

          //  Region::create($data);

              return response()->json([
                'error' => false,
                'messages' => [trans('regions.model_was_added')]
            ]);


        } catch (Exception $exception) {
            return response()->json([
                'error' => true,
                'messages' => [trans('regions.unexpected_error')]
            ]);

        }
    }

    /**
     * Display the specified region.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $region = Region::findOrFail($id);

        return view('admin.regions.show', compact('region'));
    }

    /**
     * Show the form for editing the specified region.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $region = Region::findOrFail($id);
        return view('admin.regions.edit', compact('region'));
    }

    /**
     * Update the specified region in the storage.
     *
     * @param  int $id
     * @param App\Http\Requests\RegionsFormRequest $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function update($id, RegionsFormRequest $request)
    {
        try {

            $data = $request->getData();

            $region = Region::findOrFail($id);
            $region->update($data);

            return response()->json([
                'error' => false,
                'messages' => [trans('regions.model_was_updated')]
            ]);


        } catch (Exception $exception) {

            return response()->json([
                'error' => true,
                'messages' => [trans('regions.unexpected_error')]
            ]);


        }
    }

    /**
     * Remove the specified region from the storage.
     *
     * @param  int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $region = Region::findOrFail($id);
            //$region->delete();

                return response()->json([
                    'error' => false,
                    'messages' =>  [trans('regions.model_was_deleted')]
                ]);

        } catch (Exception $exception) {

            return response()->json([
                'error' => true,
                'messages' => [trans('regions.unexpected_error')]
            ]);

        }
    }



}
