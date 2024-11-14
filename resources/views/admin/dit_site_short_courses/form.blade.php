
<div class="form-group {{ $errors->has('code') ? 'has-error' : '' }}">
    <label for="code" class="col-md-2 control-label">{{ trans('short_courses.code') }}</label>
    <div class="col-md-10">
        <input class="form-control" name="code" type="text" id="code" value="{{ old('code', optional($shortCourse)->code) }}" minlength="1" maxlength="20" required="true" placeholder="{{ trans('short_courses.code__placeholder') }}">
        {!! $errors->first('code', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
    <label for="name" class="col-md-2 control-label">{{ trans('short_courses.name') }}</label>
    <div class="col-md-10">
        <input class="form-control" name="name" type="text" id="name" value="{{ old('name', optional($shortCourse)->name) }}" minlength="1" maxlength="50" required="true" placeholder="{{ trans('short_courses.name__placeholder') }}">
        {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('department_id') ? 'has-error' : '' }}">
    <label for="department_id" class="col-md-2 control-label">{{ trans('short_courses.department_id') }}</label>
    <div class="col-md-10">
      <select class="form-control select2bs4" id="department_id" name="department_id" required="true">
        	    <option value="" style="display: none;" {{ old('department_id', optional($shortCourse)->department_id ?: '') == '' ? 'selected' : '' }} disabled selected>{{ trans('short_courses.department_id__placeholder') }}</option>
        	@foreach ($departments as $key => $department)
			    <option value="{{ $key }}" {{ old('department_id', optional($shortCourse)->department_id) == $key ? 'selected' : '' }}>
			    	{{ $department }}
			    </option>
			    @endforeach
        </select>

        {!! $errors->first('department_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>
