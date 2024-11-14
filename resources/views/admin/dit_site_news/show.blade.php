<div class="card">
    <div class="card-body">
        <dl class="dl-horizontal">
            <dt>{{ trans('news.title') }}</dt>
            <dd>{{ $news->title }}</dd>
            <dt>{{ trans('news.urllink') }}</dt>
            <dd>{{ $news->urllink }}</dd>
            <dt>{{ trans('news.description') }}</dt>
            <dd>{{ $news->description }}</dd>
            <dt>{{ trans('news.attachment') }}</dt>
            <dd>{{ $news->attachment }}</dd>
            <dt>{{ trans('news.image') }}</dt>
            <dd>{{ $news->image }}</dd>
            <dt>{{ trans('news.is_public') }}</dt>
            <dd>{{ ($news->is_public) ? 'Yes' : 'No' }}</dd>


        </dl>
    </div>
</div>
