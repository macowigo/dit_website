<?php

namespace App\Http\Controllers\Location;

use App\Http\Controllers\Controller;
use App\Http\Requests\CountriesFormRequest;
use App\Models\Country;
use App\Traits\Authorisable;
use Yajra\Datatables\Datatables;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use Carbon\Carbon;

class CountriesController extends Controller
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
     * Display a listing of the countries.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $countries = Country::count();

        return view('admin.countries.index', compact('countries'));
    }

   public function getData(){

        $countries = DB::table('countries')->select(['id','name','short_name']);

        return Datatables::of($countries)
           // ->editColumn('created_at', function ($country) {
           //     return $country->created_at ? with(new Carbon($country->created_at))->format('d/m/Y') : '';
           // })
            ->addColumn('action',function ($row){
                $countryName = ucwords(strtolower(trim($row->name == '' ? '' : $row->name)));
                return view('includes.partials._dit.actions_countries')->with(['id'=>$row->id,'name'=>$countryName]);
                })->make(true);

    }


    /**
     * Show the form for creating a new country.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {

        return view('admin.countries.create');
    }

    /**
     * Store a new country in the storage.
     *
     * @param App\Http\Requests\CountriesFormRequest $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(CountriesFormRequest $request)
    {
        try {

            $data = $request->getData();

            Country::create($data);

              return response()->json([
                'error' => false,
                'messages' => [trans('countries.model_was_added')]
            ]);


        } catch (Exception $exception) {
            return response()->json([
                'error' => true,
                'messages' => [trans('countries.unexpected_error')]
            ]);

        }
    }

    /**
     * Display the specified country.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $country = Country::findOrFail($id);

        return view('admin.countries.show', compact('country'));
    }

    /**
     * Show the form for editing the specified country.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $country = Country::findOrFail($id);


        return view('admin.countries.edit', compact('country'));
    }

    /**
     * Update the specified country in the storage.
     *
     * @param  int $id
     * @param App\Http\Requests\CountriesFormRequest $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function update($id, CountriesFormRequest $request)
    {
        try {

            $data = $request->getData();

            $country = Country::findOrFail($id);
            $country->update($data);

            return response()->json([
                'error' => false,
                'messages' => [trans('countries.model_was_updated')]
            ]);


        } catch (Exception $exception) {

            return response()->json([
                'error' => true,
                'messages' => [trans('countries.unexpected_error')]
            ]);


        }
    }

    /**
     * Remove the specified country from the storage.
     *
     * @param  int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $country = Country::findOrFail($id);
            $country->delete();

                return response()->json([
                    'error' => false,
                    'messages' =>  [trans('countries.model_was_deleted')]
                ]);

        } catch (Exception $exception) {

            return response()->json([
                'error' => true,
                'messages' => [trans('countries.unexpected_error')]
            ]);

        }
    }



}
