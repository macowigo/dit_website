@extends('layouts.web')


@section('content')
<div class="dit-page-title-wrap  dit-style-medium dit-left-align">
  <div class="dit-header-transparent-substitute"></div>
  <div class="dit-page-title-overlay"></div>
  <div  style="height:60px;"class="dit-page-title-container dit-container">

  <div style="height:3vw;" class="dit-page-caption">    </div>

  </div>
  <div style="padding-left:2vw; font-size: 2vw;color:#148EB7" class="dit-page-caption">Alumni</div>
</div>
<div class="dit-page-wrapper" id="dit-page-wrapper">
              <div class="gdlr-core-page-builder-body">
                  <div class="gdlr-core-pbf-wrapper ">
                      <div class="gdlr-core-pbf-background-wrap" style="background-color: #f5f5f5 ;"></div>
                      <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                          <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                              <div class="gdlr-core-pbf-column gdlr-core-column-40 gdlr-core-column-first">
                                  <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="padding: 0px 20px 0px 20px;">
                                      <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                          <div class="gdlr-core-pbf-element">
                                              <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr" style="padding-bottom: 25px ;">
                                                  <div class="gdlr-core-title-item-title-wrap clearfix">
                                                      <h3 class=" gdlr-core-skin-title dit-page-caption" style="font-size: 1.8vw;font-weight: 700 ;">Alumni Registration</h3></div>
                                              </div>
                                          </div>

                                          <div class="gdlr-core-pbf-element">
                                              <div class="gdlr-core-contact-form-7-item gdlr-core-item-pdlr gdlr-core-item-pdb ">
                                                  <div role="form" class="wpcf7" id="wpcf7-f1979-p1977-o1" lang="en-US" dir="ltr">
                                                      <div class="screen-reader-response"></div>





 <!--<h4 style="color:#192F59;" class="gdlr-core-accordion-item-title gdlr-core-js  gdlr-core-skin-e-background gdlr-core-skin-e-content"></h4>-->
@if ($message= Session::get('infoo'))
  <script type="text/javascript">
     swal({
         title:'Already Exist!.',
         text:"{{Session::get('infoo')}}",
         timer:6000,
         icon:"warning",
     }).then((value) => {
     }).catch(swal.noop);
 </script>
 @elseif(session('status'))
   <script type="text/javascript">
      swal({
          title:'Success.',
          text:"{{Session::get('status')}}",
          timer:6000,
          icon:"success",
          type:'success',
      }).then((value) => {
      }).catch(swal.noop);
  </script>
 @elseif(session('failed'))
 <div class="alert alert-danger" role="alert">
 	<button type="button" class="close" data-dismiss="alert">×</button>
 	{{ session('failed') }}
 </div>
 @endif

 <form action = "{{ route('web.alumni.post') }}" autocomplete="off" id="alumni_form" method = "POST"  enctype="multipart/form-data">
  @csrf
