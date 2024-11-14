<div class="card">
    <div class="card-body">
        <dl class="dl-horizontal">
            <dt>{{ trans('events.title') }}</dt>
            <dd>{{ $event->title }}</dd>
            <dt>{{ trans('events.venue') }}</dt>
            <dd>{{ $event->venue }}</dd>
            <dt>{{ trans('events.description') }}</dt>
            <dd>{{ $event->description }}</dd>
            <dt>{{ trans('events.urllink') }}</dt>
            <dd>{{ $event->urllink }}</dd>
            <dt>{{ trans('events.attachment') }}</dt>
            <dd>{{ $event->attachment }}</dd>
            <dt>{{ trans('events.image') }}</dt>
            <dd>{{ $event->image }}</dd>
            <dt>{{ trans('events.starttime') }}</dt>
            <dd>{{ $event->starttime }}</dd>
            <dt>{{ trans('events.endtime') }}</dt>
            <dd>{{ $event->endtime }}</dd>
            <dt>{{ trans('events.is_public') }}</dt>
            <dd>{{ ($event->is_public) ? 'Yes' : 'No' }}</dd>
        </dl>
    </div>
</div>
