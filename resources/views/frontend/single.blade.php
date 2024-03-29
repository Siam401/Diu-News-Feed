@include('frontend.layouts.header')

<!-- Navbar Area -->
@include('frontend.layouts.navbar')

<!-- ##### Header Area End ##### -->

<!-- ##### Hero Area Start ##### -->
@include('frontend.layouts.breakingNews')
<!-- ##### Hero Area End ##### -->


<div class="blog-area section-padding-0-80">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="blog-posts-area">

                    <!-- Single Featured Post -->
                    <div class="single-blog-post featured-post single-post">
                        <div class="post-thumb">
                            <a href="#"><img style="height:387px ;width:750px" src="{{ asset('/uploads/posts/'. $singlepost->image) }}" alt=""></a>
                        </div>
                        <div class="post-data">
                            {{--<a href="#" class="post-catagory">Finance</a>--}}
                            <a href="#" class="post-title">
                                <h6>{{ $singlepost->title }}</h6>
                            </a>
                            <div class="post-meta">
                                <p class="post-author">By <a href="#">{{ $singlepost->author }}</a></p>
                                <p>{{ $singlepost->content }}</p>
                                <div class="newspaper-post-like d-flex align-items-center justify-content-between">
                                    <!-- Tags -->
                                    <div class="newspaper-tags d-flex">
                                        <span>Tags:</span>
                                        <ul class="d-flex">
                                            <li><a href="#">{{ $singlepost->tag }},</a></li>

                                        </ul>
                                    </div>

                                    <!-- Post Like & Post Comment -->
                                    {{--<div class="d-flex align-items-center post-like--comments">--}}
                                        {{--<a href="#" class="post-like"><img src="img/core-img/like.png" alt=""> <span>392</span></a>--}}
                                        {{--<a href="#" class="post-comment"><img src="img/core-img/chat.png" alt=""> <span>10</span></a>--}}
                                    {{--</div>--}}
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- About Author -->
                    {{--<div class="blog-post-author d-flex">--}}
                        {{--<div class="author-thumbnail">--}}
                            {{--<img src="img/bg-img/32.jpg" alt="">--}}
                        {{--</div>--}}
                        {{--<div class="author-info">--}}
                            {{--<a href="#" class="author-name">James Smith, <span>The Author</span></a>--}}
                            {{--<p>Donec turpis erat, scelerisque id euismod sit amet, fermentum vel dolor. Nulla facilisi. Sed pellen tesque lectus et accu msan aliquam. Fusce lobortis cursus quam, id mattis sapien.</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    {{--<div class="pager d-flex align-items-center justify-content-between">--}}
                        {{--<div class="prev">--}}
                            {{--<a href="#" class="active"><i class="fa fa-angle-left"></i> previous</a>--}}
                        {{--</div>--}}
                        {{--<div class="next">--}}
                            {{--<a href="#">Next <i class="fa fa-angle-right"></i></a>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    <div class="section-heading">
                        <h6>Related</h6>
                    </div>

                    <div class="row">
                        <!-- Single Post -->
                        @foreach($relateds as $rows)
                        <div class="col-12 col-md-6">
                            <div class="single-blog-post style-3 mb-80">
                                <div class="post-thumb">
                                    <a href="#"><img style="height:350px;width:306px" src="{{ asset('/uploads/posts/'. $rows->image) }}" alt=""></a>
                                </div>
                                <div class="post-data">
                                    {{--<a href="#" class="post-catagory">Finance</a>--}}
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
                        <!-- Single Post -->
                    </div>
                
                    <div id="disqus_thread"></div>
                    <script>

                        /**
                         *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                         *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
                        /*
                        var disqus_config = function () {
                        this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
                        this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                        };
                        */
                        (function() { // DON'T EDIT BELOW THIS LINE
                            var d = document, s = d.createElement('script');
                            s.src = 'https://news-paper-1.disqus.com/embed.js';
                            s.setAttribute('data-timestamp', +new Date());
                            (d.head || d.body).appendChild(s);
                        })();
                    </script>
                    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>


                </div>
            </div>

            <div class="col-12 col-lg-4">
                <div class="blog-sidebar-area">

                    <!-- Latest Posts Widget -->
                    <!-- Latest Posts Widget -->
                    <!-- <div class="latest-posts-widget mb-50"> -->

                        <!-- Single Featured Post -->
                        <!-- <div class="single-blog-post small-featured-post d-flex">
                            <div class="post-thumb">
                                <a href="#"><img src="img/bg-img/19.jpg" alt=""></a>
                            </div>
                            <div class="post-data">
                                <a href="#" class="post-catagory">Finance</a>
                                <div class="post-meta">
                                    <a href="#" class="post-title">
                                        <h6>Pellentesque mattis arcu massa, nec fringilla turpis eleifend id.</h6>
                                    </a>
                                    <p class="post-date"><span>7:00 AM</span> | <span>April 14</span></p>
                                </div>
                            </div>
                        </div>
 -->
                        <!-- Single Featured Post -->
                        <!-- <div class="single-blog-post small-featured-post d-flex">
                            <div class="post-thumb">
                                <a href="#"><img src="img/bg-img/20.jpg" alt=""></a>
                            </div>
                            <div class="post-data">
                                <a href="#" class="post-catagory">Politics</a>
                                <div class="post-meta">
                                    <a href="#" class="post-title">
                                        <h6>Sed a elit euismod augue semper congue sit amet ac sapien.</h6>
                                    </a>
                                    <p class="post-date"><span>7:00 AM</span> | <span>April 14</span></p>
                                </div>
                            </div>
                        </div> -->

                        <!-- Single Featured Post -->
                        <!-- <div class="single-blog-post small-featured-post d-flex">
                            <div class="post-thumb">
                                <a href="#"><img src="img/bg-img/21.jpg" alt=""></a>
                            </div>
                            <div class="post-data">
                                <a href="#" class="post-catagory">Health</a>
                                <div class="post-meta">
                                    <a href="#" class="post-title">
                                        <h6>Pellentesque mattis arcu massa, nec fringilla turpis eleifend id.</h6>
                                    </a>
                                    <p class="post-date"><span>7:00 AM</span> | <span>April 14</span></p>
                                </div>
                            </div>
                        </div> -->

                        <!-- Single Featured Post -->
                        <!-- <div class="single-blog-post small-featured-post d-flex">
                            <div class="post-thumb">
                                <a href="#"><img src="img/bg-img/22.jpg" alt=""></a>
                            </div>
                            <div class="post-data">
                                <a href="#" class="post-catagory">Finance</a>
                                <div class="post-meta">
                                    <a href="#" class="post-title">
                                        <h6>Augue semper congue sit amet ac sapien. Fusce consequat.</h6>
                                    </a>
                                    <p class="post-date"><span>7:00 AM</span> | <span>April 14</span></p>
                                </div>
                            </div>
                        </div> -->

                        <!-- Single Featured Post -->
                        <!-- <div class="single-blog-post small-featured-post d-flex">
                            <div class="post-thumb">
                                <a href="#"><img src="img/bg-img/23.jpg" alt=""></a>
                            </div>
                            <div class="post-data">
                                <a href="#" class="post-catagory">Travel</a>
                                <div class="post-meta">
                                    <a href="#" class="post-title">
                                        <h6>Pellentesque mattis arcu massa, nec fringilla turpis eleifend id.</h6>
                                    </a>
                                    <p class="post-date"><span>7:00 AM</span> | <span>April 14</span></p>
                                </div>
                            </div>
                        </div> -->

                        <!-- Single Featured Post -->
                        <!-- <div class="single-blog-post small-featured-post d-flex">
                            <div class="post-thumb">
                                <a href="#"><img src="img/bg-img/24.jpg" alt=""></a>
                            </div>
                            <div class="post-data">
                                <a href="#" class="post-catagory">Politics</a>
                                <div class="post-meta">
                                    <a href="#" class="post-title">
                                        <h6>Augue semper congue sit amet ac sapien. Fusce consequat.</h6>
                                    </a>
                                    <p class="post-date"><span>7:00 AM</span> | <span>April 14</span></p>
                                </div>
                            </div>
                        </div>
                    </div> -->

                    <!-- Popular News Widget -->
                    <div class="popular-news-widget mb-50">
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
                    </div>

                    <!-- Newsletter Widget -->
                    <!-- <div class="newsletter-widget mb-50">
                        <h4>Log In</h4>
                        <p>Log in for more information.</p>
                        <form action="#" method="post">
                            <input type="email" name="email" placeholder="Email">
                            <input type="password" name="password" placeholder="password">
                            <button type="submit" class="btn w-100">Login</button>
                        </form>
                    </div> -->

                    <!-- Latest Comments Widget -->
                    <!-- <div class="latest-comments-widget">
                        <h3>Latest Comments</h3> -->

                        <!-- Single Comments -->
                        <!-- <div class="single-comments d-flex">
                            <div class="comments-thumbnail mr-15">
                                <img src="img/bg-img/29.jpg" alt="">
                            </div>
                            <div class="comments-text">
                                <a href="#">Jamie Smith <span>on</span> Facebook is offering facial recognition...</a>
                                <p>06:34 am, April 14, 2018</p>
                            </div>
                        </div> -->

                        <!-- Single Comments -->
                        <!-- <div class="single-comments d-flex">
                            <div class="comments-thumbnail mr-15">
                                <img src="img/bg-img/30.jpg" alt="">
                            </div>
                            <div class="comments-text">
                                <a href="#">Jamie Smith <span>on</span> Facebook is offering facial recognition...</a>
                                <p>06:34 am, April 14, 2018</p>
                            </div>
                        </div> -->

                        <!-- Single Comments -->
                        <!-- <div class="single-comments d-flex">
                            <div class="comments-thumbnail mr-15">
                                <img src="img/bg-img/31.jpg" alt="">
                            </div>
                            <div class="comments-text">
                                <a href="#">Jamie Smith <span>on</span> Facebook is offering facial recognition...</a>
                                <p>06:34 am, April 14, 2018</p>
                            </div>
                        </div> -->

                        <!-- Single Comments -->
                        <!-- <div class="single-comments d-flex">
                            <div class="comments-thumbnail mr-15">
                                <img src="img/bg-img/32.jpg" alt="">
                            </div>
                            <div class="comments-text">
                                <a href="#">Jamie Smith <span>on</span> Facebook is offering facial recognition...</a>
                                <p>06:34 am, April 14, 2018</p>
                            </div>
                        </div> -->
                    <!-- </div> -->
                </div>
            </div>
        </div>
    </div>
</div>




@include('frontend.layouts.footer')