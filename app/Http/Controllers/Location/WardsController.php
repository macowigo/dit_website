<?php

namespace App\Http\Controllers\Location;

use App\Http\Controllers\Controller;
use App\Http\Requests\WardsFormRequest;
use App\Models\District;
use App\Models\Ward;
use App\Traits\Authorisable;
use Yajra\Datatables\Datatables;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use Carbon\Carbon;

class WardsController extends Controller
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
     * Display a listing of the wards.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $wards = Ward::count();

        return view('admin.wards.index', compact('wards'));
    }

   public function getData(){

        $wards = Ward::join('districts', 'wards.district_id', '=', 'districts.id')
                ->select(['wards.id', 'wards.name', 'wards.code', 'districts.name as district_name']);


        return Datatables::of($wards)
           // ->editColumn('created_at', function ($ward) {
           //     return $ward->created_at ? with(new Carbon($ward->created_at))->format('d/m/Y') : '';
           // })
            ->addColumn('action',function ($row){
                $wardName = ucwords(strtolower(trim($row->name == '' ? '' : $row->name)));
                return view('includes.partials._dit.actions_wards')->with(['id'=>$row->id,'name'=>$wardName]);
                })->make(true);

    }


    /**
     * Show the form for creating a new ward.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        $Districts = District::pluck('name','id')->all();
        return view('admin.wards.create', compact('Districts'));
    }

    /**
     * Store a new ward in the storage.
     *
     * @param App\Http\Requests\WardsFormRequest $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(WardsFormRequest $request)
    {
        try {

            $data = $request->getData();

            Ward::create($data);

              return response()->json([
                'error' => false,
                'messages' => [trans('wards.model_was_added')]
            ]);


        } catch (Exception $exception) {
            return response()->json([
                'error' => true,
                'messages' => [trans('wards.unexpected_error')]
            ]);

        }
    }

    /**
     * Display the specified ward.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $ward = Ward::with('district')->findOrFail($id);

        return view('admin.wards.show', compact('ward'));
    }

    /**
     * Show the form for editing the specified ward.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $ward = Ward::findOrFail($id);
        $Districts = District::pluck('name','id')->all();

        return view('admin.wards.edit', compact('ward','Districts'));
    }

    /**
     * Update the specified ward in the storage.
     *
     * @param  int $id
     * @param App\Http\Requests\WardsFormRequest $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function update($id, WardsFormRequest $request)
    {
        try {

            $data = $request->getData();

            $ward = Ward::findOrFail($id);
            $ward->update($data);

            return response()->json([
                'error' => false,
                'messages' => [trans('wards.model_was_updated')]
            ]);


        } catch (Exception $exception) {

            return response()->json([
                'error' => true,
                'messages' => [trans('wards.unexpected_error')]
            ]);


        }
    }

    /**
     * Remove the specified ward from the storage.
     *
     * @param  int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $ward = Ward::findOrFail($id);
            $ward->delete();

                return response()->json([
                    'error' => false,
                    'messages' =>  [trans('wards.model_was_deleted')]
                ]);

        } catch (Exception $exception) {

            return response()->json([
                'error' => true,
                'messages' => [trans('wards.unexpected_error')]
            ]);

        }
    }



}
