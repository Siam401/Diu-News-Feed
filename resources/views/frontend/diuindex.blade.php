@include('frontend.layouts.header')

<!-- Navbar Area -->
@include('frontend.layouts.navbar')

<!-- ##### Header Area End ##### -->



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
                                <a href="{{ route('categoryPost',$frontPostByCategory1->diucat_id) }}" class="post-catagory">{{ $frontPostByCategory1->name }}</a>
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
                                <a href="{{ route('categoryPost',$frontPostByCategory2->diucat_id) }}" class="post-catagory">{{ $frontPostByCategory2->name }}</a>
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
                                <a href="{{ route('categoryPost',$frontPostByCategory3->diucat_id) }}" class="post-catagory">{{ $frontPostByCategory3->name }}</a>
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
                                    <a href="#" class="post-catagory">{{ $rows->diucat->name }}</a>
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
                    <h3>Diu News</h3>
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


    <!-- ##### Editorial Post Area Start ##### -->
    <div class="editors-pick-post-area section-padding-80-50">
        <div class="container">
            <div class="row">
                <!-- Editors Pick -->
                <div class="col-12 col-md-7 col-lg-12">
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
