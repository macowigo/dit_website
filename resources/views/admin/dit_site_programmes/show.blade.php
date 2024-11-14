<div class="card">
    <div class="card-body">
        <dl class="dl-horizontal">
            <dt>{{ trans('programmes.code') }}</dt>
            <dd>{{ $programme->code }}</dd>
            <dt>{{ trans('programmes.name') }}</dt>
            <dd>{{ $programme->name }}</dd>
            <dt>{{ trans('programmes.level') }}</dt>
            <dd>{{ $programme->level }}</dd>
            <dt>{{ trans('programmes.department_id') }}</dt>
            <dd>{{ optional($programme->department)->name }}</dd>


        </dl>
    </div>
</div>
