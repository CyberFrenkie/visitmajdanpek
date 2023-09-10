@extends('layouts/layout')
@section('title', 'VisitMajdanpek - Pocetna')
@section('wrapper')

    <div class="home-wrapper container-fluid">
        <div class="header">
            @include('components.header')
        </div>

        <div class="main">
            @include('components.main')

            @yield('news')
        </div>

        <div class="footer">
            @include('components.footer')
        </div>
    </div>
    
@endsection