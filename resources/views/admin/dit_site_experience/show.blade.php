<div class="card">
    <div class="card-body">
        <dl class="dl-horizontal">
            <dt>{{ trans('experiences.staff_id') }}</dt>
            <dd>{{ optional($experience->staff)->fname }}&nbsp; {{ optional($experience->staff)->lname }}</dd>
            <dt>{{ trans('experiences.description') }}</dt>
            <dd>{{ $experience->description }}</dd>
        </dl>
    </div>
</div>
