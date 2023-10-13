<footer class="container-xl custom-footer mt-5">
    <hr class="seperator col-md-4 col-sm-12">
    <div class="container">
        <div class="row ps-3">
            <div class="col-lg-12 d-flex align-left p-0 flex-d-column">
            <ul class=" default nav-tabs gap-align mb-2" role="tablist">
            @foreach(trans('custom-footer.list1') as $list)
                @foreach(($list['list1Values']) as $listValue)
                    <li><button class="{{ trans('footer.default-class') }} custom-footer-font-size green-hover readMore fw-extra-medium" type="button" data-bs-toggle="tab" data-bs-target="{{ $listValue['target'] }}" role="tab"><i class="{{ $listValue['icon'] }} custom-footer-font-size"></i>{{ $listValue['text'] }} <i class="{{ trans('custom-footer.arrow-icon') }} mt-2"></i></button></li>
                @endforeach
            @endforeach
            </ul>
            @php
                $currentPageId=request()->segment(2);
            @endphp    
            <ul class="gap-align no-flex default">
                @foreach( trans('custom-footer.list2.content') as $list)
                    @foreach( ($list['list2Values']) as $listValue)
                        @if(   $list['id'] == $currentPageId)
                            <li class="mbm">
                                <p class="{{ trans('footer.default-class') }} custom-footer-font-size fw-extra-medium">
                                    <i class="{{ $listValue['icon'] }}"></i> {{ $listValue['inner-text'] }}
                                </p>
                            </li>
                        @endif
                    @endforeach
                @endforeach
                </ul>      
            </div>
        </div>
        <div class="tab-content my-5">
            @foreach(trans('custom-footer.maps.content') as $mapContent)
                @foreach(($mapContent['location']) as $location)
                    @if($mapContent['id'] == $currentPageId)
                        <div class="tab-pane fade-transition fade my-5" id="location" role="tabpanel" tabindex="0">
                            <p class="text-center custom-footer-font-size">{{ trans('custom-footer.locations') }}</p>
                            <div class="container d-flex justify-content-center pb-2">
                                <iframe src="{{ $location['src'] }}" width="1024" height="600" style="border:0;" allowfullscreen="" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                            <p class="text-center custom-footer-font-size"><a href="{{ $location['src'] }}" target="_blank" class="default">{{ trans('custom-footer.information') }}<i class="move-arrow fa-solid fa-arrow-right ms-2"></i></a></p>
                        </div>
                    @endif
                @endforeach
            @endforeach
            @foreach(trans('custom-footer.maps.content') as $mapContent)
                @foreach(($mapContent['car-route']) as $route)
                    @if($mapContent['id'] == $currentPageId)
                        <div class="tab-pane fade-transition fade" id="car-route" role="tabpanel" tabindex="0">
                            <div class="d-flex flex-d-column justify-content-evenly">
                                <div class="me-3 mr-0">
                                    <p class="text-center custom-footer-font-size">{{ trans('custom-footer.BG-pravac') }}</p>
                                    <div class="d-flex justify-content-center align-items-center pb-2">
                                        <div class="google-map">
                                            <div id="google-maps-display" class="google-map-overlay">
                                                <iframe style="height:100%;width:100%;border:0;" frameborder="0" src="{{ $route['src1'] }}"></iframe>
                                            </div>
                                        </div>
                                    </div>
                                <p class="text-center custom-footer-font-size"><a href="{{ $route['src1'] }}" target="_blank" class="default">Za vise informacija klikni OVDE<i class="move-arrow fa-solid fa-arrow-right ms-2"></i></a></p>
                            </div>
                            <div>
                                <p class="text-center custom-footer-font-size">{{ trans('custom-footer.NG-pravac') }}</p>
                                    <div class="d-flex justify-content-center align-items-center">
                                        <div class="google-map">
                                            <div id="google-maps-display" class="google-map-overlay">
                                                <iframe style="height:100%;width:100%;border:0;" frameborder="0" src="{{ $route['src2'] }}"></iframe>
                                            </div>
                                        </div>
                                    </div>
                                <p class="text-center custom-footer-font-size"><a href="{{ $route['src2'] }}" target="_blank" class="default">Za vise informacija klikni OVDE<i class="move-arrow fa-solid fa-arrow-right ms-2"></i></a></p>
                            </div>
                        </div>
                        </div>
                        @endif
                @endforeach
            @endforeach
            {{-- 
            <div class="tab-pane fade-transition fade" id="walk-route" role="tabpanel" tabindex="0">
               <div class="d-flex flex-d-column justify-content-evenly">
                    <div class="me-3 mr-0">
                        <p class="text-center custom-footer-font-size">{{ trans('custom-footer.BG-pravac') }}</p>
                        <div class="d-flex justify-content-center align-items-center pb-2">
                            <div class="google-map">
                                <div id="google-maps-display" class="google-map-overlay">
                                    <iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/directions?origin=Belgrade,+Serbia&destination=Rajko's+Cave,+Капетанска,+Majdanpek,+Serbia&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"></iframe>
                                </div>
                            </div>
                        </div>
                        <p class="text-center custom-footer-font-size">{!! trans('custom-footer.Informations') !!}</p>
                    </div>
                    <div>
                        <p class="text-center custom-footer-font-size">{{ trans('custom-footer.NG-pravac') }}</p>
                        <div class="d-flex justify-content-center align-items-center">
                            <div class="google-map">
                                <div id="google-maps-display" class="google-map-overlay">
                                    <iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/directions?origin=Negotin,+Serbia&destination=Rajko's+Cave,+Капетанска,+Majdanpek,+Serbia&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"></iframe>
                                </div>
                            </div>
                        </div>
                        <p class="text-center custom-footer-font-size">{!! trans('custom-footer.Informations') !!}</p>
                    </div>
                </div>
            </div>
            --}}
        </div>
    </div>    
    <div id="carouselExampleControls" class="carousel slide pb-4" data-bs-ride="carousel">
        <div class="carousel-inner mb-3">
            @foreach( trans('custom-footer.slider.content') as $slider)
               @foreach( $slider['sliderValues'] as $sliderValue)
                    @if($slider['id'] == $currentPageId)
                    <div class="carousel-item @if($loop -> first) active @else @endif" data-bs-interval="4000">
                        <img src="{{ asset($sliderValue['src']) }}" class="slider-image">
                    </div>
                    @endif
                 @endforeach
            @endforeach                              
        </div>
        <div class="arrow-position">
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true">
                    <i class="fa-solid fa-chevron-left"></i>
                </span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true">
                    <i class="fa-solid fa-chevron-right"></i>
                </span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>  
    </div>
    <div id="fullscreen">
        <img src="" alt="" class="fullscreen-image">
        <button id="closeButton" class="fullscreen-button">X</button>
    </div>
</footer>
