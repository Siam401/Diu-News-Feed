@include('frontend.layouts.header')

    <!-- Navbar Area -->
@include('frontend.layouts.navbar')

<!-- ##### Header Area End ##### -->

<!-- ##### Hero Area Start ##### -->
@include('frontend.layouts.breakingNews')
<!-- ##### Hero Area End ##### -->


<div class="slider-add-area">
    <div class="container">
        <div class="bd-example">
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel" style="margin: 5px 0 5px 0">
                <ol class="carousel-indicators">
                    @php
                        $dataSlide=0
                    @endphp
                    @foreach($slider as $row)
                    <li data-target="#carouselExampleCaptions" data-slide-to="{{ $dataSlide }}" @if($loop->first) class="active" @endif></li>
                        @php
                        $dataSlide++
                        @endphp
                    @endforeach
                </ol>
                <div class="carousel-inner" style="height: 500px;width: 100%">
                    @foreach($slider as $row)
                    <div class="carousel-item @if($loop->first) active @endif">
                        <img src="{{ asset("storage/images/$row->image")}}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5 style="color: #ee002d">{{ $row->title }}</h5>
                        </div>
                    </div>
                    @endforeach
                </div>
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</div>


<!-- ##### Featured Post Area Start ##### -->
<div class="featured-post-area">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-12">
                <div class="row">

                    <!-- Single Featured Post -->
                    <div class="col-12 col-lg-7">
                        <div class="single-blog-post featured-post">
                            <div class="post-thumb">
                                <a href="#"><img  style="height: 327px;width: 413px" src="{{ asset('/uploads/posts/'. $frontPostByCategory1->image) }}" alt=""></a>
                            </div>
                            <div class="post-data">
                               <a href="{{ route('categoryPost',$frontPostByCategory1->cat_id) }}" class="post-catagory">{{ $frontPostByCategory1->name }}</a>
                                <a href="{{ route('singlePost',$frontPostByCategory1->id) }}" class="post-title">
                                    <h6>{{ $frontPostByCategory1->title }}</h6>
                                </a>
                                <div class="post-meta">
                                    <p class="post-author">By <a href="#">{{ $frontPostByCategory1->author }}</a></p>
                                    <p class="post-excerp">{{ $frontPostByCategory1->content }}</p>
                                    <!-- Post Like & Post Comment -->
                                    {{--<div class="d-flex align-items-center">--}}
                                        {{--<a href="#" class="post-like"><img src="img/core-img/like.png" alt=""> <span>392</span></a>--}}
                                        {{--<a href="#" class="post-comment"><img src="img/core-img/chat.png" alt=""> <span>10</span></a>--}}
                                    {{--</div>--}}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-5">
                        <!-- Single Featured Post -->
                        <div class="single-blog-post featured-post-2">
                            <div class="post-thumb">
                                <a href="#"><img src="{{ asset('/uploads/posts/'. $frontPostByCategory2->image) }}" alt=""></a>
                            </div>
                            <div class="post-data">
                                <a href="{{ route('categoryPost',$frontPostByCategory2->cat_id) }}" class="post-catagory">{{ $frontPostByCategory2->name }}</a>
                                <div class="post-meta">
                                    <a href="{{ route('singlePost',$frontPostByCategory2->id) }}" class="post-title">
                                        <h6>{{ $frontPostByCategory2->title }}</h6>
                                    </a>
                                    <!-- Post Like & Post Comment -->
                                    {{--<div class="d-flex align-items-center">--}}
                                        {{--<a href="#" class="post-like"><img src="img/core-img/like.png" alt=""> <span>392</span></a>--}}
                                        {{--<a href="#" class="post-comment"><img src="img/core-img/chat.png" alt=""> <span>10</span></a>--}}
                                    {{--</div>--}}
                                </div>
                            </div>
                        </div>

                        <!-- Single Featured Post -->
                        <div class="single-blog-post featured-post-2">
                            <div class="post-thumb">
                                <a href="#"><img src="{{ asset('/uploads/posts/'. $frontPostByCategory3->image) }}" alt=""></a>
                            </div>
                            <div class="post-data">
                                <a href="{{ route('categoryPost',$frontPostByCategory3->cat_id) }}" class="post-catagory">{{ $frontPostByCategory3->name }}</a>
                                <div class="post-meta">
                                    <a href="{{ route('singlePost',$frontPostByCategory3->id) }}" class="post-title">
                                        <h6>{{ $frontPostByCategory3->title }}</h6>
                                    </a>
                                    <!-- Post Like & Post Comment -->
                                    {{--<div class="d-flex align-items-center">--}}
                                        {{--<a href="#" class="post-like"><img src="img/core-img/like.png" alt=""> <span>392</span></a>--}}
                                        {{--<a href="#" class="post-comment"><img src="img/core-img/chat.png" alt=""> <span>10</span></a>--}}
                                    {{--</div>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{--<div class="col-12 col-md-6 col-lg-4">--}}
                {{--<!-- Single Featured Post -->--}}
                {{--<div class="single-blog-post small-featured-post d-flex">--}}
                    {{--<div class="post-thumb">--}}
                        {{--<a href="#"><img src="img/bg-img/19.jpg" alt=""></a>--}}
                    {{--</div>--}}
                    {{--<div class="post-data">--}}
                        {{--<a href="#" class="post-catagory">Finance</a>--}}
                        {{--<div class="post-meta">--}}
                            {{--<a href="#" class="post-title">--}}
                                {{--<h6>Pellentesque mattis arcu massa, nec fringilla turpis eleifend id.</h6>--}}
                            {{--</a>--}}
                            {{--<p class="post-date"><span>7:00 AM</span> | <span>April 14</span></p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}

                {{--<!-- Single Featured Post -->--}}
                {{--<div class="single-blog-post small-featured-post d-flex">--}}
                    {{--<div class="post-thumb">--}}
                        {{--<a href="#"><img src="img/bg-img/20.jpg" alt=""></a>--}}
                    {{--</div>--}}
                    {{--<div class="post-data">--}}
                        {{--<a href="#" class="post-catagory">Politics</a>--}}
                        {{--<div class="post-meta">--}}
                            {{--<a href="#" class="post-title">--}}
                                {{--<h6>Sed a elit euismod augue semper congue sit amet ac sapien.</h6>--}}
                            {{--</a>--}}
                            {{--<p class="post-date"><span>7:00 AM</span> | <span>April 14</span></p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}

                {{--<!-- Single Featured Post -->--}}
                {{--<div class="single-blog-post small-featured-post d-flex">--}}
                    {{--<div class="post-thumb">--}}
                        {{--<a href="#"><img src="img/bg-img/21.jpg" alt=""></a>--}}
                    {{--</div>--}}
                    {{--<div class="post-data">--}}
                        {{--<a href="#" class="post-catagory">Health</a>--}}
                        {{--<div class="post-meta">--}}
                            {{--<a href="#" class="post-title">--}}
                                {{--<h6>Pellentesque mattis arcu massa, nec fringilla turpis eleifend id.</h6>--}}
                            {{--</a>--}}
                            {{--<p class="post-date"><span>7:00 AM</span> | <span>April 14</span></p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}

                {{--<!-- Single Featured Post -->--}}
                {{--<div class="single-blog-post small-featured-post d-flex">--}}
                    {{--<div class="post-thumb">--}}
                        {{--<a href="#"><img src="img/bg-img/22.jpg" alt=""></a>--}}
                    {{--</div>--}}
                    {{--<div class="post-data">--}}
                        {{--<a href="#" class="post-catagory">Finance</a>--}}
                        {{--<div class="post-meta">--}}
                            {{--<a href="#" class="post-title">--}}
                                {{--<h6>Augue semper congue sit amet ac sapien. Fusce consequat.</h6>--}}
                            {{--</a>--}}
                            {{--<p class="post-date"><span>7:00 AM</span> | <span>April 14</span></p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}

                {{--<!-- Single Featured Post -->--}}
                {{--<div class="single-blog-post small-featured-post d-flex">--}}
                    {{--<div class="post-thumb">--}}
                        {{--<a href="#"><img src="img/bg-img/23.jpg" alt=""></a>--}}
                    {{--</div>--}}
                    {{--<div class="post-data">--}}
                        {{--<a href="#" class="post-catagory">Travel</a>--}}
                        {{--<div class="post-meta">--}}
                            {{--<a href="#" class="post-title">--}}
                                {{--<h6>Pellentesque mattis arcu massa, nec fringilla turpis eleifend id.</h6>--}}
                            {{--</a>--}}
                            {{--<p class="post-date"><span>7:00 AM</span> | <span>April 14</span></p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}

                {{--<!-- Single Featured Post -->--}}
                {{--<div class="single-blog-post small-featured-post d-flex">--}}
                    {{--<div class="post-thumb">--}}
                        {{--<a href="#"><img src="img/bg-img/24.jpg" alt=""></a>--}}
                    {{--</div>--}}
                    {{--<div class="post-data">--}}
                        {{--<a href="#" class="post-catagory">Politics</a>--}}
                        {{--<div class="post-meta">--}}
                            {{--<a href="#" class="post-title">--}}
                                {{--<h6>Augue semper congue sit amet ac sapien. Fusce consequat.</h6>--}}
                            {{--</a>--}}
                            {{--<p class="post-date"><span>7:00 AM</span> | <span>April 14</span></p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        </div>
    </div>
</div>
<!-- ##### Featured Post Area End ##### -->

<!-- ##### Popular News Area Start ##### -->
<div class="popular-news-area section-padding-80-50">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="section-heading">
                    <h6>Popular News</h6>
                </div>

                <div class="row">

                    <!-- Single Post -->
                    @foreach($popular as $rows)
                    <div class="col-12 col-md-6">
                        <div class="single-blog-post style-3">
                            <div class="post-thumb">
                                <a href="#"><img style="height: 233px;width:350px" src="{{ asset('/uploads/posts/'. $rows->image) }}" alt=""></a>
                            </div>
                            <div class="post-data">
                                <a href="#" class="post-catagory">{{ $rows->cat->name }}</a>
                                <a href="{{ route('singlePost',$rows->id) }}" class="post-title">
                                    <h6>{{ $rows->title }}</h6>
                                </a>
                                {{--<div class="post-meta d-flex align-items-center">--}}
                                    {{--<a href="#" class="post-like"><img src="img/core-img/like.png" alt=""> <span>392</span></a>--}}
                                    {{--<a href="#" class="post-comment"><img src="img/core-img/chat.png" alt=""> <span>10</span></a>--}}
                                {{--</div>--}}
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="section-heading">
                    <h6>Info</h6>
                </div>
                <!-- Popular News Widget -->
                <div class="popular-news-widget mb-30">
                    <h3>6 Most Popular News</h3>
                    @php
                    $sl=1;
                    @endphp
                    <!-- Single Popular Blog -->
                    @foreach($popular as $rows)
                    <div class="single-popular-post">
                        <a href="{{ route('singlePost',$rows->id) }}">
                            <h6><span>{{ $sl++ }}.</span>{{ $rows->title }}</h6>
                        </a>
                        <p>{{ $rows->created_at }}</p>
                    </div>
                     @endforeach
                <!-- Newsletter Widget -->
                <div class="newsletter-widget">
                    <h4>Log In</h4>
                     @if(Session::has('message'))
                    <p class="alert {{ Session::get('alert-class', 'alert-danger') }}">{{ Session::get('message') }}</p>
                    @endif
                    <p>Log in for more information.</p>
                    <form action="{{ route('viewer.login_index') }}" method="post">
                        @csrf
                        <input type="email" name="email" placeholder="Email">
                        <input type="password" name="password" placeholder="password">
                        <button type="submit" class="btn w-100">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### Popular News Area End ##### -->

<!-- ##### Video Post Area Start ##### -->
{{--<div class="video-post-area bg-img bg-overlay" style="background-image: url(img/bg-img/bg1.jpg);">--}}
    {{--<div class="container">--}}
        {{--<div class="row justify-content-center">--}}
            {{--<!-- Single Video Post -->--}}
            {{--<div class="col-12 col-sm-6 col-md-4">--}}
                {{--<div class="single-video-post">--}}
                    {{--<img src="img/bg-img/video1.jpg" alt="">--}}
                    {{--<!-- Video Button -->--}}
                    {{--<div class="videobtn">--}}
                        {{--<a href="https://www.youtube.com/watch?v=5BQr-j3BBzU" class="videoPlayer"><i class="fa fa-play" aria-hidden="true"></i></a>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}

            {{--<!-- Single Video Post -->--}}
            {{--<div class="col-12 col-sm-6 col-md-4">--}}
                {{--<div class="single-video-post">--}}
                    {{--<img src="img/bg-img/video2.jpg" alt="">--}}
                    {{--<!-- Video Button -->--}}
                    {{--<div class="videobtn">--}}
                        {{--<a href="https://www.youtube.com/watch?v=5BQr-j3BBzU" class="videoPlayer"><i class="fa fa-play" aria-hidden="true"></i></a>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}

            {{--<!-- Single Video Post -->--}}
            {{--<div class="col-12 col-sm-6 col-md-4">--}}
                {{--<div class="single-video-post">--}}
                    {{--<img src="img/bg-img/video3.jpg" alt="">--}}
                    {{--<!-- Video Button -->--}}
                    {{--<div class="videobtn">--}}
                        {{--<a href="https://www.youtube.com/watch?v=5BQr-j3BBzU" class="videoPlayer"><i class="fa fa-play" aria-hidden="true"></i></a>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
<!-- ##### Video Post Area End ##### -->

<!-- ##### Editorial Post Area Start ##### -->
<div class="editors-pick-post-area section-padding-80-50">
    <div class="container">
        <div class="row">
            <!-- Editors Pick -->
            <div class="col-12 col-md-7 col-lg-9">
                <div class="section-heading">
                    <h6>Latest News</h6>
                </div>

                <div class="row">

                    <!-- Single Post -->
                    @foreach($latest as $rows)
                    <div class="col-12 col-lg-4">
                        <div class="single-blog-post">
                            <div class="post-thumb">
                                <a href="#"><img style="height: 233px;width:350px" src="{{ asset('/uploads/posts/'. $rows->image) }}" alt=""></a>
                            </div>
                            <div class="post-data">
                                <a href="{{ route('singlePost',$rows->id) }}" class="post-title">
                                    <h6>{{ $rows->title }}</h6>
                                </a>
                                <div class="post-meta">
                                    <div class="post-date"><a href="#">{{ $rows->created_at->format('d M,Y') }}</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!-- Single Post -->

                </div>
            </div>

            <!-- World News -->
            <div class="col-12 col-md-5 col-lg-3">
                <div class="section-heading">
                    <h6>World News</h6>
                </div>

                <!-- Single Post -->
                @foreach($frontPostByCategory4 as $rows)
                <div class="single-blog-post style-2">
                    <div class="post-thumb">
                        <a href="#"><img style="height: 233px;width:350px" src="{{ asset('/uploads/posts/'. $rows->image) }}" alt=""></a>
                    </div>
                    <div class="post-data">
                        <a href="{{ route('singlePost',$rows->id) }}" class="post-title">
                            <h6>{{ $rows->title }}</h6>
                        </a>
                        <div class="post-meta">
                            <div class="post-date"><a href="#">{{ $rows->created_at }}</a></div>
                        </div>
                    </div>
                </div>
                @endforeach


            </div>
        </div>
    </div>
</div>
<!-- ##### Editorial Post Area End ##### -->

<!-- ##### Footer Add Area Start ##### -->
<div class="footer-add-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="footer-add">
                    <a href="#"><img src="{{ asset('ui/frontend/img/bg-img/footer-add.gif') }}" alt=""></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### Footer Add Area End ##### -->
@include('frontend.layouts.footer')

<!-- ##### Footer Area Start ##### -->
