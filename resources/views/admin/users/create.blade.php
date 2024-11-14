<?php
$uniqueID = sha1(time().uniqid());
?>
<div class="card">
<div class="card-body">
    <div id="viewLoadingStatus{{$uniqueID}}"></div>
        <form accept-charset="UTF-8" id="create_user_form{{$uniqueID}}" name="create_user_form{{$uniqueID}}" class="form-horizontal">
        {{ csrf_field() }}
        @include ('admin.users.form', [
                                    'user' => null,
                                    'roles'=>$roles,
                                    'password_required'=>'true',
                                    ])

            <div class="form-group">
                <div class="col-md-offset-2 col-md-10">
                    <input class="btn btn-primary" type="submit" value="{{ trans('users.add') }}">
                </div>
            </div>

        </form>
        <div id="viewResponseAfterAddingUserDetails{{$uniqueID}}"></div>
        </div>
    </div>

<script>

function sleep (time) {
  return new Promise((resolve) => setTimeout(resolve, time));
}

jQuery.validator.addMethod("lettersonly", function(value, element) {
   return this.optional(element) || /^[a-z ]+$/i.test(value);
}, "Please use letters only");

$.validator.addMethod(
    /* The value you can use inside the email object in the validator. */
    "regex",
    /* The function that tests a given string against a given regEx. */
    function(value, element, regexp)  {
        /* Check if the value is truthy (avoid null.constructor) & if it's not a RegEx. (Edited: regex --> regexp)*/
        if (regexp && regexp.constructor != RegExp) {
           /* Create a new regular expression using the regex argument. */
           regexp = new RegExp(regexp);
        }
        /* Check whether the argument is global and, if so set its last index to 0. */
        else if (regexp.global) regexp.lastIndex = 0;
        /* Return whether the element is optional or the result of the validation. */
        return this.optional(element) || regexp.test(value);
    }
);

if ($("#create_user_form{{$uniqueID}}").length > 0) {

 $("#create_user_form{{$uniqueID}}").validate({
   rules: {
         name: {
             required: true,
             minlength: 5,
             lettersonly:true
         },
         email: {
             required: true,
             email:true,
             regex:/^\b[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i
         },
         password: {
             required: true,
             minlength: 8
         },
         'roles[]': {
             required: true,
             minlength: 1
         },
       },
       messages: {
         name: {
             required: "Please enter a name",
             name: "Please enter a valid name"
         },
         email: {
             required: "Please enter a email",
             name: "Please enter a valid email"
         },
         password: {
             required: "Please provide a password",
             name: "Provide atleast short password"
         },
         'roles[]': {
             required: "Please select atleast one role",
             name: "Please select atleast one role"
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
 },

 submitHandler: function(form) {
  $('#viewLoadingStatus{{$uniqueID}}').html("<div class='loader'>Loading...</div>");
   $.ajax({
       url: "{{route('admin.user.store')}}",
       type: "POST",
       data: $("#create_user_form{{$uniqueID}}").serialize(),
       success: function(response) {
           var msgs ="";
          if(!response.error){
              toastr.success(response.messages[0]);
              location.reload();
              $('#viewLoadingStatus{{$uniqueID}}').html("");

          }else{
            for(var i = 0; i < (response.messages).length; i++){
              toastr.error(response.messages[i]);
               msgs += "<p><medium><i class='fa fa-info-circle text-danger'></i>"+response.messages[i]+"</medium></p>"
            }

            $('#viewLoadingStatus{{$uniqueID}}').html("");
            $('#viewResponseAfterAddingUserDetails{{$uniqueID}}').html(msgs);
            sleep(2000).then(() => {
              $('#viewResponseAfterAddingUserDetails{{$uniqueID}}').html("");
            });
          }
       }
    });
   }
 })
}
</script>
