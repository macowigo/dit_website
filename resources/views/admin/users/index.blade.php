@extends('layouts.master')

@section('breadcrumb')
<div class="row mb-2">
    <div class="col-sm-6">
    <h1 class="m-0 text-dark">  </h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">{{ Breadcrumbs::render('admin.user.index') }}</a></li>
    </ol>
    </div><!-- /.col -->
</div><!-- /.row -->
@endsection

@section('content')

<?php
   $uniqueID = sha1(time().uniqid());
?>
@can('add_user')
<!-- ###################### ADD  MODAL ########################## -->
<div class="modal fade" id="addUserDetailsModal" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title" id="addUserDetailsModalTitle{{$uniqueID}}Label">{{ trans('users.create') }}</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
             <div id="addUserDetailsModalBody{{$uniqueID}}"></div>
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
  function add_user_details_modal{{$uniqueID}}() {
       $('#addUserDetailsModalBody{{$uniqueID}}').html("<div class='loader'>Loading...</div>");
          let request = $.get("{{ route('admin.user.create') }}");

          request.done(function (e) {
              $('#addUserDetailsModalBody{{$uniqueID}}').html(e);
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
            $('#addUserDetailsModalBody{{$uniqueID}}').html(msg);

        });//fail

        request.always(function(jqXHR){
            //always do something on fail or success
        });
  }
  function user_details_index{{$uniqueID}}(){
    _datatable.draw();
  }
</script>
@endcan

<div class="row justify-content-center">
<div class="col-md-12">
  <div class="card card-default">
   <!-- card-header -->
    <div class="card-header">
     <div class="d-flex align-items-center">

        <h3><i class="fa fa-user blue"></i>&nbsp;All {{ trans('users.model_plural') }} ({{ $users }} {{ Str::plural('User', $users )}} ) </h3>
            <div class="ml-auto">
               <div class="btn-group btn-group-sm float-right" role="group">

                  @can('add_user')
                  <a href="#"
                     class="btn btn-success"
                       data-target="#addUserDetailsModal"
                       data-toggle="modal"
                       data-whatever="@mdo"
                       onclick="add_user_details_modal{{$uniqueID}}()"
                       title="{{ trans('users.create') }}"
                       style="text-decoration: none">
                        Register New User
                       </a>
                  @endcan
              </div>
          </div>
      </div>
  </div>
<!-- end card-header -->

<!-- card body-->
<div class="card-body">
@if($users == 0)
      <div class="panel-body text-center">
          <h4>{{ trans('users.none_available') }}</h4>
      </div>
@endif
    <form method="POST" id="search-form" class="form-horizontal" role="form">
      <div class="row">
        <div class="col-md-3">
          <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control" name="name" id="name" placeholder="">
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
              <label for="email">Email</label>
              <input type="text" class="form-control" name="email" id="email" placeholder="">
          </div>
        </div>

        <div class="col-md-3">
          <div class="form-group">
              <label for="created_at">Created Date</label>
              <input type="date" class="form-control" name="created_at" id="created_at" placeholder="">
          </div>
        </div>
        <div class="col-md-3">
            <label for="">&nbsp;</label>
           <button type="submit" class="form-control btn btn-primary">Search</button>
        </div>
      </div>

    </form>
     <br>
     <table id="datatable"  class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>{{ trans('users.name') }}</th>
                <th>{{ trans('users.email') }}</th>
                <th>Role</th>
                <th>Action</th>
            </tr>
        </thead>
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
    "searching": false,
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
      url:'{!! route('admin.user.data') !!}',
      data: function (data) {
                data.name = $('input[name=name]').val();
                data.email = $('input[name=email]').val();
                data.created_at = $('input[name=created_at]').val();
            }
    },
    columns: [
        {data: 'name', name: 'name'},
        {data: 'email', name: 'email'},
        {data:'role', orderable: false, searchable: false},
        {data: 'action', orderable: false, searchable: false}
    ]
});

$('#search-form').on('submit', function(e) {
    _datatable.draw();
        e.preventDefault();
    });
</script>
@endsection

@endsection
