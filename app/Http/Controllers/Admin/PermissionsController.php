<?php

namespace App\Http\Controllers\Admin;

use App\Models\Permission;
use App\Models\Role;
use App\Http\Controllers\Controller;
use App\Http\Requests\PermissionsFormRequest;
use App\Traits\Authorisable;
use Exception;
use Yajra\Datatables\Datatables;
use Carbon\Carbon;

class PermissionsController extends Controller
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
     * Display a listing of the permissions.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $permissions = Permission::count();
        return view('admin.permissions.index', compact('permissions'));
    }


    public function getData(){

        $permissions = \DB::table('permissions')->select(['id', 'name', 'guard_name', 'created_at']);

        return Datatables::of($permissions)
            ->editColumn('created_at', function ($permission) {
                return $permission->created_at ? with(new Carbon($permission->created_at))->format('d/m/Y') : '';
            })
            ->addColumn('action',function ($row){
                $permissionName = ucwords(strtolower(trim($row->name == '' ? '' : $row->name)));
                return view('includes.partials._dit.actions_permissions')->with(['id'=>$row->id,'name'=>$permissionName]);
                })->make(true);

    }
    /**
     * Show the form for creating a new permission.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        $this->generate_permissions();
        return redirect()->route('admin.permission.index');

    }

    /**
     * Store a new permission in the storage.
     *
     * @param App\Http\Requests\PermissionsFormRequest $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(PermissionsFormRequest $request)
    {
        try {

            $data = $request->getData();

            Permission::create($data);
            return redirect()->route('admin.permission.index');

        } catch (Exception $exception) {

            return back()->withInput();
        }
    }

    /**
     * Display the specified permission.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($permission)
    {
        return view('admin.permissions.show', compact('permission'));
    }

    /**
     * Show the form for editing the specified permission.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($permission)
    {
        return view('admin.permissions.edit', compact('permission'));
    }

    /**
     * Update the specified permission in the storage.
     *
     * @param  int $id
     * @param App\Http\Requests\PermissionsFormRequest $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function update($permission, PermissionsFormRequest $request)
    {
        try {

            $data = $request->getData();
            $permission->update($data);
            return redirect()->route('admin.permission.index');

        } catch (Exception $exception) {

            return back()->withInput();
        }
    }

    /**
     * Remove the specified permission from the storage.
     *
     * @param  int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($permission)
    {

        try {

            $name = $permission->name;
            //$permission->delete();

             $successMessage = [
                "ERROR"=>false,
                "MESSAGE"=>"<b>Permission ".$name." was deleted successfully</b>"
            ];
            $message = trans('permissions.model_was_deleted');

            return view('responses._viewMessagesResponse')->with([
                'message'=>$successMessage,
            ]);

        } catch (Exception $exception) {

                $errorMessage = [
                    "ERROR"=>true,
                    "MESSAGE"=>trans('permissions.unexpected_error')
                ];

                $message = trans('permissions.unexpected_error');

                return view('responses._viewMessagesResponse')->with([
                    'message'=>$errorMessage,
                ]);
        }

    }

    /**
     * This function generates permissions automatically from the models folder
     */
    private function generate_permissions(){
        //TODO: Improve this function to be able to assign Admin all permission automatically
        $path = app_path().'/Models';
        $files = scandir($path);

        /*$models = array();
        $namespace = 'Your\Model\Namespace\\';*/
        foreach($files as $file) {
          //skip current and parent folder entries and non-php files
          if ($file == '.' || $file == '..') continue;
          $models[] = preg_replace('/\\.[^.\\s]{3,4}$/', '', $file);//$file; //$namespace . preg_replace('\.php$', '', $file);
        }
      //$users = User::whereHas('roles',function($q){$q->where('name', 'admin');})->get(); //get users with admin roles


        $ps = ['view','add','edit','delete'];
       // $role = Role::firstOrFail(['Admin'=>'name']);
       // $role = Role::findOrFail(1);
       // dd($role);
        foreach($models as $mod){
            foreach($ps as $p){
                $perm = Permission::firstOrNew(
                    ['name' => $p.'_'.strtolower(preg_replace('/(?<!^)[A-Z]/', '_$0', $mod))], ['guard_name' => 'web']);
                $perm->save();
                $perm->assignRole('Admin');
                //strtolower(preg_replace('/(?<!^)[A-Z]/', '_$0', $mod))  -> this is for changing modDule to mod_dule
            }
        }

        //give all permissions to admin
        //$role->syncPermissions(Permission::all());


    }



}
