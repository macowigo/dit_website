<div class="card card-default">
    <div class="card-body">
        <dl class="dl-horizontal">
            <dt>{{ trans('regions.name') }}</dt>
            <dd>{{ $region->name }}</dd>
            <dt>{{ trans('regions.code') }}</dt>
            <dd>{{ $region->code }}</dd>
            <dt>{{ trans('regions.description') }}</dt>
            <dd>{{ $region->description }}</dd>
            <dt>{{ trans('regions.deleted_at') }}</dt>
            <dd>{{ $region->deleted_at }}</dd>
            <dt>{{ trans('regions.created_at') }}</dt>
            <dd>{{ $region->created_at }}</dd>
            <dt>{{ trans('regions.updated_at') }}</dt>
            <dd>{{ $region->updated_at }}</dd>
        </dl>
    </div>
</div>
