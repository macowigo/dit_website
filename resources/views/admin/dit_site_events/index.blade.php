@extends('layouts.master')

@section('content')

@section('breadcrumb')
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1 class="m-0 text-dark">  </h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#"></a></li>
        </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->
@endsection


<?php
$uniqueID = sha1(time().uniqid());
?>
<!-- ###################### ADD  MODAL ########################## -->
<div class="modal fade" id="addEventDetailsModal{{$uniqueID}}" tabindex="-1" role="dialog">
<div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
    <div class="modal-header">
        <h4 class="modal-title" id="addEventDetailsModalTitle{{$uniqueID}}Label">{{ trans('events.create') }}</h4>
        <span style="text-align:left;" id="viewLoadingStatus"></span>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body">
    <div id="addEventDetailsModalBody{{$uniqueID}}"></div>
    </div>
    <div class="modal-footer justify-content-between">
         <strong>Copyright &copy; {{ date('Y')}} - {{ date('Y') + 1 }} <a href="#">DIT Information System</a>.</strong> All rights reserved.
    </div>
    </div>
    <!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<script>
    function add_event_details_modal{{$uniqueID}}() {
         $('#addEventDetailsModalBody{{$uniqueID}}').html("<div class='loader'>Loading...</div>");
           let request =  $.get("{{ route('admin.event.create') }}");

           request.done(function (e) {
                $('#addEventDetailsModalBody{{$uniqueID}}').html(e);
            });
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

            $('#addEventDetailsModalBody{{$uniqueID}}').html(msg);

        });
        request.always(function(jqXHR){
            //always do something on fail or success
        });
    }
    function event_details_index{{$uniqueID}}(){
      _datatable.draw();
    }

</script>


<div class="row justify-content-center">
<div class="col-md-12">

    <div class="card card-default">
        <!-- card-header -->
        <div class="card-header">

            <h4  class="my-1 float-left"> <i class="fas fa-info-circle blue"></i>&nbsp;{{ trans('events.model_plural') }} &nbsp;{{ $events }}</h4>

             <div class="btn-group btn-group-sm float-right" role="group">
                <a href="#"
                        class="btn btn-success"
                        data-target="#addEventDetailsModal{{$uniqueID}}"
                        data-toggle="modal"
                        data-whatever="@mdo"
                        onclick="add_event_details_modal{{$uniqueID}}()"
                        title="{{ trans('events.create') }}">
                        <i class=" fas fa-fw fa-plus" aria-hidden="true"></i>
                </a>
            </div>

        </div>

        @if($events== 0)
            <div class="card-body text-center">
                <h4>{{ trans('events.none_available') }}</h4>
            </div>
        @else
        <div class="card-body">

            <div class="table-responsive">
                <table class="table table-bordered table-striped" id="datatable">
                    <thead>
                        <tr>
                            <th>{{ trans('events.title') }}</th>
                            <th>{{ trans('events.venue') }}</th>
                            <th>{{ trans('events.description') }}</th>
                            <th>{{ trans('events.description2') }}</th>
                            <th>{{ trans('events.description3') }}</th>
                            <th>{{ trans('events.description4') }}</th>
                            <th>{{ trans('events.starttime') }}</th>
                            <th>{{ trans('events.endtime') }}</th>
                            <th>{{ trans('events.is_public') }}</th>
                            <th>{{ trans('events.attachment') }}</th>
                            <th>{{ trans('events.image') }}</th>
                            <th>{{ trans('events.image2') }}</th>
                            <th>{{ trans('events.image3') }}</th>
                            <th>{{ trans('events.image4') }}</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
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
                    columns: [0]
                }
            },{
                extend: 'copy',
                exportOptions: {
                    columns: [0]
                }
            }
            ,{
                extend: 'pdf',
                exportOptions: {
                    columns: [0]
                }
            }
            ,{
                extend: 'print',
                exportOptions: {
                    columns: [0]
                }
            }
        ],
    ajax: {
      url:'{!! route('admin.event.data') !!}'
    },
    columns: [
      {data: 'title', name: 'title'},
      {data: 'venue', name: 'venue'},
      {data: 'description', name: 'description'},
      {data: 'description2', name: 'description2'},
      {data: 'description3', name: 'description3'},
      {data: 'description4', name: 'description4'},
      {data: 'starttime', name: 'starttime'},
      {data: 'endtime', name: 'endtime'},
      {data: 'is_public', name: 'is_public'},
      {data: 'attachment', name: 'attachment'},
      {data: 'image', name: 'image'},
      {data: 'image2', name: 'image2'},
      {data: 'image3', name: 'image3'},
      {data: 'image4', name: 'image4'},
      {data: 'action', orderable: false, searchable: false}
    ]
});
</script>

@endsection

@endsection
