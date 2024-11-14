@extends('layouts.master')

@section('content')

@section('breadcrumb')
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1 class="m-0 text-dark">  </h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">{{ Breadcrumbs::render('admin.region.index') }}</a></li>
        </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->
    @endsection
@section('content')
<?php
$uniqueID = sha1(time().uniqid());
?>
@can('add_region')
<!-- ###################### ADD  MODAL ########################## -->
<div class="modal fade" id="addRegionDetailsModal{{$uniqueID}}" tabindex="-1" role="dialog">
<div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title" id="addRegionDetailsModalTitle{{$uniqueID}}Label">{{ trans('regions.create') }}</h4>
            <span style="text-align:left;" id="viewLoadingStatus"></span>
            <button type="button" class="close"  id="create_region_close_modal_btn" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
          <div id="addRegionDetailsModalBody{{$uniqueID}}"></div>
        </div>
      <div class="modal-footer justify-content-between">
           <strong>Copyright &copy; {{ date('Y')}} - {{ date('Y') + 1 }} <a href="#">RITA Information System</a>.</strong> All rights reserved.
      </div>
  </div>
  <!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<script>

    function add_region_details_modal{{$uniqueID}}() {
         $('#addRegionDetailsModalBody{{$uniqueID}}').html("<div class='loader'>Loading...</div>");
        let request = $.get("{{ route('admin.region.create') }}");
          request.done(function (e) {
            $('#addRegionDetailsModalBody{{$uniqueID}}').html(e);
        })
        request.fail(function(jqXHR, exception){
          var msg = '';
          if (jqXHR.status === 0) {
              msg = '<span style="color:red;"><b>Not connected.\n Verify Network.</b></span>';
          }else if (jqXHR.status == 401) {
              msg = '<span style="color:red;"><b>Unauthorized.[401]</b></span>';
          }else if (jqXHR.status == 403) {
              msg = '<span style="color:red;"><b>This action is unauthorized.[403(Forbidden)]</b></span>';
          } else if (jqXHR.status == 404) {
              msg = '<span style="color:red;"><b>Requested page not found.[404]</b></span>';
          } else if (jqXHR.status == 500) {
              msg = '<span style="color:red;"><b>Internal Server Error [500].</b></span>';
          } else if (exception === 'parsererror') {
              msg = '<span style="color:red;"><b>Requested JSON parse failed.</b></span>';
          } else if (exception === 'timeout') {
              msg = '<span style="color:red;"><b>Time out error.</b></span>';
          } else if (exception === 'abort') {
              msg = '<span style="color:red;"><b>Ajax request aborted.</b></span>';
          } else {
              msg = '<span style="color:red;"><b>Uncaught Error.\n' + jqXHR.responseText+'</b></span>';
          }
          $('#addRegionDetailsModalBody{{$uniqueID}}').html(msg);
        });//fail

        request.always(function(jqXHR){
          //always do something on fail or success
        });
    }
    function region_details_index{{$uniqueID}}(){
      _datatable.draw();
    }
</script>
@endcan
<div class="row justify-content-center">
<div class="col-md-12">
    <div class="card card-default">
        <!-- card-header -->
        <div class="card-header">
            <h4  class="my-1 float-left"> <i class="fas fa-info-circle blue"></i>&nbsp;{{ trans('regions.model_plural') }} &nbsp;{{ $regions }}</h4>
             <div class="btn-group btn-group-sm float-right" role="group">
               @can('add_region')
                <a href="#"
                        class="btn btn-success"
                        data-target="#addRegionDetailsModal{{$uniqueID}}"
                        data-toggle="modal"
                        data-whatever="@mdo"
                        onclick="add_region_details_modal{{$uniqueID}}()"
                        title="{{ trans('regions.create') }}">
                        <i class=" fas fa-fw fa-plus" aria-hidden="true"></i>
                </a>
                @endcan
            </div>
        </div>
        @if($regions== 0)
            <div class="card-body text-center">
                <h4>{{ trans('regions.none_available') }}</h4>
            </div>
        @else
        <div class="card-body">

            <div class="table-responsive">
                <table class="table table-bordered table-striped" id="datatable">
                    <thead>
                        <tr>
                            <th>{{ trans('regions.name') }}</th>
                            <th>{{ trans('regions.code') }}</th>

                            <th></th>
                        </tr>
                    </thead>
                </table>
            </div>
         </div>
        <div class="card-footer">

      </div>
      @endif
    </div>
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
      url:'{!! route('admin.region.data') !!}'
    },
    columns: [
        {data: 'name', name: 'name'},
        {data: 'code', name: 'code'},
        {data: 'action', orderable: false, searchable: false}
    ]
});


</script>



@endsection

@endsection
