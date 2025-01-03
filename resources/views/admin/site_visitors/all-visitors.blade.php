@extends('layouts.master')

@section('breadcrumb')
<div class="row mb-2">
    <div class="col-sm-6">
    <h1 class="m-0 text-dark">  </h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">

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
                <h3><i class="fa fa-user blue"></i>&nbsp;All Visitor ({{ $visitor }} {{Str::plural('Visitor', $visitor )}} )</h3>
            </div>
        </div>
      <!-- end card-header -->
        <!-- card body-->
        <div class="card-body">
            @if( $visitor == 0)
                    <div class="panel-body text-center">
                        <h4>{{ trans('roles.none_available') }}</h4>
                    </div>
            @endif
          <table id="datatable" class="table table-bordered table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th>IP Address</th>
                        <th>Country</th>
                        <th>City</th>
                        <th>Region</th>
                        <th>Url</th>
                        <th>Visited At</th>
                    </tr>
                </thead>
                </tbody>
            </table>
          </div>
       <!-- card body-->
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
                    columns: [ 0,1, 2,3,4]
                }
            },{
                extend: 'copy',
                exportOptions: {
                    columns: [0,1, 2,3,4]
                }
            }
            ,{
                extend: 'excel',
                exportOptions: {
                    columns: [ 0,1, 2,3,4]
                }
            }
            ,{
                extend: 'print',
                exportOptions: {
                    columns: [ 0,1, 2,3,4]
                }
            }
        ],
    ajax: {
      url:'{!! route('visitors.data.all') !!}'
    },
    columns: [
        {data: 'ip_address', name: 'ip_address'},
        {data: 'country', name: 'country'},
        {data: 'city', name: 'city'},
        {data: 'region', name: 'region'},
        {data: 'url', name: 'url'},
        {data: 'created_at', name: 'created_at'},
    ]
});
</script>
@endsection


@endsection
