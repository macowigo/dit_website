@extends('layouts.master')

@section('content')
<div class="row justify-content-center">
<div class="col-md-12">
    <div class="card card-default">
    <!-- card-header -->
    <div class="card-header">
        <div class="d-flex align-items-center">
              <h3><i class="fa fa-user blue"></i><h4>&nbsp;  Add New {{ !empty($permission->name) ? $permission->name : 'Permission' }}</h4></h3>
              <div class="ml-auto">
                <div class="btn-group btn-group-sm" role="group">
              <a href="{{ route('admin.permission.index') }}" class="btn btn-primary pull-right" title="{{ trans('permissions.show_all') }}">
                      <span class="fa fa-th-list" aria-hidden="true"></span>
                  </a>
              </div>
            </div>
        </div>
      </div>
        <!-- end card-header -->
      <div class="card-body">
          <form method="POST" action="{{ route('admin.permission.store') }}" accept-charset="UTF-8" id="create_permission_form" name="create_permission_form" class="form-horizontal">
          {{ csrf_field() }}
          @include ('admin.permissions.form', [
                                      'permission' => null,
                                      ])
              <div class="form-group">
                  <div class="col-md-offset-2 col-md-10">
                      <input class="btn btn-primary" type="submit" value="{{ trans('permissions.add') }}">
                  </div>
              </div>
          </form>
            </div>
        <!-- end card body-->
        </div>
        <!-- card -->
    </div>
    <!-- col -->
</div>
<!-- row -->
@endsection
