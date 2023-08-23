@extends('layouts/layout')

@section('title', 'VisitMajdanpek - O Majdanpeku')

@section('wrapper')

<div class="wrapper container-fluid">
  <div class="header">
    @include('partials/_navigation')
  </div>

  <div class="main">

    <div class="container about-majdanpek-section">
      <div class="row">
        <div class="col-md-5">
          <h3 class="title">{{ __('about-majdanpek.content1.title') }}</h3>
          @foreach( __('about-majdanpek.content1.lead') as $lead )
            <p class="lead">{{ $lead['text'] }}</p>
          @endforeach
        </div>
        <div class="col-md-7">
          <a href="#"><img src="img/content/content.png" class="img-fluid img"></a>
        </div>
      </div>  
    </div>

    <div class="container about-majdanpek-section">
      <div class="row">
        <div class="col-md-7">
          <a href="#"><img src="img/content/content.png" class="img-fluid img"></a>
        </div>
        <div class="col-md-5">
          <h3 class="title">{{ __('about-majdanpek.content1.title') }}</h3>
          @foreach( __('about-majdanpek.content1.lead') as $lead )
            <p class="lead">{{ $lead['text'] }}</p>
          @endforeach
        </div>
      </div>  
    </div>

  </div>

  <div class="footer">
    @include('components.footer')
  </div>
</div>

@endsection