@extends('layouts/layout')

@section('title', 'VisitMajdanpek - Kontakt')

@section('wrapper')

<div class="wrapper container-fluid">
  <div class="header">
    @include('partials/_navigation')
  </div>

  <div class="main">
    <div class="contact row">
        <div class="contact-bg col-md-12">
          <img src="{{ __('contact.header.img') }}" alt="" class="contact-img">
          <div class="contact-header col-md-12 col-sm-12">
          <h1 class="contact-header-title">{{ __('contact.header.heading') }}</h1>
                <form class="col-12 col-md-8 col-lg-6 col-sm-12 text-white">
                  @foreach(__('contact.fields') as $field => $data)
                  <div class="form-group">
                    <label for="{{ $field }}">{{ $data['label'] }}</label>
                    @if($field === 'inquiry')
                    <textarea class="form-control" id="{{ $field }}" rows="3" placeholder="{{ $data['placeholder'] ?? '' }}"></textarea>
                    @else
                    <input type="{{ $field === 'email' ? 'email' : 'text' }}" class="form-control" id="{{ $field }}" placeholder="{{ $data['placeholder'] ?? '' }}">
                    @endif
                  </div>
                  @endforeach
                  <button type="submit" class="btn btn-primary send-button">{{ __('contact.send') }}</button> 
                </div>
              </form>
            </div>
          </div>
  </div>

  <div class="footer">
    @include('components.footer')
  </div>
</div>

@endsection