
<div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
    <label for="title" class="col-md-2 control-label">{{ trans('sliders.title') }}</label>
    <div class="col-md-10">
        <input class="form-control" name="title" type="text" id="title" value="{{ old('title', optional($slider)->title) }}" minlength="1" maxlength="50" required="true" placeholder="">
        {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('caption') ? 'has-error' : '' }}">
    <label for="caption" class="col-md-2 control-label">{{ trans('sliders.caption') }}</label>
    <div class="col-md-10">
        <input class="form-control" name="caption" type="text" id="caption" value="{{ old('caption', optional($slider)->caption) }}" maxlength="16777215" placeholder="">
        {!! $errors->first('caption', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('url') ? 'has-error' : '' }}">
    <label for="url" class="col-md-2 control-label">{{ trans('sliders.url') }}</label>
    <div class="col-md-10">
        <input class="form-control" name="url" type="file" id="url" value="{{ old('url', optional($slider)->url) }}" minlength="1" maxlength="90" placeholder="">
        {!! $errors->first('url', '<p class="help-block">:message</p>') !!}
    </div>
</div>



<div class="form-group {{ $errors->has('is_public') ? 'has-error' : '' }}">
    <label for="is_public" class="col-md-2 control-label">{{ trans('sliders.is_public') }}</label>
    <div class="col-md-10">
        <div class="checkbox">
            <label for="is_public_1">
            	<input id="is_public_1" class="" name="is_public" type="checkbox" value="1" {{ old('is_public', optional($slider)->is_public) == '1' ? 'checked' : '' }}>
                {{ trans('sliders.is_public_1') }}
            </label>
        </div>

        {!! $errors->first('is_public', '<p class="help-block">:message</p>') !!}
    </div>
</div>
