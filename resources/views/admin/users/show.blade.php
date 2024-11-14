<div class="card card-default">
    <!-- card body-->
    <div class="card-body">
            <dl class="dl-holizontal">
                <dt>{{ trans('users.name') }}</dt>
                <dd>{{ $user->name }}</dd>
                <dt>{{ trans('users.email') }}</dt>
                <dd>{{ $user->email }}</dd>
                <dt>{{ trans('users.password') }}</dt>
                <dd>{{ $user->password }}</dd>
                <dt>{{ trans('users.remember_token') }}</dt>
                <dd>{{ $user->remember_token }}</dd>
                <dt>{{ trans('users.created_at') }}</dt>
                <dd>{{ $user->created_at }}</dd>
                <dt>{{ trans('users.updated_at') }}</dt>
                <dd>{{ $user->updated_at }}</dd>

            </dl>
        </div>
       <!-- end card body-->
 </div>
<!-- card -->
