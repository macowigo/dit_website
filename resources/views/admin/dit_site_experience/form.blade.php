
<div class="form-group {{ $errors->has('staff_id') ? 'has-error' : '' }}">
    <label for="staff_id" class="col-md-2 control-label">{{ trans('experiences.staff_id') }}</label>
    <div class="col-md-10">
      <select class="form-control select2bs4" id="staff_id" name="staff_id" required="true">
        	    <option value="" style="display: none;" {{ old('staff_id', optional($experience)->staff_id ?: '') == '' ? 'selected' : '' }} disabled selected>{{ trans('experiences.staff_id__placeholder') }}</option>
        	@foreach ($staffs as $key => $staff)
			    <option value="{{ $key }}" {{ old('staff_id', optional($experience)->staff_id) == $key ? 'selected' : '' }}>
			    	{{ $staff}}
			    </option>
			@endforeach
        </select>

        {!! $errors->first('staff_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
    <label for="description" class="col-md-2 control-label">{{ trans('experiences.description') }}</label>
    <div class="col-md-10">
        <input class="form-control" name="description" type="text" id="description" value="{{ old('description', optional($experience)->description) }}" minlength="1" maxlength="255" required="true">
        {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
    </div>
</div>
