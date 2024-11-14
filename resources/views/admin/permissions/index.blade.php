@extends('layouts.master')

@section('breadcrumb')
<div class="row mb-2">
    <div class="col-sm-6">
    <h1 class="m-0 text-dark">  </h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">{{ Breadcrumbs::render('admin.permission.index') }}</a></li>
    </ol>
    </div><!-- /.col -->
</div><!-- /.row -->
@endsection

@section('content')

<div class="row justify-content-center">
<div class="col-md-12">
  <div class="card card-default">
   <!-- card-header -->
    <div class="card-header">
        <div class="d-flex align-items-center">
        <h3><i class="fa fa-user blue"></i> &nbsp;All {{ trans('permissions.model_plural') }} ({{ $permissions }} {{ Str::plural('Permission',$permissions)}} )</h3>
            <div class="ml-auto">
              @can('add_permission')
                <a href="{{ route('admin.permission.create') }}" class="btn btn-success btn-sm pull-right"  title="{{ trans('permissions.create') }}" style="text-decoration: none">Generate Permissions</a>
              @endcan
            </div>
        </div>
    </div>
     <!-- end card-header -->

<!-- card body-->
<div class="card-body">
  @if($permissions == 0)
          <div class="panel-body text-center">
              <h4>{{ trans('permissions.none_available') }}</h4>
          </div>
  @endif
      <table id="datatable" class="table table-striped table-bordered" style="width:100%">
          <thead>
              <tr>
                  <th>{{ trans('permissions.name') }}</th>
                  <th>{{ trans('permissions.guard_name') }}</th>
                  <th>{{ trans('permissions.created_at') }}</th>
                  <th>Action</th>
              </tr>
          </thead>

        </table>
      </div>
       <!-- end card body-->
    </div>
  <!-- card -->
  </div>
  <!-- col -->
</div>
<!-- row -->
@section('js')

<!-- DataTables -->
<script src="{{ asset('admin-lte/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('admin-lte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>

<!-- Export Buttons -->
<script src="{{ asset('admin-lte/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('admin-lte/plugins/datatables-buttons/js/buttons.flash.min.js') }}"></script>
<script src="{{ asset('admin-lte/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('admin-lte/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('admin-lte/plugins/jszip/jszip.min.js') }}"></script>
<script src="{{ asset('admin-lte/plugins/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset('admin-lte/plugins/pdfmake/vfs_fonts.js') }}"></script>

<script>
var _datatable = $('#datatable').DataTable({
    "paging": true,
    "lengthChange": true,
    "searching": true,
    "ordering": true,
    "info": true,
    "autoWidth": true,
    "responsive": true,
    "serverSide": true,
    "processing": true,
    "lengthMenu": [[15,25,30, 50, 100, 200, -1], [15,25,30, 50, 100, 200, "All"]],
    dom: 'Blfrtip',
        buttons: [{
                extend: 'pdf',
                exportOptions: {
                    columns: [ 0,1, 2]
                }
            },{
                extend: 'copy',
                exportOptions: {
                    columns: [ 0,1, 2]
                }
            }
            ,{
                extend: 'excel',
                exportOptions: {
                    columns: [ 0,1, 2]
                }
            }
            ,{
                extend: 'print',
                exportOptions: {
                    columns: [ 0,1, 2]
                }
            }
        ],
    ajax: {
      url:'{!! route('admin.permission.data') !!}',
    },
    columns: [
        {data: 'name', name: 'name'},
        {data: 'guard_name', name: 'guard_name'},
        {data: 'created_at', name: 'created_at'},
        {data: 'action', orderable: false, searchable: false}
    ]
});
</script>
@endsection
@endsection
