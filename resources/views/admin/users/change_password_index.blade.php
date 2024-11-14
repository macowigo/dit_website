@extends('layouts.master')

@section('content')

@section('breadcrumb')
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1 class="m-0 text-dark">  </h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item">{{ Breadcrumbs::render('admin.change_user_password.index') }}</li>
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

            <h4  class="my-1 float-left"> <i class="fas fa-info-circle blue"></i>&nbsp;Change Password</h4>

             <div class="btn-group btn-group-sm float-right" role="group">
                <div id="viewLoadingStatus"></div>
            </div>

        </div>

        <div class="card-body">
        <div class="row">

              <div class="col-md-12">

                     <form id="edit_user_password_form" name="edit_user_password_form" accept-charset="UTF-8" class="form-horizontal">
                        <input name="_method" type="hidden" value="PUT">
                         @csrf
                         @include('admin.users.change_password_form')
                         <div class="form-group">
                            <div class="col-md-offset-2 col-md-10">
                                <input class="btn btn-primary btn-submit-editing-user-password" type="submit" value="{{ trans('users.update') }}">
                            </div>
                        </div>
                        <div id="viewResponseAfterEditingUserPassword"></div>
                     </form>

              </div><!--col-->
            </div><!--row-->
        </div><!--card body-->

        <div class="card-footer">

        </div>


    </div>

   </div>
   <!-- col -->
</div>
<!-- row -->


@endsection

@section('js')
<script>

$(document).ready(function(){

    function sleep (time) {
        return new Promise((resolve) => setTimeout(resolve, time));
    }

    $('#edit_user_password_form').on('submit', function(event){

    event.preventDefault();
    $('#viewLoadingStatus').html("<div class='loader'>Loading...</div>");

        let $request = $.ajax({
        url:'{!! route('admin.change_user_password.update') !!}',
        method:"POST",
        data:new FormData(document.getElementById('edit_user_password_form')),
        dataType:'JSON',
        contentType: false,
        cache: false,
        processData: false
         });

         $request.done(function(e){
                var msgs ="";
                    if(!e.error){
                        for(var i = 0; i < (e.messages).length; i++){
                            toastr.success(e.messages[i]);
                            msgs += "<p><medium><i class='fa fa-check-circle text-success'></i>"+e.messages[i]+"</medium></p>";
                        }
                        $('#viewResponseAfterEditingUserPassword').html(msgs);
                        $('#viewLoadingStatus').html("");
                        sleep(2000).then(() => {
                            $('#viewResponseAfterEditingUserPassword').html("");
                        });
                    }else{
                    for(var i = 0; i < (e.messages).length; i++){
                            toastr.error(e.messages[i]);
                            msgs += "<p><medium><i class='fa fa-info-circle text-danger'></i>"+e.messages[i]+"</medium></p>"
                        }
                        $('#viewResponseAfterEditingUserPassword').html(msgs);
                        $('#viewLoadingStatus').html("");
                        sleep(2000).then(() => {
                            $('#viewResponseAfterEditingUserPassword').html("");
                        });
                }
                $('#viewLoadingStatus').html("");
            });
            $request.fail(function(jqXHR, exception){
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
              $('#viewLoadingStatus').html(msg);
              sleep(4000).then(() => {
                    $('#viewLoadingStatus').html("");
                });

                toastr.warning(msg);

          });//fail

    });

});

</script>
@endsection
