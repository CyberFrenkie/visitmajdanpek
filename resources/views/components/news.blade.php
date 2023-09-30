@extends('layouts/layout')
@section('title', 'VisitMajdanpek - Znamenitosti')
@section('wrapper')

  <button onclick="history.back()" class="readMore backBtn">Go Back</button>

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

        <div class="news-card-wrap flex-wrap">
          @foreach ( $news as $index => $content )
            <div class="news-card col-md-12">
              <a href="/new/{{ $content['id'] }}" class="news-card-link link row flex-wrap {{ $index % 2 == 0 ? 'flex-row' : 'flex-row-reverse' }}">
                <img src="{{ $content->img }}" alt="" class="news-card-img col-md-4 col-sm-12">
                <div class="news-card-content col-md-8 col-sm-12">
                  <h1 class="card-info-header m-2">{{ $content->head }}</h1>
                  <p class="card-info-text m-2">{{ $content->par }}</p>
                </div>
              </a>
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