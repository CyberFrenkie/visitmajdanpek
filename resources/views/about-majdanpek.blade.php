@extends('layouts/layout')

@section('title', 'VisitMajdanpek - O Majdanpeku')

@section('wrapper')

<div class="wrapper container-fluid">
  <div class="header">
    @include('partials/_navigation')
  </div>

  <div class="main">

    @foreach( __('about-majdanpek.content') as $content )
      <div class="container about-majdanpek-section">
        <div class="{{ $content['class'] }}">
            <div class="col-md-5">
              <h3 class="title">{{ $content['title'] }}</h3>
              @foreach( $content['lead'] as $lead )
                <p class="lead">{{ $lead['text'] }}</p>
              @endforeach
            </div>
            
            <div class="col-md-7">
              <a href="{{ $content['img']['link'] }}"><img src="{{ $content['img']['src'] }}" class="img-fluid img"></a>
            </div>
        </div>  
      </div>
    @endforeach

  </div>

  <div class="footer">
    @include('components.footer')
  </div>
</div>

@endsection