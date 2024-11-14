
<div class="card card-default">
    <div class="card-body">
        <dl class="dl-horizontal">
            <dt>{{ trans('districts.region_id') }}</dt>
            <dd>{{ optional($district->Region)->name }}</dd>
            <dt>{{ trans('districts.name') }}</dt>
            <dd>{{ $district->name }}</dd>
            <dt>{{ trans('districts.code') }}</dt>
            <dd>{{ $district->code }}</dd>
            <dt>{{ trans('districts.description') }}</dt>
            <dd>{{ $district->description }}</dd>
            <dt>{{ trans('districts.deleted_at') }}</dt>
            <dd>{{ $district->deleted_at }}</dd>
            <dt>{{ trans('districts.created_at') }}</dt>
            <dd>{{ $district->created_at }}</dd>
            <dt>{{ trans('districts.updated_at') }}</dt>
            <dd>{{ $district->updated_at }}</dd>
        </dl>
    </div>
</div>
