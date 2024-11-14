<?php
   $uniqueID = sha1(time().uniqid());
?>
<div class="btn-group btn-group-xs pull-right" role="group">

        <a href="#" class="btn btn-info btn-sm"
                    data-target="#viewExperienceDetailsModal{{$id.'-'.$uniqueID}}"
                    data-toggle="modal"
                    data-whatever="@mdo"
                    onclick="view_experience_details_modal{{$id.'_'.$uniqueID}}()"
                    title="{{ trans('experiences.show') }}">
            <span class="fa fa-eye" aria-hidden="true"> </span>
        </a>

        <a href="#" class="btn btn-primary btn-sm"
                    data-target="#updateExperienceDetailsModal{{$id.'-'.$uniqueID}}"
                    data-toggle="modal"
                    data-whatever="@mdo"
                    onclick="update_experience_details_modal{{$id.'_'.$uniqueID}}()"
                    title="{{ trans('experiences.edit') }}">
             <span class="fa fa-edit" aria-hidden="true"></span>
        </a>

        <a href="#" class="btn btn-danger btn-sm"
                    data-target="#deleteExperienceDetailsModal{{$id.'-'.$uniqueID}}"
                    data-toggle="modal"
                    data-whatever="@mdo"
                    title="{{ trans('experiences.delete') }}">
            <span class="fa fa-trash" aria-hidden="true"> </span>
        </a>

    </div>


<script>
    function view_experience_details_modal{{$id.'_'.$uniqueID}}() {
         $('#viewExperienceDetailsModalBody{{$id.'-'.$uniqueID}}').html("<div class='loader'>Loading...</div>");
            let request = $.get("{{ route('admin.experience.show',$id)}}");
            request.done(function (e) {
                $('#viewExperienceDetailsModalBody{{$id.'-'.$uniqueID}}').html(e);

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
              $('#viewExperienceDetailsModalBody{{$id.'-'.$uniqueID}}').html(msg);

          });//fail

          request.always(function(jqXHR){
              //always do something on fail or success
          });
    }

    function update_experience_details_modal{{$id.'_'.$uniqueID}}() {
         $('#updateExperienceDetailsModalBody{{$id.'-'.$uniqueID}}').html("<div class='loader'>Loading...</div>");
            let request = $.get("{{ route('admin.experience.edit',$id)}}");

            request.done(function (e) {
               $('#updateExperienceDetailsModalBody{{$id.'-'.$uniqueID}}').html(e);
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
              $('#updateExperienceDetailsModalBody{{$id.'-'.$uniqueID}}').html(msg);

          });//fail

          request.always(function(jqXHR){
              //always do something on fail or success
          });

    }
    $('#deleteExperienceDetailsModal{{$id.'-'.$uniqueID}}').on('hidden.bs.modal', function () {
        view_experience_details_index{{$id.'_'.$uniqueID}}();
    });

    $('#updateExperienceDetailsModal{{$id.'-'.$uniqueID}}').on('hidden.bs.modal', function () {
        view_experience_details_index{{$id.'_'.$uniqueID}}();
    });


    function delete_experience_details_modal{{$id.'_'.$uniqueID}}() {
         $('#deleteExperienceDetailsModalBody{{$id.'-'.$uniqueID}}').html("<div class='loader'>Loading...</div>");
         $('#delete-btn-{{$id.'-'.$uniqueID}}').hide();
           let request =  $.post("{{ route('admin.experience.destroy',$id)}}",{_token:"{{csrf_token()}}"});

           request.done(function (e) {
                if(!e.error){
                        for(var i = 0; i < (e.messages).length; i++){
                          $('#deleteExperienceDetailsModalBody{{$id.'-'.$uniqueID}}').html("<medium><i class='fa fa-check-circle text-success'></i>"+e.messages[i]+"</medium>");
                            toastr.success(e.messages[i]);
                            location.reload();
                            return;
                          }
                    }else{
                        for(var i = 0; i < (e.messages).length; i++){
                          $('#deleteExperienceDetailsModalBody{{$id.'-'.$uniqueID}}').html("<medium><i class='fa fa-info-circle text-danger'></i>"+e.messages[i]+"</medium>");
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
                $('#deleteExperienceDetailsModalBody{{$id.'-'.$uniqueID}}').html(msg);

            });//fail

            request.always(function(jqXHR){
                //always do something on fail or success
            });

    }


</script>

<!-- ###################### VIEW  MODAL ########################## -->
<div class="modal fade" id="viewExperienceDetailsModal{{$id.'-'.$uniqueID}}" tabindex="-1" role="dialog" aria-labelledby="viewModelForPermissionDetails{{$id.'-'.$uniqueID}}Label">
<div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
    <div class="modal-header">
        <h4 class="modal-title" id="viewExperienceDetailsModalTitle{{$id.'-'.$uniqueID}}Label">Details of {{ $name }}</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body">
    <div id="viewExperienceDetailsModalBody{{$id.'-'.$uniqueID}}"></div>
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
<div class="modal fade"  id="deleteExperienceDetailsModal{{$id.'-'.$uniqueID}}">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="deleteExperienceDetailsModalTitle{{$id.'-'.$uniqueID}}">Are you sure you want delete?</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close" data-dismiss="modal" onclick="view_experience_details_index{{$id.'_'.$uniqueID}}()">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
               {{ $name }}&nbsp;
              <div id="deleteExperienceDetailsModalBody{{$id.'-'.$uniqueID}}"></div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" id="close-btn-{{$id.'-'.$uniqueID}}" data-dismiss="modal" onclick="view_experience_details_index{{$id.'_'.$uniqueID}}()">Close</button>
              <button type="button" class="btn btn-danger" id="delete-btn-{{$id.'-'.$uniqueID}}" onclick="delete_experience_details_modal{{$id.'_'.$uniqueID}}()">Delete</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
<!-- /.modal -->

<!-- ###################### UPDATE  MODAL ########################## -->
<div class="modal fade" id="updateExperienceDetailsModal{{$id.'-'.$uniqueID}}" tabindex="-1" role="dialog" aria-labelledby="updateExperienceDetailsModal{{$id.'-'.$uniqueID}}Label">
<div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
    <div class="modal-header">
        <h4 class="modal-title" id="updateExperienceDetailsModalTitle{{$id.'-'.$uniqueID}}Label">{{ trans('experiences.update') }} - {{ $name}}</h4>
        <span style="text-align:left;" id="viewLoadingStatus{{$id}}"></span>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" data-dismiss="modal" onclick="view_experience_details_index{{$id.'_'.$uniqueID}}()">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body">
    <div id="updateExperienceDetailsModalBody{{$id.'-'.$uniqueID}}"></div>
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
