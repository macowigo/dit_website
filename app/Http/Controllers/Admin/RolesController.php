<?php

namespace App\Http\Controllers\Admin;

use Exception;
use App\Models\Role;
use App\Models\Permission;
use App\Http\Controllers\Controller;
use App\Http\Requests\RolesFormRequest;
use App\Traits\Authorisable;
use Yajra\Datatables\Datatables;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class RolesController extends Controller
{
    use Authorisable;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
  	public function __construct()
  	{
          $this->middleware(['auth','role:Admin']);
  	}

    /**
     * Display a listing of the roles.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $roles = Role::count();
        return view('admin.roles.index', compact('roles'));
    }

    public function getData(){

        $roles = DB::table('roles')->select(['id', 'name', 'guard_name', 'created_at']);

        return Datatables::of($roles)
            ->editColumn('created_at', function ($role) {
                return $role->created_at ? with(new Carbon($role->created_at))->format('m/d/Y') : '';
            })
            ->addColumn('action',function ($row){
                $roleName = ucwords(strtolower(trim($row->name == '' ? '' : $row->name)));
                return view('includes.partials._dit.actions_roles')->with(['id'=>$row->id,'name'=>$roleName]);
                })->make(true);

    }


    /**
     * Show the form for creating a new role.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        $permissions = Permission::all();
        return view('admin.roles.create',compact('permissions'));
    }

    /**
     * Store a new role in the storage.
     *
     * @param App\Http\Requests\RolesFormRequest $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(RolesFormRequest $request)
    {
        try {

            $data = $request->getData();
            //permissions array ids
            $permissions = $data['permissions'];
            \Log::info($permissions);

            if($role = Role::create($data)){

                $role->syncPermissions($permissions);
                return response()->json([
                    'error' => false,
                    'messages' => [trans('roles.model_was_added')]
                ]);

            }
            else{
                return response()->json([
                    'error' => true,
                    'messages' => [$exception->getMessage(),trans('roles.unexpected_error')]
                ]);
            }

        } catch (Exception $exception) {
            return response()->json([
                'error' => true,
                'messages' => [$exception->getMessage(),trans('roles.unexpected_error')]
            ]);
        }
    }

    /**
     * Display the specified role.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($role)
    {
        $permissions = Permission::all();
        return view('admin.roles.show', compact('role','permissions'));
    }

    /**
     * Show the form for editing the specified role.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($role)
    {
        $permissions = Permission::all();
        return view('admin.roles.edit', compact('role','permissions'));
    }

    /**
     * Update the specified role in the storage.
     *
     * @param  int $id
     * @param App\Http\Requests\RolesFormRequest $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function update($role, RolesFormRequest $request)
    {
        try {

            $data = $request->getData();
            $permissions = $data['permissions'];
            \Log::info($permissions);
            if($role){
                //update role
                $role->update($data);
                // admin role has everything
                if($role->name === 'Admin') {

                    //$role->syncPermissions(Permission::all());
                    $role->syncPermissions($permissions);
                    return response()->json([
                        'error' => false,
                        'messages' => [trans('roles.model_was_updated')]
                    ]);

                }

                $role->syncPermissions($permissions);
                return response()->json([
                    'error' => false,
                    'messages' => [trans('roles.model_was_updated')]
                ]);
              }
        } catch (Exception $exception) {
            return response()->json([
                'error' => true,
                'messages' => [$exception->getMessage(),trans('roles.unexpected_error')]
            ]);

        }
    }

    /**
     * Remove the specified role from the storage.
     *
     * @param  int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($role)
    {
         try {
                $name = $role->name;
                $role->delete();
                return response()->json([
                    'error' => false,
                    'messages' => [trans('roles.model_was_deleted')]
                ]);

        } catch (Exception $exception) {
                return response()->json([
                    'error' => true,
                    'messages' => [trans('roles.unexpected_error')]
                ]);

        }
    }



}
