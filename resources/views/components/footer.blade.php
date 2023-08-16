<footer class="mt-5">

    <div class="container">
        <div class="row">
            <div class="col-lg-3 mt-4">
            <a href="/"> 
                <p class="{{ trans('footer.far-left.name1-class') }}"> {{ trans('footer.far-left.name1') }} </p>
                <p class="{{ trans('footer.far-left.name2-class') }}"> {{ trans('footer.far-left.name2') }} </p>
            </a> 
                <p class="{{ trans('footer.far-left.copyright-class') }}"> {{ trans('footer.far-left.copyright') }}</p>
            </div>
            <div class="row col-lg-6 pl-0">
            <div class="col-lg-4 col-md-6 col-sm-12 mt-4 me-4">
                <h3>{{ trans('footer.left-title') }}</h3>
                <ul>
                @foreach (trans('footer-list1') as $list)    
                    <li>
                        <a href="{{ $list['url'] }}" class="{{ $list['class'] }}">{{ $list['text'] }}</a>
                    </li>
                @endforeach    
                </ul>
                <ul>
            </div>
            <div class="col-lg-4 col-md-6 mt-4 col-sm-12">
                <h3>{{ trans('footer.right-title') }}</h3>
               <ul> 
                @foreach (trans('footer-list2') as $list)    
                    <li class="nav-item">
                        <a href="{{ $list['url'] }}" class="{{ $list['class'] }}">{{ $list['text'] }}</a>
                    </li>
                @endforeach    
                </ul>
            </div>
            </div>
            <div class="col-lg-3  mt-4">
                    <h2>{{ trans('footer.far-right-title') }}</h2>
                    <ul class="d-flex align-items-center">
                    @foreach(trans('footer-social') as $social)    
                        <li class="{{ $social['class'] }}">
                            <a href="{{ $social['url'] }}">
                                <i class="{{ $social['icon'] }}"></i>
                            </a>    
                        </li>
                    @endforeach    
                    </ul>
            </div>
        </div>

</footer>
</div>

