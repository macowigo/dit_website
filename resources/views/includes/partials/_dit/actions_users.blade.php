<?php
$uniqueID = sha1(time().uniqid());
?>

<div class="btn-group btn-group-xs pull-right" role="group">
       @can('view_user')
        <a href="#" class="btn btn-info btn-sm"
                    data-target="#viewUserDetailsModal{{$id.'-'.$uniqueID}}"
                    data-toggle="modal"
                    data-whatever="@mdo"
                    onclick="view_user_details_modal{{$id.'_'.$uniqueID}}()"
                    title="{{ trans('users.show') }}">
            <span class="fa fa-eye" aria-hidden="true"> </span>
        </a>
        @endcan
        @can('edit_user')
        <a href="#" class="btn btn-primary btn-sm"
                    data-target="#updateUserDetailsModal{{$id.'-'.$uniqueID}}"
                    data-toggle="modal"
                    data-whatever="@mdo"
                    onclick="update_user_details_modal{{$id.'_'.$uniqueID}}()"
                    title="{{ trans('users.edit') }}">
            <span class="fa fa-edit" aria-hidden="true"> </span>
        </a>
        @endcan
        @can('edit_user')
        <a href="#" class="btn btn-success btn-sm"
                    data-target="#updateUserRoleDetailsModal{{$id.'-'.$uniqueID}}"
                    data-toggle="modal"
                    data-whatever="@mdo"
                    onclick="update_user_role_details_modal{{$id.'_'.$uniqueID}}()"
                    title="{{ trans('users.edit_role') }}">
            <span class="fa fa-edit" aria-hidden="true"> </span>
        </a>
        @endcan
        @can('delete_user')
        <a href="#" class="btn btn-danger btn-sm"
                    data-target="#deleteUserDetailsModal{{$id.'-'.$uniqueID}}"
                    data-toggle="modal"
                    data-whatever="@mdo"
                    title="{{ trans('users.delete') }}">
            <span class="fa fa-trash" aria-hidden="true"> </span>
        </a>
        @endcan
    </div>


 <script>
    function view_user_details_modal{{$id.'_'.$uniqueID}}() {
         $('#viewUserDetailsModalBody{{$id.'-'.$uniqueID}}').html("<div class='loader'>Loading...</div>");
            let request = $.get("{{ route('admin.user.show',$id)}}");
            request.done(function (e) {
                $('#viewUserDetailsModalBody{{$id.'-'.$uniqueID}}').html(e);
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
                    $('#viewUserDetailsModalBody{{$id.'-'.$uniqueID}}').html(msg);
                  });//fail

                    request.always(function(jqXHR){
                      //always do something on fail or success
                  });
    }

    function delete_user_details_modal{{$id.'_'.$uniqueID}}() {
         $('#deleteUserDetailsModalBody{{$id.'-'.$uniqueID}}').html("<div class='loader'>Loading...</div>");
         $('#delete-btn-{{$id.'-'.$uniqueID}}').hide();
           let request = $.post("{{ route('admin.user.destroy',$id)}}",{_token:"{{csrf_token()}}"});
            request.done(function (e) {
                if(!e.error){
                        for(var i = 0; i < (e.messages).length; i++){
                          $('#deleteUserDetailsModalBody{{$id.'-'.$uniqueID}}').html("<medium><i class='fa fa-check-circle text-success'></i>"+e.messages[i]+"</medium>");
                            toastr.success(e.messages[i]);
                            return;
                          }
                    }else{
                        for(var i = 0; i < (e.messages).length; i++){
                          $('#deleteUserDetailsModalBody{{$id.'-'.$uniqueID}}').html("<medium><i class='fa fa-info-circle text-danger'></i>"+e.messages[i]+"</medium>");
                          toastr.error(e.messages[i]);
                        return ;
                      }
                }
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
                $('#deleteUserDetailsModalBody{{$id.'-'.$uniqueID}}').html(msg);
              });//fail

                request.always(function(jqXHR){
                  //always do something on fail or success
              });
    }

    function update_user_details_modal{{$id.'_'.$uniqueID}}() {
         $('#updateUserDetailsModalBody{{$id.'-'.$uniqueID}}').html("<div class='loader'>Loading...</div>");
            let request = $.get("{{ route('admin.user.edit',$id)}}");
            request.done(function (e) {
                $('#updateUserDetailsModalBody{{$id.'-'.$uniqueID}}').html(e);
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
                    $('#updateUserDetailsModalBody{{$id.'-'.$uniqueID}}').html(msg);
                  });//fail

                    request.always(function(jqXHR){
                      //always do something on fail or success
                  });
    }

    function update_user_role_details_modal{{$id.'_'.$uniqueID}}() {
         $('#updateUserRoleDetailsModalBody{{$id.'-'.$uniqueID}}').html("<div class='loader'>Loading...</div>");
            let request = $.get("{{ route('admin.user.edit_role',$id)}}");
            request.done(function (e) {
                $('#updateUserRoleDetailsModalBody{{$id.'-'.$uniqueID}}').html(e);
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
                    $('#updateUserRoleDetailsModalBody{{$id.'-'.$uniqueID}}').html(msg);
                  });//fail

                    request.always(function(jqXHR){
                      //always do something on fail or success
                  });
    }

    $('#updateUserDetailsModal{{$id.'-'.$uniqueID}}').on('hidden.bs.modal', function () {
            view_user_details_index{{$id.'_'.$uniqueID}}();
        });

    function view_user_details_index{{$id.'_'.$uniqueID}}(){
      _datatable.draw();
    }
