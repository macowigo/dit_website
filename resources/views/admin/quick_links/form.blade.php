

<div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
    <label for="title" class="col-md-2 control-label">{{ trans('quick_links.title') }}</label>
    <div class="col-md-10">
        <input class="form-control" name="title" type="text" id="title" value="{{ old('title', optional($quickLink)->title) }}" minlength="1" maxlength="90" required="true" placeholder="">
        {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('urllink') ? 'has-error' : '' }}">
    <label for="urllink" class="col-md-2 control-label">{{ trans('quick_links.urllink') }}</label>
    <div class="col-md-10">
        <input class="form-control" name="urllink" type="text" id="urllink" value="{{ old('urllink', optional($quickLink)->urllink) }}" minlength="1" maxlength="90" required="true" placeholder="">
        {!! $errors->first('urllink', '<p class="help-block">:message</p>') !!}
    </div>
</div>


<div class="form-group {{ $errors->has('is_public') ? 'has-error' : '' }}">
    <label for="is_public" class="col-md-2 control-label">{{ trans('quick_links.is_public') }}</label>
    <div class="col-md-10">
        <div class="checkbox">
            <label for="is_public_1">
            	<input id="is_public_1" class="" name="is_public" type="checkbox" value="1" {{ old('is_public', optional($quickLink)->is_public) == '1' ? 'checked' : '' }}>
                {{ trans('quick_links.is_public_1') }}
            </label>
        </div>

        {!! $errors->first('is_public', '<p class="help-block">:message</p>') !!}
    </div>
</div>
