@extends('layouts/layout')
@section('title', 'VisitMajdanpek - O Majdanpeku')
@section('wrapper')

<div class="wrapper container-fluid">

  {{-- Header --}}
  <div class="header">
    @include('partials/_navigation')
  </div>

  {{-- Main section --}}
  <div class="main">
    <div class="majdanpek-hero">
      <div class="container">
        <div class="row justify-content-center align-items-center">
          <div class="col-12 text-center z-2">
            <h1 class="news-heading px-0">{{ __('about-majdanpek.head') }}</h1>
          </div>
        </div>
      </div>
    </div>

    @foreach( __('about-majdanpek.content') as $index => $content )
    <div class="container about-majdanpek-section">
      <div class="content-wrap {{ $index % 2 == 0 ? 'flex-row' : 'flex-row-reverse' }}">
        <div class="col-xl-7 col-md-12 content-wrapper">
          <h3 class="title">{{ $content['title'] }}</h3>
          @foreach( $content['lead'] as $lead )
          <p class="lead">{{ $lead['text'] }}</p>
          @endforeach
        </div>

        <div class="col-xl-5 col-md-12 img-wrap">
          <img src="{{ asset($content['img']['src']) }}" class="img">
        </div>
      </div>
    </div>
    @endforeach
    <p class="text-center">
      {!! __('about-majdanpek.izvor') !!}
    </p>

    <div class="container map-con">
      <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d7153.17189158862!2d21.9376631!3d44.425033!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sen!2srs!4v1692987015529!5m2!1sen!2srs" class="map" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </div>

  {{-- Footer --}}
  <div class="footer">
    @include('components.footer')
  </div>

</div>

@endsection