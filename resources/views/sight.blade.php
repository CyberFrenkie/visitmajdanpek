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
        <div class="row mx-auto my-5 flex-wrap">  
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

    {{-- Footer --}}
    <div class="footer">
      @include('components.footer')
    </div>

  </div>

@endsection