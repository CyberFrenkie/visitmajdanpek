@extends('layouts/layout')

@section('wrapper')

<h1 class="text-center">{{ __('home.welcome') }}</h1>

<div class="header">
    @include('components.header')
</div>

<div class="main">
    @include('components.main')
</div>


<div class="footer">
    @include('components.footer')
</div>




@endsection



