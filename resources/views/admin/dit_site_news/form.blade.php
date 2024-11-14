
<div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
    <label for="title" class="col-md-2 control-label">{{ trans('news.title') }}</label>
    <div class="col-md-10">
        <input class="form-control" name="title" type="text" id="title" value="{{ old('title', optional($news)->title) }}" minlength="3" maxlength="90" required="true" placeholder="{{ trans('news.title__placeholder') }}">
        {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('urllink') ? 'has-error' : '' }}">
    <label for="urllink" class="col-md-2 control-label">{{ trans('news.urllink') }}</label>
    <div class="col-md-10">
        <input class="form-control" name="urllink" type="text" id="urllink" value="{{ old('urllink', optional($news)->urllink) }}" minlength="3" maxlength="90" placeholder="{{ trans('news.urllink__placeholder') }}">
        {!! $errors->first('urllink', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
    <label for="description" class="col-md-2 control-label">{{ trans('news.description') }}</label>
    <div class="col-md-10">
        <input class="form-control" name="description" type="text" id="description" value="{{ old('description', optional($news)->description) }}" minlength="3" maxlength="256" required="true">
        {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('attachment') ? 'has-error' : '' }}">
    <label for="attachment" class="col-md-2 control-label">{{ trans('news.attachment') }}</label>
    <div class="col-md-10">
        <input class="form-control" name="attachment" type="file" id="attachment" value="{{ old('attachment', optional($news)->attachment) }}">
        {!! $errors->first('attachment', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('image') ? 'has-error' : '' }}">
    <label for="image" class="col-md-2 control-label">{{ trans('news.image') }}</label>
    <div class="col-md-10">
        <input class="form-control" name="image" type="file" id="image" value="{{ old('image', optional($news)->image) }}">
        {!! $errors->first('image', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('is_public') ? 'has-error' : '' }}">
    <label for="is_public" class="col-md-2 control-label">{{ trans('news.is_public') }}</label>
    <div class="col-md-10">
        <div class="checkbox">
            <label for="is_public_1">
            	<input id="is_public_1" class="" name="is_public" type="checkbox" value="1" {{ old('is_public', optional($news)->is_public) == '1' ? 'checked' : '' }}>
                {{ trans('news.is_public_1') }}
            </label>
        </div>

        {!! $errors->first('is_public', '<p class="help-block">:message</p>') !!}
    </div>
</div>
