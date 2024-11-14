<div class="card card-default">
    <!-- card body-->
    <div class="card-body">
            <dl class="dl-holizontal">
                <dt>{{ trans('permissions.name') }}</dt>
                <dd>{{ $permission->name }}</dd>
                <dt>{{ trans('permissions.guard_name') }}</dt>
                <dd>{{ $permission->guard_name }}</dd>
                <dt>{{ trans('permissions.created_at') }}</dt>
                <dd>{{ $permission->created_at }}</dd>
                <dt>{{ trans('permissions.updated_at') }}</dt>
                <dd>{{ $permission->updated_at }}</dd>
            </dl>
    </div>
<!-- end card body-->
</div>
<!-- card -->
