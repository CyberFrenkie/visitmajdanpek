<footer class="container-xl custom-footer mt-5">
    <hr class="seperator col-md-4 col-sm-12">
    <div class="container">
        <div class="row ps-3">
            <div class="col-lg-8 d-flex col-md-12 p-0 flex-column mbms-2">
            <ul class="d-flex default nav-tabs flex-d-column mb-2" role="tablist">
            @foreach(trans('custom-footer.list1') as $list)
                @foreach(($list['list1Values']) as $listValue)
                    <li class="mr-5"><i class="{{ $listValue['icon'] }} custom-footer-font-size"></i><button class="{{ trans('footer.default-class') }} custom-footer-font-size green-hover fw-extra-medium" type="button" data-bs-toggle="tab" data-bs-target="{{ $listValue['target'] }}" role="tab">{{ $listValue['text'] }}</button></li>
                @endforeach
            @endforeach
            </ul>
            <ul class="d-flex flex-d-column default mb-3">
                @foreach( trans('custom-footer.list2') as $list)
                    @foreach( ($list['list2Values']) as $listValue)
                    <li class="@if ($loop -> first ) mr-5 second-list @elseif ( $loop -> last ) me-2 @else mr-4 @endif "><p class="{{ trans('footer.default-class') }} custom-footer-font-size fw-extra-medium pr-26"><i class="{{ $listValue['icon'] }}"></i>{{ $listValue['text'] }}</p></li>
                    @endforeach
                @endforeach
                </ul>      
            </div>
            <div class="col-lg-4 col-md-12 mb-3">
                <div class="box">
                 <ul class="default">
                    <li>   
                    <p class="text-center fw-extra-medium custom-footer-font-size">Social</p>
                    </li>
                    <li> 
                    <ul class="default d-flex text-center justify-content-evenly">
                    @foreach(trans('custom-footer.social') as $social)
                        @foreach ( ($social['socialValues']) as $socialValue)    
                        <li class="pl10 me-2">
                            <a href="{{ $socialValue['url'] }}" target="_blank" class="{{ trans('footer.default-class') }}">
                                <i class="{{ $socialValue['icon'] }} "></i>
                            </a>    
                        </li>
                        @endforeach
                    @endforeach 
                    </ul>
                    </li>
                </ul>    
                </div>
            </div>
        </div>
        <div class="tab-content my-5">
            <div class="tab-pane fade my-5" id="location" role="tabpanel" tabindex="0">
                <p class="text-center custom-footer-font-size">{{ trans('custom-footer.locations') }}</p>
                <div class="container d-flex justify-content-center pb-2">
               <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5224.395476590407!2d21.95219135969145!3d44.440917724553586!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47516f327533d39d%3A0xa001196a77495ff9!2z0KDQsNGY0LrQvtCy0LAg0L_QtdGb0LjQvdCw!5e0!3m2!1ssr!2srs!4v1695993075352!5m2!1ssr!2srs" width="1024" height="600" style="border:0;" allowfullscreen="" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <p class="text-center custom-footer-font-size">{!! trans('custom-footer.Informations') !!}</p>
            </div>
            <div class="tab-pane fade" id="car-route" role="tabpanel" tabindex="0">
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
            <div class="tab-pane fade" id="walk-route" role="tabpanel" tabindex="0">
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
    <div id="carouselExampleControls" class="carousel slide pl-15 pb-4" data-bs-ride="true">
        <div class="carousel-inner mb-3">
            <div class="carousel-item active">
                <div class="cards-wrapper">
                    @foreach( trans('custom-footer.slider') as $slider)
                        @foreach( ($slider['sliderValues1']) as $sliderValue1 )
                            <div class="card">
                                <div class="image-wrapper">
                                    <a href="{{ $sliderValue1['url'] }}" class="d-flex align-items-center justify-content-center">
                                        <img class="card-img-top img" src="{{ $sliderValue1['src'] }}" alt="Card Image">
                                    </a>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">{{ $sliderValue1['header'] }}</h5>
                                    <p class="card-text">{{ $sliderValue1['text'] }}</p>
                                </div>
                            </div>
                        @endforeach
                    @endforeach
                </div>
            </div>
            <div class="carousel-item">
                <div class="cards-wrapper">
                    @foreach( trans('custom-footer.slider') as $slider)
                        @foreach( ($slider['sliderValues2']) as $sliderValue2 )
                            <div class="card">
                                <div class="image-wrapper">
                                    <a href="{{ $sliderValue1['url'] }}" class="d-flex align-items-center justify-content-center">
                                        <img class="card-img-top img" src="{{ $sliderValue1['src'] }}" alt="Card Image">
                                    </a>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">{{ $sliderValue2['header'] }}</h5>
                                    <p class="card-text">{{ $sliderValue2['text'] }}</p>
                                </div>
                            </div>
                        @endforeach
                    @endforeach
                </div>
            </div>
            <div class="carousel-item">
                <div class="cards-wrapper">
                    @foreach( trans('custom-footer.slider') as $slider)
                        @foreach( ($slider['sliderValues3']) as $sliderValue3 )
                            <div class="card">
                                <div class="image-wrapper">
                                    <a href="{{ $sliderValue3['url'] }}" class="d-flex align-items-center justify-content-center">
                                        <img class="card-img-top img" src="{{ $sliderValue2['src'] }}" alt="Card Image">
                                    </a>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">{{ $sliderValue3['header'] }}</h5>
                                    <p class="card-text">{{ $sliderValue3['text'] }}</p>
                                </div>
                            </div>
                        @endforeach
                    @endforeach
                </div>
            </div>
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
    <div id="fullscreen"></div>
</footer>