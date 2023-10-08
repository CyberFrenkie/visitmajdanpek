@extends('layouts/layout')
@section('title', 'VisitMajdanpek - Znamenitosti')
@section('wrapper')

  <button onclick="history.back()" class="backBtn"><i class="fa-solid fa-arrow-left"></i>{{ __('home.backBtn') }}</button>

  <div class="wrapper container-fluid">

    {{-- Header --}}
    <div class="header">
      @include('partials/_navigation')
    </div>

    {{-- Main section --}}
    <div class="main">
      
    </div>

    {{-- Footer --}}
    <div class="footer">
      @include('components.footer')
    </div>    
  </div>
@endsection