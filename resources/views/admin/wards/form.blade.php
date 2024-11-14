
<div class="form-group {{ $errors->has('district_id') ? 'has-error' : '' }}">
    <label for="district_id" class="col-md-2 control-label">{{ trans('wards.district_id') }}</label>
    <div class="col-md-10">
        <select class="form-control select2bs4" id="district_id" name="district_id">
        	    <option value="" style="display: none;" {{ old('district_id', optional($ward)->district_id ?: '') == '' ? 'selected' : '' }} disabled selected>{{ trans('wards.district_id__placeholder') }}</option>
        	@foreach ($Districts as $key => $District)
			    <option value="{{ $key }}" {{ old('district_id', optional($ward)->district_id) == $key ? 'selected' : '' }}>
			    	{{ $District }}
			    </option>
			@endforeach
        </select>

        {!! $errors->first('district_id', '<p class="help-block"  style="color:red;">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
    <label for="name" class="col-md-2 control-label">{{ trans('wards.name') }}</label>
    <div class="col-md-10">
        <input class="form-control" name="name" type="text" id="name" value="{{ old('name', optional($ward)->name) }}" minlength="1" maxlength="45" required="true" placeholder="">
        {!! $errors->first('name', '<p class="help-block"  style="color:red;">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('code') ? 'has-error' : '' }}">
    <label for="code" class="col-md-2 control-label">{{ trans('wards.code') }}</label>
    <div class="col-md-10">
        <input class="form-control" name="code" type="text" id="code" value="{{ old('code', optional($ward)->code) }}" maxlength="10" placeholder="">
        {!! $errors->first('code', '<p class="help-block"  style="color:red;">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
    <label for="description" class="col-md-2 control-label">{{ trans('wards.description') }}</label>
    <div class="col-md-10">
        <input class="form-control" name="description" type="text" id="description" value="{{ old('description', optional($ward)->description) }}" maxlength="30">
        {!! $errors->first('description', '<p class="help-block"  style="color:red;">:message</p>') !!}
    </div>
</div>