</script>
@can('view_user')
    <div class="modal fade" id="viewUserDetailsModal{{$id.'-'.$uniqueID}}" tabindex="-1" role="dialog" aria-labelledby="viewModelForUserDetails{{$id.'-'.$uniqueID}}Label">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title" id="viewUserDetailsModalTitle{{$id.'-'.$uniqueID}}Label">Details of {{ $name }}</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
        <div id="viewUserDetailsModalBody{{$id.'-'.$uniqueID}}"></div>
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
@can('delete_user')
<div class="modal fade"  id="deleteUserDetailsModal{{$id.'-'.$uniqueID}}">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="deleteUserDetailsModalTitle{{$id.'-'.$uniqueID}}">Are you sure you want delete?</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">

              <div id="deleteUserDetailsModalBody{{$id.'-'.$uniqueID}}">
                 {{ $name }}&nbsp;
              </div>

            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" id="close-btn-{{$id.'-'.$uniqueID}}" data-dismiss="modal" onclick="view_user_details_index{{$id.'_'.$uniqueID}}()">Close</button>
              <button type="button" class="btn btn-danger" id="delete-btn-{{$id.'-'.$uniqueID}}" onclick="delete_user_details_modal{{$id.'_'.$uniqueID}}()">Delete</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
<!-- /.modal -->
@endcan
@can('edit_user')
<!-- ###################### UPDATE  MODAL ########################## -->
<div class="modal fade" id="updateUserDetailsModal{{$id.'-'.$uniqueID}}" tabindex="-1" role="dialog" aria-labelledby="updateUserDetailsModal{{$id.'-'.$uniqueID}}Label">
<div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
    <div class="modal-header">
        <h4 class="modal-title" id="updateUserDetailsModalTitle{{$id.'-'.$uniqueID}}Label">{{ trans('users.update') }} - {{ $name}}</h4>
        <span style="text-align:left;" id="viewLoadingStatus{{$id}}"></span>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" data-dismiss="modal" onclick="view_user_details_index{{$id.'_'.$uniqueID}}()">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body">
    <div id="updateUserDetailsModalBody{{$id.'-'.$uniqueID}}"></div>
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
@can('edit_user')
<!-- ###################### UPDATE USER ROLE MODAL ########################## -->
<div class="modal fade" id="updateUserRoleDetailsModal{{$id.'-'.$uniqueID}}" tabindex="-1" role="dialog" aria-labelledby="updateUserRoleDetailsModal{{$id.'-'.$uniqueID}}Label">
<div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
    <div class="modal-header">
        <h4 class="modal-title" id="updateUserRoleDetailsModalTitle{{$id.'-'.$uniqueID}}Label">{{ trans('users.edit_role') }} - {{ $name}}</h4>
        <span style="text-align:left;" id="viewLoadingStatus{{$id}}"></span>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" data-dismiss="modal" onclick="view_user_details_index{{$id.'_'.$uniqueID}}()">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body">
    <div id="updateUserRoleDetailsModalBody{{$id.'-'.$uniqueID}}"></div>
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