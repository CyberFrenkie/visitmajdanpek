@extends('layouts/layout')
@section('title', 'VisitMajdanpek - Znamenitosti')
@section('wrapper')

  <button onclick="history.back()" class="readMore backBtn">Go Back</button>

  <div class="wrapper container-fluid">

    {{-- Header --}}
    <div class="header sight-header">
      @include('partials/_navigation')

      <div id="custom-hero">
        @foreach ($sight as $item)
          <img src="{{asset($item->img)}}" alt="" class="img">
          <div class="container">
            <h3>{{ $item->head }}</h1>
            <p id="disappearing-paragraph">{{ $item->par }}</p>
          </div>
        @endforeach
      </div>
    </div>

    {{-- Main section --}}
    <div id="middle">
      <div class="container">
        <div class="row sight">
          @foreach( $sight as $index => $content )
            <div class="d-flex align-items-center justify-content-evenly flex-column }}">
              <div class="row sight-content text-center">
                <div class="col-md-7 col-sm-12">
                  <h3 class="title col-12">{{ $content['head1'] }}</h3>
                  <p class="lead">{{ $content['par1'] }}</p>
                </div>
                <div class="col-md-5 col-sm-12">
                  <img src="{{asset($item->img1)}}" class="card-img img col-5"  alt="img{{ $item->id }}">
                </div>
              </div>

              <div class="row flex-row-reverse sight-content text-center">
                <div class="col-md-7 col-sm-12">
                  <h3 class="title col-12">{{ $content['head2'] }}</h3>
                  <p class="lead">{{ $content['par2'] }}</p>
                </div>
                <div class="col-md-5 col-sm-12">
                  <img src="{{asset($item->img2)}}" class="card-img img col-5" alt="img{{ $item->id }}">
                </div>
              </div>

              <div class="row sight-content text-center">
                <div class="col-md-7 col-sm-12">
                  <h3 class="title">{{ $content['head3'] }}</h3>
                  <p class="lead">{{ $content['par3'] }}</p>
                </div>
                <div class="img-wrap col-md-5 col-sm-12">
                  <img src="{{asset($item->img3)}}" class="card-img img" alt="img{{ $item->id }}">
                </div>
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