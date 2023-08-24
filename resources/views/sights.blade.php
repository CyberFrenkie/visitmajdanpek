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
        <div class="sights-text-con">
          <h1 class="news-heading px-0">{{ $sights['head'] }}</h1>
          <hr class="seperator col-md-4 col-sm-12 marg">
        </div>

        <div class="card-wrap row mx-auto my-5 flex-wrap">
          @foreach ( ($sights['content']) as $content )
            <div class="card col-md-4 col-sm-12 sights-card">
              <a href="{{ $content['link'] }}" class="card-link link" >
                <img src="{{ $content['img'] }}" alt="" class="card-img img">
                <div class="card-content">
                  <h1 class="card-info-header sights-card-header m-2">{{ $content['head'] }}</h1>
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