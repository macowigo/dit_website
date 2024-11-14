
<div class="form-group {{ $errors->has('prefix') ? 'has-error' : '' }}">
    <label for="prefix" class="col-md-2 control-label">{{ trans('staff.prefix') }}</label>
    <div class="col-md-10">
      <select class="form-control select2bs4" id="prefix" name="prefix" required="true">
        	    <option value="" style="display: none;" {{ old('prefix', optional($staff)->prefix ?: '') == '' ? 'selected' : '' }} disabled selected>{{ trans('staff.prefix__placeholder') }}</option>
        	@foreach (['Mr' => trans('staff.prefix_mr'),
              'Mrs' => trans('staff.prefix_mrs'),
              'Ms' => trans('staff.prefix_ms'),
              'Dr' => trans('staff.prefix_dr'),
              'Prof' => trans('staff.prefix_prof')] as $key => $text)
			    <option value="{{ $key }}" {{ old('prefix', optional($staff)->prefix) == $key ? 'selected' : '' }}>
			    	{{ $text }}
			    </option>
			@endforeach
        </select>

        {!! $errors->first('prefix', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('fname') ? 'has-error' : '' }}">
    <label for="fname" class="col-md-2 control-label">{{ trans('staff.fname') }}</label>
    <div class="col-md-10">
        <input class="form-control" name="fname" type="text" id="fname" value="{{ old('fname', optional($staff)->fname) }}" minlength="1" maxlength="20" required="true">
        {!! $errors->first('fname', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('mname') ? 'has-error' : '' }}">
    <label for="mname" class="col-md-2 control-label">{{ trans('staff.mname') }}</label>
    <div class="col-md-10">
        <input class="form-control" name="mname" type="text" id="mname" value="{{ old('mname', optional($staff)->mname) }}" maxlength="20" >
        {!! $errors->first('mname', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('lname') ? 'has-error' : '' }}">
    <label for="lname" class="col-md-2 control-label">{{ trans('staff.lname') }}</label>
    <div class="col-md-10">
        <input class="form-control" name="lname" type="text" id="lname" value="{{ old('lname', optional($staff)->lname) }}" minlength="1" maxlength="20" required="true" >
        {!! $errors->first('lname', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('imgurl') ? 'has-error' : '' }}">
    <label for="imgurl" class="col-md-2 control-label">{{ trans('staff.imgurl') }}</label>
    <div class="col-md-10">
        <input class="form-control" name="imgurl" type="file" id="imgurl" value="{{ old('imgurl', optional($staff)->imgurl) }}">
        {!! $errors->first('imgurl', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
    <label for="email" class="col-md-2 control-label">{{ trans('staff.email') }}</label>
    <div class="col-md-10">
        <input class="form-control" name="email" type="text" id="email" value="{{ old('email', optional($staff)->email) }}" maxlength="50">
        {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('phone') ? 'has-error' : '' }}">
    <label for="phone" class="col-md-2 control-label">{{ trans('staff.phone') }}</label>
    <div class="col-md-10">
        <input class="form-control" name="phone" type="text" id="phone" value="{{ old('phone', optional($staff)->phone) }}">
        {!! $errors->first('phone', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('designation') ? 'has-error' : '' }}">
    <label for="designation" class="col-md-2 control-label">{{ trans('staff.designation') }}</label>
    <div class="col-md-10">
        <input class="form-control" name="designation" type="text" id="designation" value="{{ old('designation', optional($staff)->designation) }}" minlength="1" maxlength="70" required="true">
        {!! $errors->first('designation', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
    <label for="title" class="col-md-2 control-label">{{ trans('staff.title') }}</label>
    <div class="col-md-10">
        <input class="form-control" name="title" type="text" id="title" value="{{ old('title', optional($staff)->title) }}" minlength="1" maxlength="70" required="true">
        {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('bio_paragraph1') ? 'has-error' : '' }}">
    <label for="bio_paragraph1" class="col-md-2 control-label">{{ trans('staff.bio_paragraph1') }}</label>
    <div class="col-md-10">
        <input class="form-control" name="bio_paragraph1" type="text" id="bio_paragraph1" value="{{ old('bio_paragraph1', optional($staff)->bio_paragraph1) }}" maxlength="16777215">
        {!! $errors->first('bio_paragraph1', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('bio_paragraph2') ? 'has-error' : '' }}">
    <label for="bio_paragraph2" class="col-md-2 control-label">{{ trans('staff.bio_paragraph2') }}</label>
    <div class="col-md-10">
        <input class="form-control" name="bio_paragraph2" type="text" id="bio_paragraph2" value="{{ old('bio_paragraph2', optional($staff)->bio_paragraph2) }}" maxlength="16777215">
        {!! $errors->first('bio_paragraph2', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('bio_paragraph3') ? 'has-error' : '' }}">
    <label for="bio_paragraph3" class="col-md-2 control-label">{{ trans('staff.bio_paragraph3') }}</label>
    <div class="col-md-10">
        <input class="form-control" name="bio_paragraph3" type="text" id="bio_paragraph3" value="{{ old('bio_paragraph3', optional($staff)->bio_paragraph3) }}" maxlength="16777215">
        {!! $errors->first('bio_paragraph3', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('staff_type') ? 'has-error' : '' }}">
    <label for="staff_type" class="col-md-2 control-label">{{ trans('staff.staff_type') }}</label>
    <div class="col-md-10">
      <select class="form-control select2bs4" id="staff_type" name="staff_type" required="true">
        	    <option value="" style="display: none;" {{ old('staff_type', optional($staff)->staff_type ?: '') == '' ? 'selected' : '' }} disabled selected>{{ trans('staff.staff_type__placeholder') }}</option>
        	@foreach (['DIT Top Management' => trans('staff.staff_type_dit_top_management'),
            'Professors and Senior Lecturers' => trans('staff.staff_type_professors_and_senior_lecturers'),
            'Lecturers' => trans('staff.staff_type_lecturers'),
            'Assistant Lecturers' => trans('staff.staff_type_assistant_lecturers'),
            'Tutorial Assistants' => trans('staff.staff_type_tutorial_assistants'),
            'Instructors' => trans('staff.staff_type_instructors'),
            'Administrative and Supporting Staff' => trans('staff.staff_type_administrative_and_supporting_staff')] as $key => $text)
			    <option value="{{ $key }}" {{ old('staff_type', optional($staff)->staff_type) == $key ? 'selected' : '' }}>
			    	{{ $text }}
			    </option>
			@endforeach
        </select>

        {!! $errors->first('staff_type', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('status') ? 'has-error' : '' }}">
    <label for="status" class="col-md-2 control-label">{{ trans('staff.status') }}</label>
    <div class="col-md-10">
        <input class="form-control" name="status" type="text" id="status" value="{{ old('status', optional($staff)->status) }}" minlength="1" required="true">
        {!! $errors->first('status', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('department_id') ? 'has-error' : '' }}">
    <label for="department_id" class="col-md-2 control-label">{{ trans('staff.department_id') }}</label>
    <div class="col-md-10">
      <select class="form-control select2bs4" id="department_id" name="department_id" required="true">
        	    <option value="" style="display: none;" {{ old('department_id', optional($staff)->department_id ?: '') == '' ? 'selected' : '' }} disabled selected>{{ trans('staff.department_id__placeholder') }}</option>
        	@foreach ($departments as $key => $department)
			    <option value="{{ $key }}" {{ old('department_id', optional($staff)->department_id) == $key ? 'selected' : '' }}>
			    	{{ $department }}
			    </option>
			@endforeach
        </select>

        {!! $errors->first('department_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>
