




<div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
    <label for="title" class="col-md-2 control-label">{{ trans('events.title') }}</label>
    <div class="col-md-10">
        <input class="form-control" name="title" type="text" id="title" value="{{ old('title', optional($event)->title) }}" minlength="1" maxlength="90" required="true" placeholder="">
        {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('venue') ? 'has-error' : '' }}">
    <label for="venue" class="col-md-2 control-label">{{ trans('events.venue') }}</label>
    <div class="col-md-10">
        <input class="form-control" name="venue" type="text" id="venue" value="{{ old('venue', optional($event)->venue) }}" minlength="6" maxlength="50" required="true" placeholder="">
        {!! $errors->first('venue', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
    <label for="description" class="col-md-2 control-label">{{ trans('events.description') }}</label>
    <div class="col-md-10">
        <input class="form-control" name="description" type="text" id="description" value="{{ old('description', optional($event)->description) }}" minlength="6" maxlength=256 required="true">
        {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('description2') ? 'has-error' : '' }}">
    <label for="description2" class="col-md-2 control-label">{{ trans('events.description2') }}</label>
    <div class="col-md-10">
        <input class="form-control" name="description2" type="text" id="description2" value="{{ old('description2', optional($event)->description2) }}" minlength="6" maxlength=256>
        {!! $errors->first('description2', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('description3') ? 'has-error' : '' }}">
    <label for="description3" class="col-md-2 control-label">{{ trans('events.description3') }}</label>
    <div class="col-md-10">
        <input class="form-control" name="description3" type="text" id="description3" value="{{ old('description3', optional($event)->description3) }}" minlength="6" maxlength=256>
        {!! $errors->first('description3', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('description4') ? 'has-error' : '' }}">
    <label for="description4" class="col-md-2 control-label">{{ trans('events.description4') }}</label>
    <div class="col-md-10">
        <input class="form-control" name="description4" type="text" id="description4" value="{{ old('description4', optional($event)->description4) }}" minlength="6" maxlength=256>
        {!! $errors->first('description4', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('urllink') ? 'has-error' : '' }}">
    <label for="urllink" class="col-md-2 control-label">{{ trans('events.urllink') }}</label>
    <div class="col-md-10">
        <input class="form-control" name="urllink" type="text" id="urllink" value="{{ old('urllink', optional($events)->urllink) }}" minlength="3" maxlength="190" placeholder="{{ trans('events.urllink__placeholder') }}">
        {!! $errors->first('urllink', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('attachment') ? 'has-error' : '' }}">
    <label for="attachment" class="col-md-2 control-label">{{ trans('events.attachment') }}</label>
    <div class="col-md-10">
        <input class="form-control" name="attachment" type="file" id="attachment" value="{{ old('attachment', optional($event)->attachment) }}"   placeholder="">
        {!! $errors->first('attachment', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('image') ? 'has-error' : '' }}">
    <label for="image" class="col-md-2 control-label">{{ trans('events.image') }}</label>
    <div class="col-md-10">
        <input class="form-control" name="image" type="file" id="file" value="{{ old('image', optional($event)->image) }}"  placeholder="">
        {!! $errors->first('image', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('image2') ? 'has-error' : '' }}">
    <label for="image2" class="col-md-2 control-label">{{ trans('events.image2') }}</label>
    <div class="col-md-10">
        <input class="form-control" name="image2" type="file" id="file" value="{{ old('image2', optional($event)->image2) }}"  placeholder="">
        {!! $errors->first('image2', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('image3') ? 'has-error' : '' }}">
    <label for="image3" class="col-md-2 control-label">{{ trans('events.image3') }}</label>
    <div class="col-md-10">
        <input class="form-control" name="image3" type="file" id="file" value="{{ old('image3', optional($event)->image3) }}"  placeholder="">
        {!! $errors->first('image3', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('image4') ? 'has-error' : '' }}">
    <label for="image4" class="col-md-2 control-label">{{ trans('events.image4') }}</label>
    <div class="col-md-10">
        <input class="form-control" name="image4" type="file" id="file" value="{{ old('image4', optional($event)->image4) }}"  placeholder="">
        {!! $errors->first('image4', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('starttime') ? 'has-error' : '' }}">
    <label for="starttime" class="col-md-2 control-label">{{ trans('events.starttime') }}</label>
    <div class="col-md-10">
        <input class="form-control datetimepicker " name="starttime" type="text" id=" " value="{{ old('starttime', optional($event)->starttime) }}" required="true" placeholder="">
        {!! $errors->first('starttime', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('endtime') ? 'has-error' : '' }}">
    <label for="endtime" class="col-md-2 control-label">{{ trans('events.endtime') }}</label>
    <div class="col-md-10">
        <input class="form-control datetimepicker " name="endtime" type="text" id=" " value="{{ old('endtime', optional($event)->endtime) }}" placeholder="">
        {!! $errors->first('endtime', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('is_public') ? 'has-error' : '' }}">
    <label for="is_public" class="col-md-2 control-label">{{ trans('events.is_public') }}</label>
    <div class="col-md-10">
        <div class="checkbox">
            <label for="is_public_1">
            	<input id="is_public_1" class="" name="is_public" type="checkbox" value="1" {{ old('is_public', optional($event)->is_public) == '1' ? 'checked' : '' }}>
                {{ trans('events.is_public_1') }}
            </label>
        </div>

        {!! $errors->first('is_public', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<script type="text/javascript">
        $(function () {
            $('.datetimepicker').datetimepicker();

              $('.datetimepicker-addon').on('click', function() {
                $(this).prev('input.datetimepicker').data('DateTimePicker').toggle();
              });
        });
    </script>
