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
      <div class="container-xl sights-content">   
               

          <div class="card-wrap row mx-auto my-5 flex-wrap">  
            <div class="card col-12 sights-card">  
              <h1 class="news-heading px-0 ">{{ __('sights.sights.head1') }}</h1>
              <a href="/sights/mpek" class="card-link link" >                  
                <img src="{{ asset('img/content/content.png') }}" alt="" class="card-img img">  
              </a>       
            </div>  
          
            <div class="card col-12 sights-card">  
              <h1 class="news-heading px-0 ">{{ __('sights.sights.head2') }}</h1>
              <a href="/sights/dm-sights" class="card-link link" >                  
                <img src="{{ asset('img/content/content.png') }}" alt="" class="card-img img">  
              </a>       
            </div>  
          </div>    
       
        

      </div>   
    </div>

    {{-- Footer --}}
    <div class="footer">
      @include('components.footer')
    </div>
    
  </div>

@endsection