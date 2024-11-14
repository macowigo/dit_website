<?php
$uniqueID = sha1(time().uniqid());
?>

<div class="btn-group btn-group-xs pull-right" role="group">
      @can('view_permission')
        <a href="#" class="btn btn-info btn-sm"
                    data-target="#viewPermissionDetailsModal{{$id.'-'.$uniqueID}}"
                    data-toggle="modal"
                    data-whatever="@mdo"
                    onclick="view_permission_details_modal{{$id.'_'.$uniqueID}}()"
                    title="{{ trans('permissions.show') }}">
            <span class="fa fa-eye" aria-hidden="true"> </span>
        </a>
        @endcan
        @can('edit_permission')
        <a href="{{ route('admin.permission.edit',$id)}}" class="btn btn-primary btn-sm" title="{{ trans('permissions.edit') }}">
            <span class="fa fa-edit" aria-hidden="true"></span>
        </a>
        @endcan
        @can('delete_permission')
        <a href="#" class="btn btn-danger btn-sm"
                    data-target="#deletePermissionDetailsModal{{$id.'-'.$uniqueID}}"
                    data-toggle="modal"
                    data-whatever="@mdo"
                    title="{{ trans('permissions.delete') }}">
            <span class="fa fa-trash" aria-hidden="true"> </span>
        </a>
        @endcan
    </div>


<script>
    function view_permission_details_modal{{$id.'_'.$uniqueID}}() {
         $('#viewPermissionDetailsModalBody{{$id.'-'.$uniqueID}}').html("<div class='loader'>Loading...</div>");
           let request = $.get("{{ route('admin.permission.show',$id)}}");
            request.done(function (e) {
                $('#viewPermissionDetailsModalBody{{$id.'-'.$uniqueID}}').html(e);
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
                    $('#viewPermissionDetailsModalBody{{$id.'-'.$uniqueID}}').html(msg);
                  });//fail

                    request.always(function(jqXHR){
                      //always do something on fail or success
                  });
    }
    function delete_permission_details_modal{{$id.'_'.$uniqueID}}() {
         $('#deletePermissionDetailsModalBody{{$id.'-'.$uniqueID}}').html("<div class='loader'>Loading...</div>");
         $('#delete-btn-{{$id.'-'.$uniqueID}}').hide();
           let request = $.post("{{ route('admin.permission.destroy',$id)}}",{_token:"{{csrf_token()}}"});
            request.done(function (e) {
                $('#deletePermissionDetailsModalBody{{$id.'-'.$uniqueID}}').html(e);
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
                    $('#deletePermissionDetailsModalBody{{$id.'-'.$uniqueID}}').html(msg);
                  });//fail

                    request.always(function(jqXHR){
                      //always do something on fail or success
                  });
    }
    function view_permission_details_index{{$id.'_'.$uniqueID}}(){
      _datatable.draw();
    }
</script>
@can('view_permission')
<div class="modal fade" id="viewPermissionDetailsModal{{$id.'-'.$uniqueID}}" tabindex="-1" role="dialog" aria-labelledby="viewModelForPermissionDetails{{$id.'-'.$uniqueID}}Label">
<div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
    <div class="modal-header">
        <h4 class="modal-title" id="viewPermissionDetailsModalTitle{{$id.'-'.$uniqueID}}Label">Details of {{ $name }}</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body">
    <div id="viewPermissionDetailsModalBody{{$id.'-'.$uniqueID}}"></div>
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
@endcan
@can('delete_permission')
<div class="modal fade"  id="deletePermissionDetailsModal{{$id.'-'.$uniqueID}}">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="deletePermissionDetailsModalTitle{{$id.'-'.$uniqueID}}">Are you sure you want delete?</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">

              <div id="deletePermissionDetailsModalBody{{$id.'-'.$uniqueID}}">
                 {{ $name }}&nbsp;
              </div>

            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" id="close-btn-{{$id.'-'.$uniqueID}}" data-dismiss="modal" onclick="view_permission_details_index{{$id.'_'.$uniqueID}}()">Close</button>
              <button type="button" class="btn btn-danger" id="delete-btn-{{$id.'-'.$uniqueID}}" onclick="delete_permission_details_modal{{$id.'_'.$uniqueID}}()">Delete</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
<!-- /.modal -->
@endcan
