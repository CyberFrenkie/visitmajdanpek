<footer class="my-5">

    <div class="container">
        <hr class="col-md-4 col-sm-12 px-0">
        <div class="row">
            <div class="col-lg-3 my-4">
            <a href=" {{ trans('footer.far-left-link') }} " class=" {{ trans('footer.default-class') }} "> 
                <p class="{{ trans('footer.upper-text-class') }} {{ trans('footer.default-class') }}"> {{ trans('footer.upper-text') }} </p>
                <p class="{{ trans('footer.bottom-text-class') }} {{ trans('footer.default-class') }}"> {{ trans('footer.bottom-text') }} </p>
            </a> 
                <p class="{{ trans('footer.copyright-class') }} {{ trans('footer.default-class') }}"> {{ trans('footer.copyright') }}</p>
            </div>
            <div class="row col-lg-6  my-4 justify-center cal-pl">
            <div class="col-lg-4 col-md-4 col-sm-12">
                <h3 class="{{ trans('footer.list-title-class') }}">{{ trans('footer.left-title') }}</h3>
                <ul class="{{ trans('footer.default-class') }}"> 
                @foreach (trans('footer.left-list') as $list)    
                        @foreach ( ($list['leftListValues']) as $listValue)
                        <li>
                            <a href="{{ $listValue['url'] }}" class="{{ $listValue['class'] }} {{ trans('footer.default-class') }}">{{ $listValue['text'] }}</a>
                        </li>
                        @endforeach
                @endforeach    
                </ul>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 mt">
                <h3 class="{{ trans('footer.list-title-class') }}">{{ trans('footer.right-title') }}</h3>
               <ul class="{{ trans('footer.default-class') }}"> 
                @foreach (trans('footer.right-list') as $list)    
                    @foreach ( ($list['rightListValues']) as $listValue)
                        <li>
                            <a href="{{ $listValue['url'] }}" class="{{ $listValue['class'] }} {{ trans('footer.default-class') }}">{{ $listValue['text'] }}</a>
                        </li>
                    @endforeach
                @endforeach 
                </ul>
            </div>
            </div>
            <div class="col-lg-3  my-4">
                    <h2 class="{{ trans('footer.social-class') }}">{{ trans('footer.social-title') }}</h2>
                    <ul class="d-flex align-items-center justify-center {{ trans('footer.default-class') }}">
                    @foreach(trans('footer.social') as $social)
                        @foreach ( ($social['socialValues']) as $socialValue)    
                        <li class="{{ $socialValue['class'] }} pl10 ">
                            <a href="{{ $socialValue['url'] }}" class="{{ trans('footer.default-class') }}">
                                <i class="{{ $socialValue['icon'] }}"></i>
                            </a>    
                        </li>
                        @endforeach
                    @endforeach    
                    </ul>
            </div>
        </div>
    </div>    

</footer>


