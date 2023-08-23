@extends('layouts/layout')

@section('title', 'VisitMajdanpek - Pocetna')

@section('wrapper')

<div class="header">
    @include('components.header')
</div>

<div class="main">
    @include('components.main')
</div>

    @include('components.footer')

@endsection