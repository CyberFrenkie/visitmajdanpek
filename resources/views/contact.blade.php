@extends('layouts/layout')
@section('title', 'VisitMajdanpek - Kontakt')
@section('wrapper')

  <div class="wrapper container-fluid contact-wrapper">

    {{-- Header --}}
    <div class="header">
      @include('partials/_navigation')
    </div>

    {{-- Main section --}}
    <div class="main-contact">

      {{-- Success alert --}}
      @if(session('success'))
        <div class="alert alert-success">
          {{ session('success') }}
        </div>
      @endif

      <div class="contact-bg-image img-fluid">
        <div class="container">
          <div class="row justify-content-center align-items-center">
            <div class="col-12 text-center z-2">
              <h2 class="text-light contact-header-fs">{{ trans('contact.contact-us-header-text') }}</h2>
              <p class="text-light contact-fs">{{ trans('contact.contact-us-text') }}</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="contact-form">
      <div class="container">
        <div class="row align-items-center justify-content-center">
        {{-- Contact form --}}
        <form class="{{ __('contact.form-class') }} z-2 d-flex flex-column justify-content-center" method="post" action="{{ route('submit.contact.form') }}">
            @csrf
            {{-- Form header --}}
            <div class="contact-us text-center my-4">
              <h3 class="{{ __('contact.contact-us-header-class') }}">{{ __('contact.contact-us-header-text') }}</h3>
            </div>
            
            {{-- Form fields --}}
            <div class="row">
              @foreach(__('contact.fields') as $field => $data)
                <div class="form-group mb-2">
                  @if($field === 'inquiry')
                    <textarea class="{{ $data['class'] }}" id="{{ $field }}" rows="4" placeholder="{{ $data['placeholder'] ?? '' }}" name="{{ $data['name'] }}"></textarea>
                  @else
                    <input type="{{ $field === 'email' ? 'email' : 'text' }}" class="{{ $data['class'] }}" id="{{ $field }}" placeholder="{{ $data['placeholder'] ?? '' }}" name="{{ $data['name'] }}">
                  @endif
                </div>
              @endforeach
            </div>

            {{-- Submit button --}}
            <div class="text-center">
              <button type="submit" class="{{ __('contact.btn-class') }} btn mb-3">{{ __('contact.send') }}</button>
            </div> 
          </form>
        </div>
      </div>
    </div>

    <div class="visitmajdanpekemail">
      <div class="container text-center contact-us-custom-border">
        <p class="default contact-us-email-header">{!! trans('contact.contact-us-email') !!}</p>
      </div>
    </div>

    {{-- Footer --}}
    <div class="footer">
      @include('components.footer')
    </div>

  </div>
@endsection