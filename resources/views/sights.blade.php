@extends('layouts/layout')
@section('title', 'VisitMajdanpek - Znamenitosti')
@section('wrapper')

  <div class="wrapper container-fluid">

    {{-- Header --}}
    <div class="header">
      @include('partials/_navigation')
    </div>

    {{-- Main section --}}
    <div class="main">
      <div class="container-fluid split-hero">
        <div class="split-card one">
          <a href="/sights/mpek" class="card-link link text-light">
            <img src="{{ asset('img/content/majdanpek/majdanpek.jpg') }}" alt="" class="card-img img">
            <h1 class="head">{{ __('sights.sights.head1') }}</h1>
            <p class="par">{{ __('sights.sights.par1') }}<span class="d-block mt-2"><a href="{{ __('sights.sights.url1') }}" class="cta readMore">{{ __('sights.sights.btn.text') }} <i class="{{ __('custom-footer.arrow-icon') }}"></i></a></span></p>
          </a>
        </div>
        <div class="split-card two">
          <a href="/sights/dm-sights" class="card-link link text-light">
            <img src="{{ asset('img/content/dm/DonjiMilanovac2.jpg') }}" alt="" class="card-img img">
            <h1 class="head">{{ __('sights.sights.head2') }}</h1>
            <p class="par">{{ __('sights.sights.par2') }}<span class="d-block mt-2"><a href="{{ __('sights.sights.url2') }}" class="cta readMore">{{ __('sights.sights.btn.text') }}<i class="{{ __('custom-footer.arrow-icon') }}"></i></a></span></p>
          </a>
        </div>
      </div>
    </div>

    {{-- Footer --}}
    <div class="footer margin-100vh">
      @include('components.footer')
    </div>

  </div>

@endsection