@extends('layouts/layout')
@section('title', 'VisitMajdanpek - Znamenitosti')
@section('wrapper')

  <button onclick="history.back()" class="readMore backBtn">Go Back</button>

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