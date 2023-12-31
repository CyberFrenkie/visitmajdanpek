@extends('layouts/layout')
@section('title', 'VisitMajdanpek - Znamenitosti')
@section('wrapper')

  <button onclick="history.back()" class="backBtn"><i class="fa-solid fa-arrow-left"></i>{{ __('home.backBtn') }}</button>

  <div class="wrapper container-fluid">

    {{-- Header --}}
    <div class="header fixed-nav">
      @include('partials/_navigation')

      <div id="custom-hero">
        @foreach (__('sights.sights.milanovac') as $info)
          <img src="{{ asset($info['img']) }}" alt="" class="img">
          <div class="container">
            <h3>{{ $info['head'] }}</h1>
            <p id="disappearing-paragraph">{{ $info['par'] }}</p>
          </div>
        @endforeach
        
      </div>
    </div>

    {{-- Main section --}}
    <div class="main">
      <div class="container-xl sights-content">
        <div class="card-wrap row mx-auto my-5 flex-wrap">
          @foreach ($dmSights as $item)
            <div class="card col-md-4 col-sm-12 sights-card">
              <a href="/sight/{{ $item['id'] }}" class="card-link link">
                <img src="{{ asset($item['img']) }}" alt="" class="card-img img">
                <div class="card-content">
                  <h1 class="card-info-header sights-card-header m-2">{{ $item['head'] }}</h1>
                  <p class="card-info-text m-2 shorten">{{ $item['par'] }}</p>
                  <a href="/sight/{{ $item['id'] }}" class="{{ __('sights.sights.btn.class') }}">{{ __('sights.sights.btn.text') }}<i class="fa-solid fa-arrow-right"></i></a>
                </div>
              </a>
            </div>
          @endforeach
        </div>
      </div>   
    </div>

    {{-- Footer --}}
    <div class="footer">
      @include('components.footer')
    </div>

  </div>

@endsection