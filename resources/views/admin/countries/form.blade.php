
<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
    <label for="name" class="col-md-2 control-label">{{ trans('countries.name') }}</label>
    <div class="col-md-10">
        <input class="form-control" name="name" type="text" id="name" value="{{ old('name', optional($country)->name) }}" minlength="1" maxlength="45" required="true" placeholder="{{ trans('countries.name__placeholder') }}">
        <!-- {!! $errors->first('name', '<p class="help-block"  style="color:red;">:message</p>') !!} -->
        <span class="text-danger">{{ $errors->first('name') }}</span>
    </div>
</div>

<div class="form-group {{ $errors->has('short_name') ? 'has-error' : '' }}">
    <label for="short_name" class="col-md-2 control-label">{{ trans('countries.short_name') }}</label>
    <div class="col-md-10">
        <input class="form-control" name="short_name" type="text" id="short_name" value="{{ old('short_name', optional($country)->short_name) }}" minlength="1" maxlength="5" required="true" placeholder="{{ trans('countries.short_name__placeholder') }}">
        {!! $errors->first('short_name', '<p class="help-block"  style="color:red;">:message</p>') !!}
    </div>
</div>

