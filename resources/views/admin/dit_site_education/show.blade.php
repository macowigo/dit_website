<div class="card">
    <div class="card-body">
        <dl class="dl-horizontal">
            <dt>{{ trans('education.staff_id') }}</dt>
            <dd>{{ optional($education->staff)->fname }} &nbsp; {{ optional($education->staff)->lname }}</dd>
            <dt>{{ trans('education.level') }}</dt>
            <dd>{{ $education->level }}</dd>
            <dt>{{ trans('education.description') }}</dt>
            <dd>{{ $education->description }}</dd>
            <dt>{{ trans('education.created_at') }}</dt>
            <dd>{{ $education->created_at }}</dd>
            <dt>{{ trans('education.updated_at') }}</dt>
            <dd>{{ $education->updated_at }}</dd>

        </dl>
    </div>
</div>
