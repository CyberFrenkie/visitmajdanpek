@extends('layouts/layout')
@section('title', 'VisitMajdanpek - Znamenitosti')
@section('wrapper')

  <div class="wrapper container-fluid">
    
    {{-- Header --}}
    <div class="header">
      @include('partials/_navigation')

      <div id="custom-hero">
        @foreach ($sight as $item)
          <img src="{{asset($item->img)}}" alt="" class="img">

          <div class="container">       
            <h3>{{ $item->head }}</h1>                    
            <p>{{ $item->par }}</p>  
          </div>
        @endforeach
      </div>
    </div>

    {{-- Main section --}}
    <div id="middle">
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