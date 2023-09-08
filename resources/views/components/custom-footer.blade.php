<footer class="custom-footer mt-5">
    <hr class="seperator col-md-4 col-sm-12">
    <div class="container">
        <div class="row">
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
            <div class="col-lg-4 col-md-12">
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
        <div class="my-5">
        <div class="row">
            <div id="scroller" class="d-flex flex-row flex-nowrap overflow-auto mb-5 custom-scrollbar">
            @foreach(trans('custom-footer.slider') as $slider)
                @foreach( ($slider['sliderValues']) as $sliderValue)
                <div class="card card-block card-slider mx-2">
                    <a href="{{ $sliderValue['url'] }}">
                    <img src="{{ $sliderValue['src'] }}" class="img-fluid card-img img"></img>
                    </a>
                    <h3 class="text-center">{{ $sliderValue['text'] }}</h3>
                </div>
                @endforeach
            @endforeach
            </div>
        </div>
        </div>
</footer>