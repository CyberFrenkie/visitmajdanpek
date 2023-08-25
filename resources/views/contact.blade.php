@extends('layouts/layout')

@section('title', 'VisitMajdanpek - Kontakt')

@section('wrapper')

<div class="wrapper container-fluid">
  <div class="header">
    @include('partials/_navigation')
  </div>
</div>

  <div class="main mt-2">
    <div class="contact-bg-image img-fluid"></div>
      <div class="container">
        <div class="row justify-content-center">
            <form class="{{ trans('contact.form-class') }} z-2 d-flex flex-column justify-content-center" method="post">
                <div class="contact-us text-center my-4">
                    <h3 class="{{ trans('contact.contact-us-header-class') }}">{{ trans('contact.contact-us-header-text') }}</h3>
                </div>
                  <div class="row">
                @foreach(__('contact.fields') as $field => $data)
                  <div class="form-group col-md-6 col-lg-6 col-xl-12">
                    <label for="{{ $field }}" class="my-1">{{ $data['label'] }}</label>
                    @if($field === 'inquiry')
                    <textarea class="{{ $data['class'] }}" id="{{ $field }}" rows="3" placeholder="{{ $data['placeholder'] ?? '' }}" name="{{ $data['name'] }}"></textarea>
                    @else
                    <input type="{{ $field === 'email' ? 'email' : 'text' }}" class="{{ $data['class'] }}" id="{{ $field }}" placeholder="{{ $data['placeholder'] ?? '' }}" name="{{ $data['name'] }}">
                    @endif
                  </div>
                  @endforeach
                  </div>
                  <div class="text-center">
                  <button type="submit" class="{{ trans('contact.btn-class') }} btn mb-3">{{ __('contact.send') }}</button>
                  </div> 
                </div>
              </form>
            </div>
          </div>
        </div>
    </div>
  <div class="footer footer-margin">
    @include('components.footer')
  </div>
</div>

@endsection