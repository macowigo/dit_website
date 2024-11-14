
<div class="card card-default">
    <div class="card-body">
        <dl class="dl-horizontal">
            <dt>{{ trans('wards.district_id') }}</dt>
            <dd>{{ optional($ward->District)->name }}</dd>
            <dt>{{ trans('wards.name') }}</dt>
            <dd>{{ $ward->name }}</dd>
            <dt>{{ trans('wards.code') }}</dt>
            <dd>{{ $ward->code }}</dd>
            <dt>{{ trans('wards.description') }}</dt>
            <dd>{{ $ward->description }}</dd>
            <dt>{{ trans('wards.deleted_at') }}</dt>
            <dd>{{ $ward->deleted_at }}</dd>
            <dt>{{ trans('wards.created_at') }}</dt>
            <dd>{{ $ward->created_at }}</dd>
            <dt>{{ trans('wards.updated_at') }}</dt>
            <dd>{{ $ward->updated_at }}</dd>

        </dl>

    </div>
</div>
