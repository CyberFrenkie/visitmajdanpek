@extends('layouts/layout')
@section('title', 'VisitMajdanpek - O nama')
@section('wrapper')

<div class="wrapper container-fluid">

  {{-- Header --}}
  <div class="header">
    @include('partials/_navigation')
  </div>

  {{-- Main section --}}
  <div class="main-about-us mx-auto">

    {{-- about-us first section --}}
    <div class="about-us container-xl about-mpek-text-con">
      @foreach( __('about-us.about-us.header') as $hero)
      <div class="col-md-12">
        <div class="text-con">
          <h1 class="about-us-heading">{{ $hero['heading'] }}</h1>
          <hr class="seperator col-md-4 col-sm-12 marg">
        </div>
        <img src="{{ $hero['img'] }}" alt="" class="header-img img-fluid">
        <p class="header-paragraph">{{ $hero['paragraph'] }}</p>
      </div>
      @endforeach

      <div class="row about-us-card justify-content-between">
        @foreach ( __('about-us.about-us.images') as $i)
        <div class="col-md-3 col-sm-12 px-2 about-us-card">
          <a href="{{ $i['url'] }}" class="about-us-link" target="_blank">
            <div class="inner-wrap">
              <img src="{{ $i['img'] }}" alt="" class="about-us-img img-fluid">
            </div>
            
            <h1 class="img-header text-center">{{ $i['text'] }}</h1>
            <p class="text-center about-us-team">{{ $i['team'] }}</p>
          </a>
        </div>
        @endforeach
      </div>
      <div class="row about-us-card justify-content-between">
        <div>
          @foreach( __('about-us.about-us.header') as $head)
            <h1>{{$head['mentor-heading']}}</h1>
            <p>{{$head['mentor-paragraph']}}</p>
          @endforeach  
          <hr class="seperator col-md-4 col-sm-12 marg">
        </div>
        
       
        @foreach ( __('about-us.about-us.mentors') as $i)
        <div class="col-md-3 col-sm-12 px-2 about-us-card">
          <a href="{{ $i['url'] }}" class="about-us-link" target="_blank">
            <div class="inner-wrap">
              <img src="{{ $i['img'] }}" alt="" class="about-us-img img-fluid">
            </div>
            
            <h1 class="img-header text-center">{{ $i['text'] }}</h1>
            <p class="text-center about-us-team">{{ $i['team'] }}</p>
          </a>
        </div>
        @endforeach
      </div>

    </div>

    {{-- Partners second section --}}
    <div class="partners container-xl">
      <hr class="seperator col-md-4 col-sm-12 marg">
      <div class="row justify-content-between">
        @foreach( __('about-us.partners.header') as $partners)
        <div class="col-md-12">
          <h1 class="heading">{{ $partners['heading'] }}</h1>
          <p class="header-paragraph">{{ $partners['paragraph'] }}</p>
        </div>

        <div class="row justify-content-between">
          @foreach ( $partners['images'] as $i)
          <div class="col-md-3 col-sm-12 px-2 about-us-card ">
            <a href="{{ $i['url'] }}" class="about-us-link" target="blank">
              <img src="{{ $i['img'] }}" alt="" class="about-us-img">
            </a>
          </div>
          @endforeach
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