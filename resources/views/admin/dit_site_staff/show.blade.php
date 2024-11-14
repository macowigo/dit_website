<div class="card">
    <div class="card-body">
        <dl class="dl-horizontal">
            <dt>{{ trans('staff.prefix') }}</dt>
            <dd>{{ $staff->prefix }}</dd>
            <dt>{{ trans('staff.fname') }}</dt>
            <dd>{{ $staff->fname }}</dd>
            <dt>{{ trans('staff.mname') }}</dt>
            <dd>{{ $staff->mname }}</dd>
            <dt>{{ trans('staff.lname') }}</dt>
            <dd>{{ $staff->lname }}</dd>
            <dt>{{ trans('staff.imgurl') }}</dt>
            <dd>{{ $staff->imgurl }}</dd>
            <dt>{{ trans('staff.email') }}</dt>
            <dd>{{ $staff->email }}</dd>
            <dt>{{ trans('staff.phone') }}</dt>
            <dd>{{ $staff->phone }}</dd>
            <dt>{{ trans('staff.designation') }}</dt>
            <dd>{{ $staff->designation }}</dd>
            <dt>{{ trans('staff.title') }}</dt>
            <dd>{{ $staff->title }}</dd>
            <dt>{{ trans('staff.bio_paragraph1') }}</dt>
            <dd>{{ $staff->bio_paragraph1 }}</dd>
            <dt>{{ trans('staff.bio_paragraph2') }}</dt>
            <dd>{{ $staff->bio_paragraph2 }}</dd>
            <dt>{{ trans('staff.bio_paragraph3') }}</dt>
            <dd>{{ $staff->bio_paragraph3 }}</dd>
            <dt>{{ trans('staff.staff_type') }}</dt>
            <dd>{{ $staff->staff_type }}</dd>
            <dt>{{ trans('staff.status') }}</dt>
            <dd>{{ $staff->status }}</dd>
            <dt>{{ trans('staff.department_id') }}</dt>
            <dd>{{ optional($staff->department)->name }}</dd>


        </dl>
    </div>
</div>
