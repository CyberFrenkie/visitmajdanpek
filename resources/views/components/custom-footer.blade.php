<footer class="container-xl custom-footer mt-5">
    <hr class="seperator col-md-4 col-sm-12">
    <div class="container">
        <div class="row ps-3">
            <div class="col-lg-8 d-flex justify-content-between col-md-12 p-0 justify-evenly margin-b flex-d-column">
                <ul class="default mr-6">
                @foreach(trans('custom-footer.list1') as $list)
                    @foreach( ($list['list1Values']) as $listValue)
                    <li class="custom-footer-margin">
                        @if($loop->last)
                        <p class="{{ trans('footer.default-class') }} custom-footer-font-size fw-extra-medium pr-20"><i class="{{ $listValue['icon'] }}"></i>{{ $listValue['text'] }}</p>
                        @else
                        <i class="{{ $listValue['icon'] }} custom-footer-font-size"></i><a href="{{ $listValue['url'] }}" target="_blank" class="{{ trans('footer.default-class') }} custom-footer-font-size green-hover">{{ $listValue['text'] }}</a>
                        @endif
                    </li>
                    @endforeach
                @endforeach    
                </ul>
                <ul class="default mr-6">
                @foreach(trans('custom-footer.list2') as $list)
                    @foreach( ($list['list2Values']) as $listValue)
                    <li class="custom-footer-margin">
                        @if($loop->last)
                        <p class="{{ trans('footer.default-class') }} custom-footer-font-size fw-extra-medium pr-26"><i class="{{ $listValue['icon'] }}"></i>{{ $listValue['text'] }}</p>
                        @else
                        <i class="{{ $listValue['icon'] }} custom-footer-font-size"></i><a href="{{ $listValue['url'] }}" target="_blank" class="{{ trans('footer.default-class') }} custom-footer-font-size green-hover">{{ $listValue['text'] }}</a>
                        @endif
                    </li>
                    @endforeach
                @endforeach 
                </ul>
                <ul class="default">
                @foreach(trans('custom-footer.list3') as $list)
                    @foreach( ($list['list3Values']) as $listValue)
                    <li class="custom-footer-margin">
                        @if($loop->last)
                        <p class="{{ trans('footer.default-class') }} custom-footer-font-size fw-extra-medium"><i class="{{ $listValue['icon'] }}"></i>{{ $listValue['text'] }}</p>
                        @else
                        <i class="{{ $listValue['icon'] }} custom-footer-font-size"></i><a href="{{ $listValue['url'] }}" target="_blank" class="{{ trans('footer.default-class') }} custom-footer-font-size green-hover">{{ $listValue['text'] }}</a>
                        @endif
                    </li>
                    @endforeach
                @endforeach 
                </ul>
            </div>
            <div class="col-lg-4 col-md-12 mb-3">
                <div class="box">
                 <ul class="default ">
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
</footer>