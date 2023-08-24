@extends('layouts/layout')

@section('title', 'VisitMajdanpek - O nama')

@section('wrapper')

<div class="wrapper container-fluid">
  <div class="header">
    @include('partials/_navigation')
  </div>

  <div class="main container">
    <header class="about-us row">
      @foreach( __('about-us.about-us.header') as $hero)
        <div class="col-md-12 text-center">
          <h1 class="header-title">{{ $hero['heading'] }}</h1>
          <img src="{{ $hero['img'] }}" alt="" class="header-img img-fluid">
          <p class="header-paragraph">{{ $hero['paragraph'] }}</p>
        </div>
      @endforeach
    </header>

    <div class="container">
      <div class="row">
        @foreach ( __('about-us.about-us.images') as $i)
          <div class="col-md-4 px-2 about-us-card">
            <a href="{{ $i['url'] }}" class="about-us-link">
            <img src="{{ $i['img'] }}" alt="" class="about-us-img img-fluid">
            <p class="about-us-img-header text-center">{{ $i['text'] }}</p>
            </a>
          </div>
        @endforeach
      </div>
    </div>
  </div>

  <div class="footer">
    @include('components.footer')
  </div>
</div>

@endsection