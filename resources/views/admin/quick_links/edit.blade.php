<?php
   $uniqueID = sha1(time().uniqid());
?>
<div class="card">
    <div class="card-header">
        <div id="viewLoadingStatus{{$uniqueID}}"></div>
    </div>
    <div class="card-body">
        <form  accept-charset="UTF-8" id="edit_quick_link_form{{$uniqueID}}" name="edit_quick_link_form" class="form-horizontal" enctype="multipart/form-data">
        {{ csrf_field() }}
          <input name="_method" type="hidden" value="PUT">
           @include ('admin.quick_links.form', [
                                    'quickLink' => $quickLink,
                                  ])

            <div class="form-group">
                <div class="col-md-offset-2 col-md-10">
                    <input class="btn btn-primary" type="submit" value="{{ trans('quick_links.update') }}">
                </div>
            </div>

        </form>
        <div id="viewResponseAfterAddingQuickLinkDetails{{$uniqueID}}"></div>
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

if ($("#edit_quick_link_form{{$uniqueID}}").length > 0) {

 $("#edit_quick_link_form{{$uniqueID}}").validate({
   rules: {

       },
       messages: {

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
       url: "{{ route('admin.quick_link.update',$quickLink->id) }}",
       type: "PUT",
       data: $("#edit_quick_link_form{{$uniqueID}}").serialize(),
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
            $('#viewResponseAfterAddingQuickLinkDetails{{$uniqueID}}').html(msgs);
            sleep(2000).then(() => {
              $('#viewResponseAfterAddingQuickLinkDetails{{$uniqueID}}').html("");
            });
          }
       }
    });
   }
 })
}
</script>
