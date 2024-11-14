
<div class="card card-default">
        <!-- card body-->
        <div class="card-body">
                <dl class="dl-holizontal">
                    <dt>{{ trans('roles.name') }}</dt>
                    <dd>{{ $role->name }}</dd>
                    <dt>{{ trans('roles.guard_name') }}</dt>
                    <dd>{{ $role->guard_name }}</dd>
                    <dt>{{ trans('roles.created_at') }}</dt>
                    <dd>{{ $role->created_at }}</dd>
                    <dt>{{ trans('roles.updated_at') }}</dt>
                    <dd>{{ $role->updated_at }}</dd>

                </dl>
            </div>
            <div class="row ml-3  mr-3">
                    @foreach($permissions as $perm)
                        <?php
                            $per_found = null;
                            if( isset($role) ) {
                                $per_found = $role->hasPermissionTo($perm->name);
                            }
                            if( isset($user)) {
                                $per_found = $user->hasDirectPermission($perm->name);
                            }
                        ?>
                        <div class="col-md-3">
                            <div class="checkbox">
                                <label class="{{ str_contains($perm->name, 'delete') ? 'text-danger' : '' }}">
                                <input   disabled   <?php   echo ($per_found==null)? '':'checked'; ?> name="permissions[]" type="checkbox" value="{{$perm->name}}"> {{$perm->name}}
                                </label>
                            </div>
                        </div>
                    @endforeach
                </div>
       <!-- end card body-->
       </div>
    <!-- card -->
