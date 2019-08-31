<div class="hero-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12">
                <!-- Breaking News Widget -->
                <div class="breaking-news-area d-flex align-items-center">
                    <div class="news-title">
                        <p>Breaking News</p>
                    </div>
                    <div id="breakingNewsTicker" class="ticker">
                        <ul>
                            <li><a href="{{ route('singlePost',$brknews->id) }}">{{ $brknews->title }}</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Breaking News Widget -->
                <div class="breaking-news-area d-flex align-items-center mt-15">
                    <div class="news-title title2">
                        <p>International</p>
                    </div>
                    <div id="internationalTicker" class="ticker">
                        <ul>
                            @foreach($inter_breaking_posts as $rows)
                            <li><a href="{{ route('singlePost',$rows->id) }}">{{ $rows->title }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Banner -->
            {{--<div class="col-12 col-lg-4">--}}
            {{--<div class="hero-add">--}}
            {{--<a href="#"><img src="img/bg-img/hero-add.gif" alt=""></a>--}}
            {{--</div>--}}
            {{--</div>--}}
        </div>
    </div>
</div>