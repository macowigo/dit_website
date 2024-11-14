<div class="card">
    <div class="card-body">
        <dl class="dl-horizontal">
            <dt>{{ trans('sliders.title') }}</dt>
            <dd>{{ $slider->title }}</dd>
            <dt>{{ trans('sliders.caption') }}</dt>
            <dd>{{ $slider->caption }}</dd>
            <dt>{{ trans('sliders.url') }}</dt>
            <dd>{{ $slider->url }}</dd>
            <dt>{{ trans('sliders.is_public') }}</dt>
            <dd>{{ ($slider->is_public) ? 'Yes' : 'No' }}</dd>

        </dl>
    </div>
</div>
