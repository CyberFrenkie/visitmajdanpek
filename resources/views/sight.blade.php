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
        <div class="row mx-auto my-5 flex-row">
          @foreach ($sight as $item)    
            <div class=" col-md-12 col-sm-12">                  
              <img src="{{asset($item->img)}}" alt="" class="card-img img">  
              <div class="card-content">  
                <h1 class="card-info-header sights-card-header m-2">{{ $item->head }}</h1>                    
                <p class="card-info-text m-2">{{ $item->par }}</p>  
              </div> 
            </div>
          @endforeach  
        </div>           
      </div>   
    </div>
    <div class="middle">
      <div class="container">
        <div class="row">
          @foreach( $sight as $index => $content )
          <div class="d-flex  align-items-center justify-content-evenly flex-column-reverse {{ $index % 2 == 0 ? 'flex-lg-row-reverse' : 'flex-lg-row' }}">
            <div class="col-lg-7 col-md-12 text-lg-start text-center">
              <h3 class="title">{{ $content['head'] }}</h3>
                <p class="lead">{{ $content['par'] }}</p>
            </div>
            
            <div class="col-lg-4 col-md-12 me-2 mb-2 mb-sm-2">
              <a href="/"><img src="{{asset($item->img)}}" class="card-img img"></a>
            </div>
          </div>
        </div>
      @endforeach
      </div>
      </div>
    </div>

    {{-- Footer --}}
    <div class="footer">
      @include('components.custom-footer')
    </div>

  </div>

@endsection