@extends('layouts.master')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card card-default">
        <!-- card-header -->
        <div class="card-header">
        <div class="d-flex align-items-center">
                <h3><i class="fa fa-user blue"></i>  <h4>{{ !empty($permission->name) ? $permission->name : 'Permission' }}</h4></h3>
                <div class="ml-auto">
                  <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('admin.permission.index') }}" class="btn btn-primary" title="{{ trans('permissions.show_all') }}">
                         <span class="fa fa-th-list" aria-hidden="true"></span>
                     </a>
                     <a  href="{{ route('admin.permission.create') }}"
                        class="btn btn-success"
                        title="{{ trans('permissions.create') }}">
                        <i class=" fas fa-fw fa-plus" aria-hidden="true"></i>
                    </a>
                  </div>
                </div>
            </div>
         </div><!-- end card-header -->
          <!-- card body-->
        <div class="card-body">
              <form method="POST" action="{{ route('admin.permission.update', $permission->id) }}" id="edit_permission_form" name="edit_permission_form" accept-charset="UTF-8" class="form-horizontal">
              {{ csrf_field() }}
              <input name="_method" type="hidden" value="PUT">
              @include ('admin.permissions.form', [
                                          'permission' => $permission,
                                      ])

                  <div class="form-group">
                      <div class="col-md-offset-2 col-md-10">
                          <input class="btn btn-primary" type="submit" value="{{ trans('permissions.update') }}">
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
