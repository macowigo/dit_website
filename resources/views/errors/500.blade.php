@extends('layouts.web')


@section('content')

<div class="dit-page-wrapper" id="dit-page-wrapper">
    <div class="dit-not-found-wrap" id="dit-full-no-header-wrap">
        <div   class="dit-not-found-background"></div>
        <div class="dit-not-found-container dit-container">
            <div  class="dit-header-transparent-substitute"></div>
            <div class="dit-not-found-content dit-item-pdlr">
                <h1 class="dit-not-found-head">404</h1>
                <h3 class="dit-not-found-title dit-content-font">Page Not Found</h3>
                <div class="dit-not-found-caption">Sorry, we couldn&#039;t find the page you&#039;re looking for.</div>
                <form role="search" method="get" class="search-form" action="index.html">
                    <input type="text" class="search-field dit-title-font" placeholder="Type Keywords..." value="" name="s">
                    <div class="dit-top-search-submit"><i class="fa fa-search"></i></div>
                    <input type="submit" class="search-submit" value="Search">
                </form>
                <div class="dit-not-found-back-to-home"><a href="{{ route('web.home.index') }}">Or Back To Homepage</a></div>
            </div>
        </div>
    </div>
</div>
@endsection
