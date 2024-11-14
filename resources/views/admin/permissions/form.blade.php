<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
    <label for="name" class="col-md-2 control-label">{{ trans('permissions.name') }}</label>
    <div class="col-md-10">
        <input class="form-control" name="name" type="text" id="name" value="{{ old('name', optional($permission)->name) }}" minlength="1" maxlength="255" required="true" placeholder="{{ trans('permissions.name__placeholder') }}">
        {!! $errors->first('name', '<p class="help-block"  style="color:red;">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('guard_name') ? 'has-error' : '' }}">
    <label for="guard_name" class="col-md-2 control-label">{{ trans('permissions.guard_name') }}</label>
    <div class="col-md-10">
        <input class="form-control" name="guard_name" type="text" id="guard_name" value="{{ old('guard_name', optional($permission)->guard_name) }}" minlength="1" maxlength="255" required="true" placeholder="{{ trans('permissions.guard_name__placeholder') }}">
        {!! $errors->first('guard_name', '<p class="help-block"  style="color:red;">:message</p>') !!}
    </div>
</div>
