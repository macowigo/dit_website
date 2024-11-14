<?php
$uniqueID = sha1(time().uniqid());
?>
<div class="btn-group btn-group-xs pull-right" role="group">

        <a href="#" class="btn btn-info btn-sm"
                    data-target="#viewProgrammeDetailsModal{{$id.'-'.$uniqueID}}"
                    data-toggle="modal"
                    data-whatever="@mdo"
                    onclick="view_programme_details_modal{{$id.'_'.$uniqueID}}()"
                    title="{{ trans('prgrammes.show') }}">
            <span class="fa fa-eye" aria-hidden="true"> </span>
        </a>

        <a href="#" class="btn btn-primary btn-sm"
                    data-target="#updateProgrammeDetailsModal{{$id.'-'.$uniqueID}}"
                    data-toggle="modal"
                    data-whatever="@mdo"
                    onclick="update_programme_details_modal{{$id.'_'.$uniqueID}}()"
                    title="{{ trans('prgrammes.edit') }}">
             <span class="fa fa-edit" aria-hidden="true"></span>
        </a>

        <a href="#" class="btn btn-danger btn-sm"
                    data-target="#deleteProgrammeDetailsModal{{$id.'-'.$uniqueID}}"
                    data-toggle="modal"
                    data-whatever="@mdo"
                    title="{{ trans('prgrammes.delete') }}">
            <span class="fa fa-trash" aria-hidden="true"> </span>
        </a>

    </div>


<script>
    function view_programme_details_modal{{$id.'_'.$uniqueID}}() {
         $('#viewProgrammeDetailsModalBody{{$id.'-'.$uniqueID}}').html("<div class='loader'>Loading...</div>");
            let request = $.get("{{ route('admin.programme.show',$id)}}");
            request.done(function (e) {
                $('#viewProgrammeDetailsModalBody{{$id.'-'.$uniqueID}}').html(e);

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
              $('#viewProgrammeDetailsModalBody{{$id.'-'.$uniqueID}}').html(msg);

          });//fail

          request.always(function(jqXHR){
              //always do something on fail or success
          });
    }

    function update_programme_details_modal{{$id.'_'.$uniqueID}}() {
         $('#updateProgrammeDetailsModalBody{{$id.'-'.$uniqueID}}').html("<div class='loader'>Loading...</div>");
            let request = $.get("{{ route('admin.programme.edit',$id)}}");

            request.done(function (e) {
               $('#updateProgrammeDetailsModalBody{{$id.'-'.$uniqueID}}').html(e);
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
              $('#updateProgrammeDetailsModalBody{{$id.'-'.$uniqueID}}').html(msg);

          });//fail

          request.always(function(jqXHR){
              //always do something on fail or success
          });

    }
    $('#deleteProgrammeDetailsModal{{$id.'-'.$uniqueID}}').on('hidden.bs.modal', function () {
        view_programme_details_index{{$id.'_'.$uniqueID}}();
    });

    $('#updateProgrammeDetailsModal{{$id.'-'.$uniqueID}}').on('hidden.bs.modal', function () {
        view_programme_details_index{{$id.'_'.$uniqueID}}();
    });


    function delete_programme_details_modal{{$id.'_'.$uniqueID}}() {
         $('#deleteProgrammeDetailsModalBody{{$id.'-'.$uniqueID}}').html("<div class='loader'>Loading...</div>");
         $('#delete-btn-{{$id.'-'.$uniqueID}}').hide();
           let request =  $.post("{{ route('admin.programme.destroy',$id)}}",{_token:"{{csrf_token()}}"});

           request.done(function (e) {
                if(!e.error){
                        for(var i = 0; i < (e.messages).length; i++){
                          $('#deleteProgrammeDetailsModalBody{{$id.'-'.$uniqueID}}').html("<medium><i class='fa fa-check-circle text-success'></i>"+e.messages[i]+"</medium>");
                            toastr.success(e.messages[i]);
                            return;
                          }
                    }else{
                        for(var i = 0; i < (e.messages).length; i++){
                          $('#deleteProgrammeDetailsModalBody{{$id.'-'.$uniqueID}}').html("<medium><i class='fa fa-info-circle text-danger'></i>"+e.messages[i]+"</medium>");
                          toastr.error(e.messages[i]);
                        return ;
                      }
                }
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
                $('#deleteProgrammeDetailsModalBody{{$id.'-'.$uniqueID}}').html(msg);

            });//fail

            request.always(function(jqXHR){
                //always do something on fail or success
            });

    }
    function view_programme_details_index{{$id.'_'.$uniqueID}}(){
      _datatable.draw();
    }

</script>

<!-- ###################### VIEW  MODAL ########################## -->
<div class="modal fade" id="viewProgrammeDetailsModal{{$id.'-'.$uniqueID}}" tabindex="-1" role="dialog" aria-labelledby="viewModelForPermissionDetails{{$id.'-'.$uniqueID}}Label">
<div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
    <div class="modal-header">
        <h4 class="modal-title" id="viewProgrammeDetailsModalTitle{{$id.'-'.$uniqueID}}Label">Details of {{ $name }}</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body">
    <div id="viewProgrammeDetailsModalBody{{$id.'-'.$uniqueID}}"></div>
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

<!-- ###################### DELETE  MODAL ########################## -->
<div class="modal fade"  id="deleteProgrammeDetailsModal{{$id.'-'.$uniqueID}}">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="deleteProgrammeDetailsModalTitle{{$id.'-'.$uniqueID}}">Are you sure you want delete?</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close" data-dismiss="modal" onclick="view_programme_details_index{{$id.'_'.$uniqueID}}()">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
               {{ $name }}&nbsp;
              <div id="deleteProgrammeDetailsModalBody{{$id.'-'.$uniqueID}}"></div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" id="close-btn-{{$id.'-'.$uniqueID}}" data-dismiss="modal" onclick="view_programme_details_index{{$id.'_'.$uniqueID}}()">Close</button>
              <button type="button" class="btn btn-danger" id="delete-btn-{{$id.'-'.$uniqueID}}" onclick="delete_programme_details_modal{{$id.'_'.$uniqueID}}()">Delete</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
<!-- /.modal -->

<!-- ###################### UPDATE  MODAL ########################## -->
<div class="modal fade" id="updateProgrammeDetailsModal{{$id.'-'.$uniqueID}}" tabindex="-1" role="dialog" aria-labelledby="updateProgrammeDetailsModal{{$id.'-'.$uniqueID}}Label">
<div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
    <div class="modal-header">
        <h4 class="modal-title" id="updateProgrammeDetailsModalTitle{{$id.'-'.$uniqueID}}Label">{{ trans('prgrammes.update') }} - {{ $name}}</h4>
        <span style="text-align:left;" id="viewLoadingStatus{{$id}}"></span>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" data-dismiss="modal" onclick="view_programme_details_index{{$id.'_'.$uniqueID}}()">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body">
    <div id="updateProgrammeDetailsModalBody{{$id.'-'.$uniqueID}}"></div>
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
