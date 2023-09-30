@extends('layouts/layout')
@section('title', 'VisitMajdanpek - Znamenitosti')
@section('wrapper')

  <button onclick="history.back()" class="readMore backBtn">Go Back</button>

  <div class="wrapper container-fluid">

    {{-- Header --}}
    <div class="header fixed-nav">
      @include('partials/_navigation')

      <div id="custom-hero">
        <img src="{{ asset('img/content/majdanpek/mpek-nocu.jpg') }}" alt="" class="img">
        <div class="container">
          <h3>{{ __('sights.sights.head2') }}</h1>
          <p id="disappearing-paragraph">{{ __('sights.sights.par2') }}</p>
        </div>
      </div>
    </div>

    {{-- Main section --}}
    <div class="main" id="middle">
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