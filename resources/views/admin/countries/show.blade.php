
<div class="card card-default">
    <div class="card-body">
        <dl class="dl-horizontal">
            <dt>{{ trans('countries.name') }}</dt>
            <dd>{{ $country->name }}</dd>
            <dt>{{ trans('countries.short_name') }}</dt>
            <dd>{{ $country->short_name }}</dd>
            <dt>{{ trans('countries.deleted_at') }}</dt>
            <dd>{{ $country->deleted_at }}</dd>
            <dt>{{ trans('countries.created_at') }}</dt>
            <dd>{{ $country->created_at }}</dd>
            <dt>{{ trans('countries.updated_at') }}</dt>
            <dd>{{ $country->updated_at }}</dd>

        </dl>

    </div>
</div>
