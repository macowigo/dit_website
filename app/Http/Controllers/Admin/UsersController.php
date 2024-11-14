<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Role;
use App\Models\Permission;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Traits\Authorisable;
use Yajra\Datatables\Datatables;
use App\Helpers\InputValidator;
use Carbon\Carbon;
use Exception;


class UsersController extends Controller
{
    use Authorisable; //This is for checking permission of all actions

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
     * Display a listing of the users.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $users = User::count();
        return view('admin.users.index', compact('users'));
    }

    public function getData(Request $request){

        $users = User::select(['id', 'name', 'email']);
        return Datatables::of($users)
               ->addColumn('action',function ($row){
                   $userName = ucwords(strtolower(trim($row->name == '' ? '' : $row->name)));
                   return view('includes.partials._dit.actions_users')->with(['id'=>$row->id,'name'=>$userName]);
                })
                ->addColumn('role',function ($row){
                    if(count($row->getRoleNames()) == 0){
                       return "<span class='badge badge-danger'>None</span>";
                    }
                     $rl = "";
                     foreach($row->getRoleNames() as $role){
                        $rl .= ""."<span class='badge badge-success'>$role</span>".",";
                     }
                    return $rl;
                 })
                 ->rawColumns(['role'])
                 ->filter(function ($query) use ($request) {
                    if ($request->has('name')) {
                        $query->where('name', 'like', "%{$request->get('name')}%");
                    }
                    if ($request->has('email')) {
                        $query->where('email', 'like', "%{$request->get('email')}%");
                    }
            })->make(true);

    }

    /**
     * Show the form for creating a new user.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        $roles = Role::all();
        $password_required = true;
        return view('admin.users.create',compact('roles','password_required'));
    }

    /**
     * Store a new user in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {

            $this->validate($request, [
                'name' => 'bail|required|min:2',
                'email' => 'required|email|unique:users',
                'password' => 'required|min:6',
                'roles' => 'required|min:1'
            ]);

            // hash password
            $request->merge(['password' => bcrypt($request->get('password'))]);
            //Create the user
            if ( $user = User::create($request->except('roles', 'permissions')) ) {
                $this->syncPermissions($request, $user);
                return response()->json([
                    'error' => false,
                    'messages' => [trans('users.model_was_added')]
                ]);

            }
        } catch (Exception $exception) {

            return response()->json([
                'error' => true,
                'messages' => [$exception->getMessage()]
            ]);


        }
    }

    /**
     * Display the specified user.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show(User $user)
    {
        return view('admin.users.show',compact('user'));

    }

    /**
     * Show the form for editing the specified user.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($user)
    {
        $roles = Role::all();
        $permissions = Permission::all('name', 'id');
        $password_required = false;
        return view('admin.users.edit', compact('user','roles','permissions','password_required'));
    }

   /**
    * This function is used to edit user roles
    */

    public function edit_role($user)
    {
        $login_user=User::findOrFail(Auth::Id());

        if($login_user->hasRole('Admin')){

          $roles = Role::all();
          $permissions = Permission::all('name', 'id');
          return view('admin.users.edit_role', compact('user','roles','permissions'));
        }
        else{

           $message = "You do not have permission  to access  this page!";
           return response()->json([
                'error' => true,
                'messages' => [$message]
            ]);

        }
    }

 /**
     * Update the specified user in the storage.
     *
     * @param  int $id
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function update($user, Request $request)
    {  \Log::info($request->all());
         try {
            $this->validate($request, [
                'name' => 'bail|required|min:2',
                'email' => 'required|email|unique:users,email,' . $user->id,
                'roles' => 'required|min:1'
            ]);

            // check for password change
            if($request->get('password')) {
               // Handle the user roles
                $this->syncPermissions($request, $user);
                $user->password = bcrypt($request->get('password'));
                $user->name = $request->get('name');
                $user->email = $request->get('email');
                $user->save();

               return response()->json([
                   'error' => false,
                   'messages' => [trans('users.model_was_updated')]
               ]);

            }else{
                // Handle the user roles
                 $this->syncPermissions($request, $user);
                 $user->name = $request->get('name');
                 $user->email = $request->get('email');
                 $user->save();

                return response()->json([
                    'error' => false,
                    'messages' => [trans('users.model_was_updated')]
                ]);
            }

        } catch (Exception $exception) {
            return response()->json([
                'error' => true,
                'messages' => [$exception->getMessage(),trans('users.unexpected_error')]
            ]);
        }
    }

    /**
     * Update the specified user in the storage.
     *
     * @param  int $id
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function update_role($user, Request $request)
    {
      $login_user=User::findOrFail(Auth::Id());

        if($login_user->hasRole('Admin'))
        {
           try {

                $this->validate($request, [
                    'name' => 'bail|required|min:2',
                    'email' => 'required|email|unique:users,email,' . $user->id,
                    'roles' => 'required|min:1'
                ]);

                // Update user
                $user->fill($request->except('roles', 'permissions'));
                // Handle the user roles
                $this->syncPermissions($request, $user);

                $user->save();

                return response()->json([
                'error' => false,
                'messages' => [trans('users.model_was_updated')]
            ]);


              } catch (Exception $exception) {

                return response()->json([
                    'error' => true,
                    'messages' => [$exception->getMessage(),trans('users.unexpected_error')]
                ]);

              }
        } //TODO: Add else clause... to handuabnormal  access to this resouces
    }

    /**
     * Remove the specified user from the storage.
     *
     * @param  int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($user)
    {

        try {
            if(Auth::user()->id == $user->id) {
                $message = "Access Denied!! User Can not deleted his on account";
                    return response()->json([
                        'error' => true,
                        'messages' => [$message]
                    ]);
                }else{

               $user->delete();
                return response()->json([
                    'error' => false,
                    'messages' => [trans('users.model_was_deleted')]
                ]);
            }
        } catch (Exception $exception) {

            return response()->json([
                'error' => true,
                'messages' => [$exception->getMessage(),trans('users.unexpected_error')]
            ]);
        }
    }

    /**
     * Function for syncing the permissions
     */
    private function syncPermissions(Request $request, $user)
    {
        // Get the submitted roles
        $roles = $request->get('roles', []);
        $permissions = $request->get('permissions', []);
        // Get the roles
        $roles = Role::find($roles);

        // check for current role changes
        if( ! $user->hasAllRoles( $roles ) ) {
            // reset all direct permissions for user
            $user->permissions()->sync([]);
        } else {
            // handle permissions
            $user->syncPermissions($permissions);
        }

        $user->syncRoles($roles);
        return $user;
    }


}
