 <div class="card">
    <div class="card-body">

        <form action="#" id="edit_role_form" name="edit_role_form" accept-charset="UTF-8" class="form-horizontal">
        {{ csrf_field() }}
        <input name="_method" type="hidden" value="PUT">
        @include ('admin.roles.form', [
                                    'role' => $role,
                                ])

            <div class="form-group">
                <div class="col-md-offset-2 col-md-10">
                    <input class="btn btn-primary" type="submit" value="{{ trans('roles.update') }}">
                </div>
            </div>
        </form>
        <div id="viewResponseAfterEditingRoleDetails"></div>
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
          permissions.push(parseInt($(this).val(),10));
        }
    });

  let _method = $('input[name=_method]').val();
  $('#viewLoadingStatus{{$role->id}}').html("<div class='loader'>Loading...</div>");
  $.post('{{route("admin.role.update",$role->id)}}',{
      name:name,
      guard_name:guard_name,
      permissions:permissions,
      _method:_method,
      _token:"{{csrf_token()}}"}).done(function (e) {
          var msgs ="";
          if(!e.error){
              for(var i = 0; i < (e.messages).length; i++){
                  toastr.success(e.messages[i]);
                   msgs += "<p><medium><i class='fa fa-check-circle text-success'></i>"+e.messages[i]+"</medium></p>";
             }
           $('#viewResponseAfterEditingRoleDetails').html(msgs);
           $('#viewLoadingStatus{{$role->id}}').html("");

            sleep(2000).then(() => {
               $('#viewResponseAfterEditingRoleDetails').html("");
            });

          }else{
          for(var i = 0; i < (e.messages).length; i++){
                toastr.error(e.messages[i]);
                 msgs += "<p><medium><i class='fa fa-info-circle text-danger'></i>"+e.messages[i]+"</medium></p>"
          }
          $('#viewResponseAfterEditingRoleDetails').html(msgs);
          $('#viewLoadingStatus{{$role->id}}').html("");
      }
       $('#viewLoadingStatus{{$role->id}}').html("");
    });
  }
});

$('#edit_role_form').validate({
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
              required: "Please provide a guard name",
              name: "Provide atleast short guard name"
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
