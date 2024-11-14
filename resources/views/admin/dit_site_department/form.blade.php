<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
    <label for="name" class="col-md-2 control-label">{{ trans('name') }}</label>
    <div class="col-md-10">
        <input class="form-control" name="name" type="text" id="name" value="{{ old('name', optional($department)->name) }}" minlength="3" maxlength="50" required="true">
        {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('code') ? 'has-error' : '' }}">
    <label for="code" class="col-md-2 control-label">{{ trans('code') }}</label>
    <div class="col-md-10">
        <input class="form-control" name="code" type="text" id="code" value="{{ old('code', optional($department)->code) }}" minlength="5" maxlength="20" required="true" >
        {!! $errors->first('code', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('caption1') ? 'has-error' : '' }}">
    <label for="caption1" class="col-md-2 control-label">{{ trans('caption1') }}</label>
    <div class="col-md-10">
        <input class="form-control" name="caption1" type="text" id="caption1" value="{{ old('caption1', optional($department)->caption1) }}" maxlength="900" >
        {!! $errors->first('caption1', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('caption2') ? 'has-error' : '' }}">
    <label for="caption2" class="col-md-2 control-label">{{ trans('caption2') }}</label>
    <div class="col-md-10">
        <input class="form-control" name="caption2" type="text" id="caption2" value="{{ old('caption2', optional($department)->caption2) }}" >
        {!! $errors->first('caption2', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('hod_name') ? 'has-error' : '' }}">
    <label for="hod_name" class="col-md-2 control-label">{{ trans('hod_name') }}</label>
    <div class="col-md-10">
        <input class="form-control" name="hod_name" type="text" id="hod_name" value="{{ old('hod_name', optional($department)->hod_name) }}" minlength="1" maxlength="50" required="true">
        {!! $errors->first('hod_name', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('hod_imgulr') ? 'has-error' : '' }}">
    <label for="hod_imgulr" class="col-md-2 control-label">{{ trans('hod_imgulr') }}</label>
    <div class="col-md-10">
        <input class="form-control" name="hod_imgulr" type="file" id="hod_imgulr" value="{{ old('hod_imgulr', optional($department)->hod_imgulr) }}" >
        {!! $errors->first('hod_imgulr', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('hod_academy') ? 'has-error' : '' }}">
    <label for="hod_academy" class="col-md-2 control-label">{{ trans('hod_academy') }}</label>
    <div class="col-md-10">
        <input class="form-control" name="hod_academy" type="text" id="hod_academy" value="{{ old('hod_academy', optional($department)->hod_academy) }}" minlength="1" maxlength="100" required="true" >
        {!! $errors->first('hod_academy', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('hod_email') ? 'has-error' : '' }}">
    <label for="hod_email" class="col-md-2 control-label">{{ trans('hod_email') }}</label>
    <div class="col-md-10">
        <input class="form-control" name="hod_email" type="text" id="hod_email" value="{{ old('hod_email', optional($department)->hod_email) }}" minlength="1" maxlength="50" required="true" >
        {!! $errors->first('hod_email', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('hod_phone') ? 'has-error' : '' }}">
    <label for="hod_phone" class="col-md-2 control-label">{{ trans('hod_phone') }}</label>
    <div class="col-md-10">
        <input class="form-control" name="hod_phone" type="text" id="hod_phone" value="{{ old('hod_phone', optional($department)->hod_phone) }}" minlength="10" required="true">
        {!! $errors->first('hod_phone', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('category') ? 'has-error' : '' }}">
    <label for="category" class="col-md-2 control-label">{{ trans('category') }}</label>
    <div class="col-md-10">
      <select class="form-control select2bs4" id="category" name="category" required="true">
        	    <option value="" style="display: none;" {{ old('category', optional($department)->category ?: '') == '' ? 'selected' : '' }} disabled selected>{{ trans('Select Department') }}</option>
        	@foreach (['Academic Department' => trans('Academic department'),
                         'Administrative Department' => trans('Administrative department')] as $key => $text)
			    <option value="{{ $key }}" {{ old('category', optional($department)->category) == $key ? 'selected' : '' }}>
			    	{{ $text }}
			    </option>
			@endforeach
        </select>

        {!! $errors->first('category', '<p class="help-block">:message</p>') !!}
    </div>
</div>
