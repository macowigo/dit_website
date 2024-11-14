<div class="card">
    <div class="card-body">
        <dl class="dl-horizontal">
            <dt>{{ trans('short_courses.code') }}</dt>
            <dd>{{ $shortCourse->code }}</dd>
            <dt>{{ trans('short_courses.name') }}</dt>
            <dd>{{ $shortCourse->name }}</dd>
            <dt>{{ trans('short_courses.department_id') }}</dt>
            <dd>{{ optional($shortCourse->department)->name }}</dd>


        </dl>
    </div>
</div>
