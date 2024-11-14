
<div class="form-group {{ $errors->has('region_id') ? 'has-error' : '' }}">
    <label for="region_id" class="col-md-2 control-label">{{ trans('districts.region_id') }}</label>
    <div class="col-md-10">
        <select class="form-control select2bs4" id="region_id" name="region_id">
        	    <option value="" style="display: none;" {{ old('region_id', optional($district)->region_id ?: '') == '' ? 'selected' : '' }} disabled selected>{{ trans('districts.region_id__placeholder') }}</option>
        	@foreach ($Regions as $key => $Region)
			    <option value="{{ $key }}" {{ old('region_id', optional($district)->region_id) == $key ? 'selected' : '' }}>
			    	{{ $Region }}
			    </option>
			@endforeach
        </select>

        {!! $errors->first('region_id', '<p class="help-block"  style="color:red;">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
    <label for="name" class="col-md-2 control-label">{{ trans('districts.name') }}</label>
    <div class="col-md-10">
        <input class="form-control" name="name" type="text" id="name" value="{{ old('name', optional($district)->name) }}" minlength="1" maxlength="45" required="true" placeholder="">
        {!! $errors->first('name', '<p class="help-block"  style="color:red;">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('code') ? 'has-error' : '' }}">
    <label for="code" class="col-md-2 control-label">{{ trans('districts.code') }}</label>
    <div class="col-md-10">
        <input class="form-control" name="code" type="text" id="code" value="{{ old('code', optional($district)->code) }}" maxlength="10" placeholder="">
        {!! $errors->first('code', '<p class="help-block"  style="color:red;">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
    <label for="description" class="col-md-2 control-label">{{ trans('districts.description') }}</label>
    <div class="col-md-10">
        <input class="form-control" name="description" type="text" id="description" value="{{ old('description', optional($district)->description) }}" maxlength="30">
        {!! $errors->first('description', '<p class="help-block"  style="color:red;">:message</p>') !!}
    </div>
</div>
