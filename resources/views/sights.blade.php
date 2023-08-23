@extends('layouts/layout')

@section('title', 'VisitMajdanpek - Znamenitosti')

@section('wrapper')

<div class="wrapper container-fluid">
  <div class="header">
    @include('partials/_navigation')
  </div>

  <div class="main">
    
    <div class="container-xl sights-content">
      @foreach( __('sights.sights') as $sights )

        <div class="content-wrap col-12 row mx-1 justify-content-between sights-text-con">
          <h1 class="col-md-4 col-sm-12 news-heading px-0">{{ $sights['head'] }}</h1>
          <p class="col-md-6 col-sm-12 news-text px-0">{{ $sights['par'] }}</p>
          <a href="{{ $sights['btn']['link'] }}" class="{{ $sights['btn']['class'] }}">{{ $sights['btn']['text'] }}</a>
        </div>

        <div class="card-wrap row mx-auto my-5 flex-wrap">
          @foreach ( ($sights['content']) as $content )
            <div class="card col-md-4 col-sm-12 sights-card">
              <a href="{{ $content['link'] }}" class="card-link link" >
                <img src="{{ $content['img'] }}" alt="" class="card-img">
                <div class="card-content">
                  <h1 class="card-info-header m-2">{{ $content['head'] }}</h1>
                  <p class="card-info-text m-2">{{ $content['par'] }}</p>
                </div>
              </a>                        
            </div>
          @endforeach
        </div>
      @endforeach
    </div>

  </div>

  <div class="footer">
    @include('components.footer')
  </div>
</div>

@endsection