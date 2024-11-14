<?php
$uniqueID = sha1(time().uniqid());
?>

<div class="btn-group btn-group-xs pull-right" role="group">
       @can('view_district')
        <a href="#" class="btn btn-info btn-sm"
                    data-target="#viewDistrictDetailsModal{{$id.'-'.$uniqueID}}"
                    data-toggle="modal"
                    data-whatever="@mdo"
                    onclick="view_district_details_modal{{$id.'_'.$uniqueID}}()"
                    title="{{ trans('districts.show') }}">
            <span class="fa fa-eye" aria-hidden="true"> </span>
        </a>
        @endcan
        @can('edit_district')
        <a href="#" class="btn btn-primary btn-sm"
                    data-target="#updateDistrictDetailsModal{{$id.'-'.$uniqueID}}"
                    data-toggle="modal"
                    data-whatever="@mdo"
                    onclick="update_district_details_modal{{$id.'_'.$uniqueID}}()"
                    title="{{ trans('districts.edit') }}">
             <span class="fa fa-edit" aria-hidden="true"></span>
        </a>
        @endcan
        @can('delete_district')
        <a href="#" class="btn btn-danger btn-sm"
                    data-target="#deleteDistrictDetailsModal{{$id.'-'.$uniqueID}}"
                    data-toggle="modal"
                    data-whatever="@mdo"
                    title="{{ trans('districts.delete') }}">
            <span class="fa fa-trash" aria-hidden="true"> </span>
        </a>
        @endcan
    </div>


<script>
    function view_district_details_modal{{$id.'_'.$uniqueID}}() {
         $('#viewDistrictDetailsModalBody{{$id.'-'.$uniqueID}}').html("<div class='loader'>Loading...</div>");
            let request = $.get("{{ route('admin.district.show',$id)}}");
            request.done(function (e) {
                $('#viewDistrictDetailsModalBody{{$id.'-'.$uniqueID}}').html(e);
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
                  $('#viewDistrictDetailsModalBody{{$id.'-'.$uniqueID}}').html(msg);
                });//fail

                   request.always(function(jqXHR){
                    //always do something on fail or success
                });
    }

    function update_district_details_modal{{$id.'_'.$uniqueID}}() {
         $('#updateDistrictDetailsModalBody{{$id.'-'.$uniqueID}}').html("<div class='loader'>Loading...</div>");
            let request = $.get("{{ route('admin.district.edit',$id)}}");
            request.done(function (e) {
                $('#updateDistrictDetailsModalBody{{$id.'-'.$uniqueID}}').html(e);
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
                  $('#updateDistrictDetailsModalBody{{$id.'-'.$uniqueID}}').html(msg);
                });//fail

                   request.always(function(jqXHR){
                    //always do something on fail or success
                });

    }
       $('#deleteDistrictDetailsModal{{$id.'-'.$uniqueID}}').on('hidden.bs.modal', function () {
            view_district_details_index{{$id.'_'.$uniqueID}}();
        });

        $('#updateDistrictDetailsModal{{$id.'-'.$uniqueID}}').on('hidden.bs.modal', function () {
            view_district_details_index{{$id.'_'.$uniqueID}}();
        });

    function delete_district_details_modal{{$id.'_'.$uniqueID}}() {
         $('#deleteDistrictDetailsModalBody{{$id.'-'.$uniqueID}}').html("<div class='loader'>Loading...</div>");
         $('#delete-btn-{{$id.'-'.$uniqueID}}').hide();
           let request = $.post("{{ route('admin.district.destroy',$id)}}",{_token:"{{csrf_token()}}"});
                request.done(function (e) {
                    if(!e.error){
                            for(var i = 0; i < (e.messages).length; i++){
                              $('#deleteDistrictDetailsModalBody{{$id.'-'.$uniqueID}}').html("<medium><i class='fa fa-check-circle text-success'></i>"+e.messages[i]+"</medium>");
                                toastr.success(e.messages[i]);
                                return;
                              }
                        }else{
                            for(var i = 0; i < (e.messages).length; i++){
                              $('#deleteDistrictDetailsModalBody{{$id.'-'.$uniqueID}}').html("<medium><i class='fa fa-info-circle text-danger'></i>"+e.messages[i]+"</medium>");
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
                  $('#deleteDistrictDetailsModalBody{{$id.'-'.$uniqueID}}').html(msg);
                });//fail

                   request.always(function(jqXHR){
                    //always do something on fail or success
                });
    }
    function view_district_details_index{{$id.'_'.$uniqueID}}(){
      _datatable.draw();
    }

</script>

@can('view_district')
<!-- ###################### VIEW  MODAL ########################## -->
<div class="modal fade" id="viewDistrictDetailsModal{{$id.'-'.$uniqueID}}" tabindex="-1" role="dialog" aria-labelledby="viewModelForPermissionDetails{{$id.'-'.$uniqueID}}Label">
<div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
    <div class="modal-header">
        <h4 class="modal-title" id="viewDistrictDetailsModalTitle{{$id.'-'.$uniqueID}}Label">Details of {{ $name }}</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body">
    <div id="viewDistrictDetailsModalBody{{$id.'-'.$uniqueID}}"></div>
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
@can('delete_district')
<!-- ###################### DELETE  MODAL ########################## -->
<div class="modal fade"  id="deleteDistrictDetailsModal{{$id.'-'.$uniqueID}}">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="deleteDistrictDetailsModalTitle{{$id.'-'.$uniqueID}}">Are you sure you want delete?</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close" data-dismiss="modal" onclick="view_district_details_index{{$id.'_'.$uniqueID}}()">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
             {{ $name }}&nbsp;
              <div id="deleteDistrictDetailsModalBody{{$id.'-'.$uniqueID}}">
              </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" id="close-btn-{{$id.'-'.$uniqueID}}" data-dismiss="modal" onclick="view_district_details_index{{$id.'_'.$uniqueID}}()">Close</button>
              <button type="button" class="btn btn-danger" id="delete-btn-{{$id.'-'.$uniqueID}}" onclick="delete_district_details_modal{{$id.'_'.$uniqueID}}()">Delete</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
<!-- /.modal -->
@endcan
@can('edit_district')
<!-- ###################### UPDATE  MODAL ########################## -->
<div class="modal fade" id="updateDistrictDetailsModal{{$id.'-'.$uniqueID}}" tabindex="-1" role="dialog" aria-labelledby="updateDistrictDetailsModal{{$id.'-'.$uniqueID}}Label">
<div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
    <div class="modal-header">
        <h4 class="modal-title" id="updateDistrictDetailsModalTitle{{$id.'-'.$uniqueID}}Label">{{ trans('districts.update') }} - {{ $name}}</h4>
        <span style="text-align:left;" id="viewLoadingStatus{{$id}}"></span>
        <button type="button" id="edit_district_close_modal_btn" class="close" data-dismiss="modal" aria-label="Close" data-dismiss="modal" onclick="view_district_details_index{{$id.'_'.$uniqueID}}()">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body">
    <div id="updateDistrictDetailsModalBody{{$id.'-'.$uniqueID}}"></div>
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
