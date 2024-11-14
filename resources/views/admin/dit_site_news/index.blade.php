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

<div class="modal fade" id="addNewsDetailsModal{{$uniqueID}}" tabindex="-1" role="dialog">
<div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title" id="addNewsDetailsModalTitle{{$uniqueID}}Label">{{ trans('news.create') }}</h4>
            <span style="text-align:left;" id="viewLoadingStatus"></span>
            <button type="button" class="close"  id="create_news_close_modal_btn" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
          <div id="addNewsDetailsModalBody{{$uniqueID}}"></div>
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

function add_news_details_modal{{$uniqueID}}() {
     $('#addNewsDetailsModalBody{{$uniqueID}}').html("<div class='loader'>Loading...</div>");
    let request = $.get("{{ route('admin.news.create') }}");
      request.done(function (e) {
        $('#addNewsDetailsModalBody{{$uniqueID}}').html(e);
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
      $('#addNewsDetailsModalBody{{$uniqueID}}').html(msg);
    });//fail

    request.always(function(jqXHR){
      //always do something on fail or success
    });
}
function news_details_index{{$uniqueID}}(){
  _datatable.draw();
}
</script>

<div class="row justify-content-center">
<div class="col-md-12">
    <div class="card card-default">
        <!-- card-header -->
        <div class="card-header">
          <h4  class="my-1 float-left"> <i class="fas fa-info-circle blue"></i>&nbsp;{{ trans('news.model_plural') }}</h4>

          <div class="btn-group btn-group-sm float-right" role="group">
               <a href="#"
                       class="btn btn-success"
                       data-target="#addNewsDetailsModal{{$uniqueID}}"
                       data-toggle="modal"
                       data-whatever="@mdo"
                       onclick="add_news_details_modal{{$uniqueID}}()"
                       title=" title="{{ trans('news.create') }}"">
                       <i class=" fas fa-fw fa-plus" aria-hidden="true"></i>
               </a>
          </div>
        </div>

        @if($news == 0)
            <div class="card-body text-center">
                <h4>{{ trans('news.none_available') }}</h4>
            </div>
        @else
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped" id="datatable{{$uniqueID}}">
                <thead>
                    <tr>
                            <th>{{ trans('news.title') }}</th>
                            <th>{{ trans('news.urllink') }}</th>
                            <th>{{ trans('news.description') }}</th>
                            <th>{{ trans('news.attachment') }}</th>
                            <th>{{ trans('news.image') }}</th>
                            <th>{{ trans('news.is_public') }}</th>

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

var _datatable = $('#datatable{{$uniqueID}}').DataTable({
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
      url:'{!! route('admin.news.data') !!}'
    },
    columns: [
        {data: 'title', name: 'title'},
        {data: 'urllink', name: 'urllink'},
        {data: 'description', name: 'description'},
        {data: 'attachment', name: 'attachment'},
        {data: 'image', name: 'image'},
        {data: 'is_public', name: 'is_public'},

        {data: 'action', orderable: false, searchable: false}
    ]
});


</script>



@endsection

@endsection
