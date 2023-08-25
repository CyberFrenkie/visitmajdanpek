@extends('layouts/layout')

@section('title', 'VisitMajdanpek - Znamenitosti')

@section('wrapper')

<div class="wrapper container-fluid">
  <div class="header">
    @include('partials/_navigation')
  </div>

  <div class="main">
    
        
        <div class="container-xl sights-content">
          
          <div class="sights-text-con">

            <h1 class="news-heading px-0"> {{ __('sights.sights.head') }}</h1>

            <hr class="seperator col-md-4 col-sm-12 marg">

          </div>


          <div class="card-wrap row mx-auto my-5 flex-wrap">
  
            @foreach ($sights as $item)
  
              <div class="card col-md-4 col-sm-12 sights-card">
  
                <a href="{{ $item['link'] }}" class="card-link link" >
                  
                  <img src="{{ $item['img'] }}" alt="" class="card-img img">
  
                  <div class="card-content">
  
                    <h1 class="card-info-header sights-card-header m-2">{{ $item['head'] }}</h1>
                    
                    <p class="card-info-text m-2">{{ $item['par'] }}</p>
  
                  </div>
  
                </a>     
  
              </div>
  
            @endforeach
  
          </div>   
          <div>
            {{ $sights->links() }}
            </div>   
        
      </div>   
   
       
      
    
   

  </div>

  <div class="footer">
    @include('components.footer')
  </div>
</div>

@endsection