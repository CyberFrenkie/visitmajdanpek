@extends('layouts/layout')
@section('title', 'VisitMajdanpek - Znamenitosti')
@section('wrapper')

<button onclick="history.back()" class="backBtn"><i class="fa-solid fa-arrow-left"></i>{{ __('home.backBtn') }}</button>

<div class="wrapper container-fluid">

  {{-- Header --}}
  <div class="header">
    @include('partials/_navigation')
  </div>

  {{-- Main section --}}
  <div class="main">
    <div class="container-xl">
      <hr class="col-md-4 col-sm-12">
      <div class="content-wrap col-12 row mx-1 justify-content-between">
        <h1 class="col-md-6 col-sm-12 news-heading px-0">{{__('news.news.head')}}</h1>
      </div>

      <div class="news-card-wrap">
        @foreach ( $news as $index => $content )
        <div class="news-card col-md-4 col-sm-12">
          <div class="news-card-link">
            <a href="/new/{{ $content['id'] }}" class="link">
              <img src="{{ $content->img }}" alt="" class="news-card-img ">
              <div class="news-card-content">
                <h1 class="card-info-header m-2">{{ $content->head }}</h1>
                <p class="card-info-text m-2">{{ $content->par }}</p>
                <a href="/new/{{ $content['id'] }}" class="cta readMore d-block">{{ __('news.news.btn_text') }} <i class="{{ trans('custom-footer.arrow-icon') }}"></i></a>
              </div>
            </a>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
  <div>
    {{ $news->links() }}
  </div>

  {{-- Footer --}}
  <div class="footer">
    @include('components.footer')
  </div>
</div>

@endsection