
<div class="form-group {{ $errors->has('staff_id') ? 'has-error' : '' }}">
    <label for="staff_id" class="col-md-2 control-label">{{ trans('education.staff_id') }}</label>
    <div class="col-md-10">
      <select class="form-control select2bs4" id="staff_id" name="staff_id" required="true">
        	    <option value="" style="display: none;" {{ old('staff_id', optional($education)->staff_id ?: '') == '' ? 'selected' : '' }} disabled selected>{{ trans('education.staff_id__placeholder') }}</option>
        	@foreach ($staffs as $key => $staff)
			    <option value="{{ $key }}" {{ old('staff_id', optional($education)->staff_id) == $key ? 'selected' : '' }}>
			    	{{ $staff}}
			    </option>
		     	@endforeach
        </select>

        {!! $errors->first('staff_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('level') ? 'has-error' : '' }}">
    <label for="level" class="col-md-2 control-label">{{ trans('education.level') }}</label>
    <div class="col-md-10">
      <select class="form-control select2bs4" id="level" name="level" required="true">
        	    <option value="" style="display: none;" {{ old('level', optional($education)->level ?: '') == '' ? 'selected' : '' }} disabled selected>{{ trans('education.level__placeholder') }}</option>
        	@foreach (['Certificate' => trans('education.level_certificate'),
                      'CSEE' => trans('education.level_csee'),
                      'ACSEE' => trans('education.level_acsee'),
                      'FTC' => trans('education.level_ftc'),
                      'Diploma' => trans('education.level_diploma'),
                      'Advanced Diploma' => trans('education.level_advanced_diploma'),
                      'Bachelor Degree' => trans('education.level_bachelor_degree'),
                      'PostGraduate Diploma' => trans('education.level_postgraduate_diploma'),
                      'Masters' => trans('education.level_masters'),
		      'PhD' => trans('education.level_phd'),
		      'PostDoctoral' => trans('education.level_postdoctoral')] as $key => $text)
			    <option value="{{ $key }}" {{ old('level', optional($education)->level) == $key ? 'selected' : '' }}>
			    	{{ $text }}
			    </option>
			@endforeach
        </select>

        {!! $errors->first('level', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
    <label for="description" class="col-md-2 control-label">{{ trans('education.description') }}</label>
    <div class="col-md-10">
        <input class="form-control" name="description" type="text" id="description" value="{{ old('description', optional($education)->description) }}" minlength="1" maxlength="255" required="true">
        {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
    </div>
</div>
