<?php
$uniqueID = sha1(time().uniqid());
?>
 <div class="card">
        <div class="card-body">
             <div id="viewLoadingStatus{{$uniqueID}}"></div>
            <form  accept-charset="UTF-8" id="create_region_form{{$uniqueID}}" name="create_region_form{{$uniqueID}}" class="form-horizontal">
            {{ csrf_field() }}
            @include ('admin.regions.form', [
                                        'region' => null,
                                      ])
                <div class="form-group">
                    <div class="col-md-offset-2 col-md-10">
                        <input class="btn btn-primary btn-submit-adding-region-details" type="submit" value="{{ trans('regions.add') }}">
                    </div>
                </div>
            </form>
              <div id="viewResponseAfterAddingRegionDetails{{$uniqueID}}"></div>
        </div>
    </div>

<script>
function sleep (time) {
   return new Promise((resolve) => setTimeout(resolve, time));
}

jQuery.validator.addMethod("lettersonly", function(value, element) {
   return this.optional(element) || /^[a-z ]+$/i.test(value);
}, "Please use letters only");
jQuery.validator.addMethod("numbersonly", function(value, element) {
  return this.optional(element) || /^[0-9]+$/i.test(value)
}, "Please use numbers only");

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

if ($("#create_region_form{{$uniqueID}}").length > 0) {

 $("#create_region_form{{$uniqueID}}").validate({
   rules: {
         name: {
             required: true,
             minlength: 5,
             lettersonly:true
         },
         code: {
             required: true,
             numbersonly:true
         },

       },
       messages: {
         name: {
             required: "Please enter a region name",
             name: "Please enter a valid region name"
         },
         code: {
             required: "Please enter a region code",
             name: "Please enter a valid region code"
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
       url: "{{route('admin.region.store')}}",
       type: "POST",
       data: $("#create_region_form{{$uniqueID}}").serialize(),
       success: function(response) {
           var msgs ="";
          if(!response.error){

             $('#viewLoadingStatus{{$uniqueID}}').html("");
             $("#create_region_close_modal_btn").trigger("click");
              toastr.success(response.messages[0]);
              location.reload();

          }else{
            for(var i = 0; i < (response.messages).length; i++){
              toastr.error(response.messages[i]);
               msgs += "<p><medium><i class='fa fa-info-circle text-danger'></i>"+response.messages[i]+"</medium></p>"
            }
             $('#viewResponseAfterAddingRegionDetails{{$uniqueID}}').html(msgs);
            $('#viewLoadingStatus{{$uniqueID}}').html("");
            sleep(2000).then(() => {
              $('#viewResponseAfterAddingRegionDetails{{$uniqueID}}').html("");
            });
          }
       }
    });
   }
 })
}
</script>
