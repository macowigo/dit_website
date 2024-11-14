<div class="card">
    <div class="card-body">
        <dl class="dl-horizontal">
            <dt>{{ trans('quick_links.title') }}</dt>
            <dd>{{ $quickLink->title }}</dd>
            <dt>{{ trans('quick_links.urllink') }}</dt>
            <dd>{{ $quickLink->urllink }}</dd>
            <dt>{{ trans('quick_links.is_public') }}</dt>
            <dd>{{ ($quickLink->is_public) ? 'Yes' : 'No' }}</dd>

        </dl>
    </div>
</div>
