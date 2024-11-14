
   <div class="card">
        <div class="card-body">
            <form id="create_country_form" name="create_country_form" accept-charset="UTF-8" class="form-horizontal">
            {{ csrf_field() }}
            @include ('admin.countries.form', [
                                        'country' => null,
                                      ])

                <div class="form-group">
                    <div class="col-md-offset-2 col-md-10">
                        <input class="btn btn-primary btn-submit-adding-country-details" type="submit" value="{{ trans('countries.add') }}">
                    </div>
                </div>

            </form>
               <div id="viewResponseAfterAddingCountryDetails"></div>
        </div>
    </div>

    <script>
function sleep (time) {
  return new Promise((resolve) => setTimeout(resolve, time));
}

$.validator.setDefaults({
      submitHandler: function () {
      alert( "Data Sent Successfully!" );
        let name = $('input[name=name]').val();
        let short_name = $('input[name=short_name]').val();

        $('#viewLoadingStatus').html("<div class='loader'>Loading...</div>");
        let request = $.post("{{route('admin.country.store')}}",{
             name:name,
             short_name:short_name,
            _token:"{{csrf_token()}}"}).done(function (e) {
                var msgs ="";
                if(!e.error){
                    for(var i = 0; i < (e.messages).length; i++){
                        toastr.success(e.messages[i]);
                         msgs += "<p><medium><i class='fa fa-check-circle text-success'></i>"+e.messages[i]+"</medium></p>";
                    }
                     $('#viewResponseAfterAddingCountryDetails').html(msgs);
                     $('#viewLoadingStatus').html("");

                     sleep(2000).then(() => {
                         $('#viewResponseAfterAddingCountryDetails').html("");
                      });

                }else{
                for(var i = 0; i < (e.messages).length; i++){
                        toastr.error(e.messages[i]);
                         msgs += "<p><medium><i class='fa fa-info-circle text-danger'></i>"+e.messages[i]+"</medium></p>"
                    }
                    $('#viewResponseAfterAddingCountryDetails').html(msgs);
                    $('#viewLoadingStatus').html("");

                    sleep(2000).then(() => {
                         $('#viewResponseAfterAddingCountryDetails').html("");
                      });
            }
            $('#viewLoadingStatus').html("");
        });//done

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
                $('#viewResponseAfterAddingCountryDetails').html(msg);
                sleep(3000).then(() => {
                    $('#viewResponseAfterAddingCountryDetails').html("");
                  });
                $('#viewLoadingStatus').html("");

            });//fail

            request.always(function(jqXHR){
                //always do something on fail or success
            });


        }
   });

    $('#create_country_form').validate({
      rules: {
        name: {
            required: true,
            minlength: 5
        },
        short_name: {
            required: true,
            minlength: 2
        },
      },
      messages: {
        name: {
            required: "Please enter a name",
            name: "Please enter a vaild name"
        },
        short_name: {
            required: "Please provide a short_name",
            name: "Provide atleast short short_name"
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
