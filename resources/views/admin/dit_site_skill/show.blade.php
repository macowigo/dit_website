<div class="card">
    <div class="card-body">
        <dl class="dl-horizontal">
            <dt>{{ trans('skills.staff_id') }}</dt>
            <dd>{{ optional($skills->staff)->fname }} &nbsp; {{ optional($education->staff)->lname }}</dd>
            <dt>{{ trans('skills.description') }}</dt>
            <dd>{{ $skills->description }}</dd>
            <dt>{{ trans('skills.rating') }}</dt>
            <dd>{{ $skills->rating }}</dd>


        </dl>
    </div>
</div>
