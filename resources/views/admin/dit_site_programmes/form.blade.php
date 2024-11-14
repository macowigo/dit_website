
<div class="form-group {{ $errors->has('code') ? 'has-error' : '' }}">
    <label for="code" class="col-md-2 control-label">{{ trans('programmes.code') }}</label>
    <div class="col-md-10">
        <input class="form-control" name="code" type="text" id="code" value="{{ old('code', optional($programme)->code) }}" minlength="1" maxlength="20" required="true" >
        {!! $errors->first('code', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
    <label for="name" class="col-md-2 control-label">{{ trans('programmes.name') }}</label>
    <div class="col-md-10">
        <input class="form-control" name="name" type="text" id="name" value="{{ old('name', optional($programme)->name) }}" minlength="1" maxlength="100" required="true" >
        {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('level') ? 'has-error' : '' }}">
    <label for="level" class="col-md-2 control-label">{{ trans('programmes.level') }}</label>
    <div class="col-md-10">
        <input class="form-control" name="level" type="text" id="level" value="{{ old('level', optional($programme)->level) }}" minlength="1" required="true" >
        {!! $errors->first('level', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('department_id') ? 'has-error' : '' }}">
    <label for="department_id" class="col-md-2 control-label">{{ trans('programmes.department_id') }}</label>
    <div class="col-md-10">
      <select class="form-control select2bs4" id="department_id" name="department_id" required="true">
        	    <option value="" style="display: none;" {{ old('department_id', optional($programme)->department_id ?: '') == '' ? 'selected' : '' }} disabled selected>{{ trans('programmes.department_id__placeholder') }}</option>
        	@foreach ($departments as $key => $department)
			    <option value="{{ $key }}" {{ old('department_id', optional($programme)->department_id) == $key ? 'selected' : '' }}>
			    	{{ $department }}
			    </option>
			@endforeach
        </select>

        {!! $errors->first('department_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>