<!--
  <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
      <label for="title"  class="col-md-4 control-label" style="color:#148EB7;">{{ trans('Title') }}</label>
      <div class="col-md-10">
          <input class="form-control" name="title" type="text" id="title" placeholder=" Title " minlength="1" maxlength="50" >
          {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
      </div>
  </div>-->
  <div style=" text-align:right" class="col-md-offset-2 col-md-10">
    <strong style="padding-left: 28px;color:red; font-size:15px;">*</strong>  Required
  </div>
  <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
    <label for="title"   class="col-md-4 control-label" style="color:#148EB7;">{{ trans('Title') }}</label>
      <div class="col-md-10">
        <select style="padding:0px 0px 0px 10px;" class="form-control select2bs4" id="title" name="title">
          	    <option value="" style="display: none;" {{ old('title', optional($alumni)->title ?: '') == '' ? 'selected' : '' }} disabled selected>{{ trans('Title') }}</option>
          	@foreach (['Eng' => trans('Eng'),
                      'Dr(MD-MSC)' => trans('Dr(MD-MSC)'),
                      'Dr(MD-MMED)' => trans('Dr(MD-MMED)'),
                      'Prof' => trans('Prof'),
                      'Dr(MD)' => trans('Dr(MD)'),
                      'Dr(Phd)' => trans('Dr(Phd)'),
                      'Mr' => trans('Mr'),
                      'Mrs' => trans('Mrs'),
                      'Miss' => trans('Miss'),
                      'Others' => trans('Others')] as $key => $text)
  			    <option value="{{ $key }}" {{ old('category', optional($alumni)->title) == $key ? 'selected' : '' }}>
  			    	{{ $text }}
  			    </option>
  			@endforeach
          </select>

          {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
      </div>
  </div>



  <div class="form-group {{ $errors->has('first_name') ? 'has-error' : '' }}">
      <label for="first_name"  class="col-md-4 control-label required" style="color:#148EB7;">{{ trans('First Name') }}</label>
      <div class="col-md-10">
          <input class="form-control" name="first_name" type="text" id="first_name" placeholder="First name" minlength="1" maxlength="50" required="true">
          {!! $errors->first('first_name', '<p class="help-block">:message</p>') !!}
      </div>
  </div>
  <div class="form-group {{ $errors->has('middle_name') ? 'has-error' : '' }}">
      <label for="middle_name"  class="col-md-4 control-label" style="color:#148EB7;">{{ trans('Middle Name') }}</label>
      <div class="col-md-10">
          <input class="form-control" name="middle_name" type="text" id="middle_name" placeholder="Middle name" minlength="1" maxlength="50" >
          {!! $errors->first('middle_name', '<p class="help-block">:message</p>') !!}
      </div>
  </div>
  <div class="form-group {{ $errors->has('last_name') ? 'has-error' : '' }}">
      <label for="last_name"  class="col-md-4 control-label required" style="color:#148EB7;">{{ trans('Last Name') }}</label>
      <div class="col-md-10">
          <input class="form-control" name="last_name" type="text" id="last_name" placeholder="Last name" minlength="1" maxlength="50" required="true">
          {!! $errors->first('last_name', '<p class="help-block">:message</p>') !!}
      </div>
  </div>
  <div class="form-group {{ $errors->has('email_address') ? 'has-error' : '' }}">
      <label for="email_address"  class="col-md-4 control-label required" style="color:#148EB7;">{{ trans('Email Address') }}</label>
      <div class="col-md-10">
          <input class="form-control" name="email_address" type="email" id="email_address" placeholder="Email Address" minlength="1" maxlength="50" required="true">
          {!! $errors->first('email_address', '<p class="help-block">:message</p>') !!}
      </div>
  </div>
  <div class="form-group {{ $errors->has('current_location') ? 'has-error' : '' }}">
      <label for="current_location"  class="col-md-4 control-label required" style="color:#148EB7;">{{ trans('Location') }}</label>
      <div class="col-md-10">
          <input class="form-control" name="current_location" type="text" id="current_location" placeholder="Current Location" minlength="1" maxlength="50" required="true">
          {!! $errors->first('current_location', '<p class="help-block">:message</p>') !!}
      </div>
  </div>
  <div class="form-group {{ $errors->has('organization') ? 'has-error' : '' }}">
      <label for="education"  class="col-md-4 control-label required" style="color:#148EB7;">{{ trans('Education') }}</label>
      <div class="col-md-10">
          <input class="form-control" name="education" type="text" id="education" placeholder="Education"  required="true">
          {!! $errors->first('education', '<p class="help-block">:message</p>') !!}
      </div>
  </div>
  <div class="form-group {{ $errors->has('organization') ? 'has-error' : '' }}">
      <label for="organization"  class="col-md-4 control-label" style="color:#148EB7;">{{ trans('Organization') }}</label>
      <div class="col-md-10">
          <input class="form-control" name="organization" type="text" id="organization" placeholder="Organization" minlength="1" maxlength="50">
          {!! $errors->first('organization', '<p class="help-block">:message</p>') !!}
      </div>
  </div>
  <div class="form-group {{ $errors->has('short_bio') ? 'has-error' : '' }}">
      <label for="short_bio"  class="col-md-4 control-label" style="color:#148EB7;">{{ trans('Bio') }}</label>
      <div class="col-md-10">
          <input class="form-control" name="short_bio" type="text" id="short_bio" placeholder="Short Bio" minlength="1" maxlength="950">
          {!! $errors->first('short_bio', '<p class="help-block">:message</p>') !!}
      </div>
  </div>
  <div class="form-group {{ $errors->has('registration_no') ? 'has-error' : '' }}">
      <label for="registration_no"  class="col-md-4 control-label required" style="color:#148EB7;">{{ trans('Registration Number') }}</label>
      <div class="col-md-10">
          <input class="form-control" name="registration_no" type="text" id="registration_no" placeholder="Registration Number" minlength="1" maxlength="50" required="true">
          {!! $errors->first('registration_no', '<p class="help-block">:message</p>') !!}
      </div>
  </div>
   <div class="form-group {{ $errors->has('image_path') ? 'has-error' : '' }}">
      <label for="image_path"  class="col-md-4 control-label" style="color:#148EB7;">{{ trans('Image') }}</label>
      <div  class="col-md-10">
          <input style="padding:0px;" class="form-control-file" name="image_path" type="file" id="image_path" placeholder="image_path"  accept="image/x-png,image/gif,image/jpeg,image/jpg" >
          {!! $errors->first('image_path', '<p class="help-block">:message</p>') !!}
      </div>
  </div>
  <div class="form-group {{ $errors->has('employer') ? 'has-error' : '' }}">
      <label for="employer"  class="col-md-4 control-label" style="color:#148EB7;">{{ trans('Employer') }}</label>
      <div class="col-md-10">
          <input class="form-control" name="employer" type="text" id="employer" placeholder="Employer" minlength="1" maxlength="50" >
          {!! $errors->first('employer', '<p class="help-block">:message</p>') !!}
      </div>
  </div>
  <div class="form-group {{ $errors->has('ward_id') ? 'has-error' : '' }}">
      <label for="ward_id"  class="col-md-4 control-label" style="color:#148EB7;">{{ trans('Ward') }}</label>
      <div class="col-md-10">
          <input class="form-control" name="ward_id" type="text" id="ward_id" placeholder="Ward ID" minlength="1" maxlength="50" >
          {!! $errors->first('ward_id', '<p class="help-block">:message</p>') !!}
      </div>
  </div>
  <div class="form-group">
      <div class="col-md-offset-2 col-md-10">
          <input class="btn btn-primary" value="Register" type="submit" placeholder="{{ trans('alumni.add') }}">
      </div>
  </div>
 </form>









                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="gdlr-core-pbf-column gdlr-core-column-20" style="color: #ffffff ;padding: 30px 45px;background-color: #192f59;">
                              <!--Transparent Background  -->
                              <div class="gdlr-core-pbf-background-wrap">
                                  <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" style="background-image: url( ) ;background-size: cover ;background-position: center ;" data-parallax-speed="0"></div>
                              </div> <!-- Transparent Background-->

                                    @include('layouts.partials.web.quick_links')

                                  </div>
                          </div>
                      </div>
                  </div>
              </div>
            </div>

@endsection
