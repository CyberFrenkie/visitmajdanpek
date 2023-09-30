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
      <div class="container-fluid split-hero">
        <div class="main-head text-center">
          @foreach (__('sights.sights.djerdap') as $item)
            <h1>{{ $item['head'] }}</h1>
            @php $count = 0 @endphp
            @foreach ($item['text'] as $text)
              @if($count < 1)
                <p>{{ $text['par'] }}</p>
              @endif
              @php $count++ @endphp
            @endforeach
          @endforeach
        </div>
        <div class="split-card">
          <a href="/sights/mpek" class="card-link link">
            <img src="{{ asset('img/content/majdanpek/mpek2.jpg') }}" alt="" class="card-img img">
            <h1 class="split-heading sh1 px-0">{{ __('sights.sights.head1') }}</h1>
          </a>
        </div>
        <div class="split-card">
          <a href="/sights/dm-sights" class="card-link link">
            <img src="{{ asset('img/content/majdanpek/mpek2.jpg') }}" alt="" class="card-img img">
            <h1 class="split-heading sh2 px-0">{{ __('sights.sights.head2') }}</h1>
          </a>
        </div>
      </div>
    </div>

    {{-- Footer --}}
    <div class="footer">
      @include('components.footer')
    </div>

  </div>

@endsection