<?php
  $uniqueID = sha1(time().uniqid());
?>
<div class="card">
  <div id="viewLoadingStatus{{$uniqueID}}"></div>
        <div class="card-body">
            <form  accept-charset="UTF-8" id="create_role_form" name="create_role_form" class="form-horizontal">
            {{ csrf_field() }}
            @include ('admin.roles.form', [
                                        'role' => null,
                                        ])

                <div class="form-group">
                    <div class="col-md-offset-2 col-md-10">
                        <input class="btn btn-primary" type="submit" value="{{ trans('roles.add') }}">
                    </div>
                </div>

            </form>
            <div id="viewResponseAfterAddingRoleDetails"></div>
        </div>
    </div>

@push('script')
  <script src="{{ asset('admin-lte/plugins/select2/js/select2.full.min.js') }}"></script>
  <script>
  $(function () {
      //Initialize Select2 Elements
      $('.select2bs4').select2({
      theme: 'bootstrap4'
      })
  });
  </script>
@endpush


<script>
function sleep (time) {

  return new Promise((resolve) => setTimeout(resolve, time));
}

$.validator.setDefaults({
  submitHandler: function () {
  let guard_name = $('input[name=guard_name]').val();
  let name = $('input[name=role_name]').val();
  let permissions = [];
      $.each($("input[name='permissions[]']:checked"), function(){
          if(!isNaN(parseInt($(this).val(),10))){
             permissions.push($(this).val());
          }
      });

  $('#viewLoadingStatus').html("<div class='loader'>Loading...</div>");
  $.post('{{route("admin.role.store")}}',{
       name:name,
       guard_name:guard_name,
       permissions:permissions,
      _token:"{{csrf_token()}}"}).done(function (e) {
          var msgs ="";
          if(!e.error){
              for(var i = 0; i < (e.messages).length; i++){
                  toastr.success(e.messages[i]);
                   msgs += "<p><medium><i class='fa fa-check-circle text-success'></i>"+e.messages[i]+"</medium></p>";
              }
               $('#viewResponseAfterAddingRoleDetails').html(msgs);
               $('#viewLoadingStatus').html("");

                sleep(2000).then(() => {
                   $('#viewResponseAfterAddingRoleDetails').html("");
                });

          }else{
          for(var i = 0; i < (e.messages).length; i++){
                  toastr.error(e.messages[i]);
                   msgs += "<p><medium><i class='fa fa-info-circle text-danger'></i>"+e.messages[i]+"</medium></p>"
              }
              $('#viewResponseAfterAddingRoleDetails').html(msgs);
              $('#viewLoadingStatus').html("");
      }
      $('#viewLoadingStatus').html("");
    });
   }
 });

$('#create_role_form').validate({
      rules: {
        role_name: {
            required: true,
            minlength: 4
        },
        guard_name: {
            required: true,
            minlength: 3
        },
        'permissions[]': {
            required: true,
            minlength: 1
        },
      },
      messages: {
        role_name: {
            required: "Please enter a name",
            name: "Please enter a valid name"
        },
        guard_name: {
            required: "Please provide a guard_name",
            name: "Provide atleast short guard_name"
        },
        'permissions[]': {
            required: "Please select atleast on permission for a given role",
            name: "Please select atleast on permission for a given role"
        },
      },
      errorElement: 'span',
      errorPlacement: function (error, element) {
        error.addClass('invalid-feedback');
        element.closest('.form-group').append(error);
      },
      highlight: function (element, errorClass, validClass) {
        $(element).addClass('is-invalid');
      },
      unhighlight: function (element, errorClass, validClass) {
        $(element).removeClass('is-invalid');
      }
    });
</script>
