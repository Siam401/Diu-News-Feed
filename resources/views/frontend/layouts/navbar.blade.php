<div class="newspaper-main-menu" id="stickyMenu">
    <div class="classy-nav-container breakpoint-off">
        <div class="container">
            <!-- Menu -->
            <nav class="classy-navbar justify-content-between" id="newspaperNav">

                <!-- Logo -->
                <div class="logo">
                    <a href=""><img src="img/core-img/logo.png" alt=""></a>
                </div>

                <!-- Navbar Toggler -->
                <div class="classy-navbar-toggler">
                    <span class="navbarToggler"><span></span><span></span><span></span></span>
                </div>

                <!-- Menu -->
                <div class="classy-menu">

                    <!-- close btn -->
                    <div class="classycloseIcon">
                        <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                    </div>

                    <!-- Nav Start -->
                    <div class="classynav">
                        <ul>
                            <li class="active"><a href="{{ route('layouts.index') }}">Home</a></li>
                            {{--<li><a href="#">Pages</a>--}}
                                {{--<ul class="dropdown">--}}
                                    {{--<li><a href="index.html">Home</a></li>--}}
                                    {{--<li><a href="catagories-post.html">Catagories</a></li>--}}
                                    {{--<li><a href="single-post.html">Single Articles</a></li>--}}
                                    {{--<li><a href="about.html">About Us</a></li>--}}
                                    {{--<li><a href="contact.html">Contact</a></li>--}}
                                    {{--<li><a href="#">Dropdown</a>--}}
                                        {{--<ul class="dropdown">--}}
                                            {{--<li><a href="index.html">Home</a></li>--}}
                                            {{--<li><a href="catagories-post.html">Catagories</a></li>--}}
                                            {{--<li><a href="single-post.html">Single Articles</a></li>--}}
                                            {{--<li><a href="about.html">About Us</a></li>--}}
                                            {{--<li><a href="contact.html">Contact</a></li>--}}
                                        {{--</ul>--}}
                                    {{--</li>--}}
                                {{--</ul>--}}
                            {{--</li>--}}
                            {{--<li><a href="#">Mega Menu</a>--}}
                                {{--<div class="megamenu">--}}
                                    {{--<ul class="single-mega cn-col-4">--}}
                                        {{--<li class="title">Catagories</li>--}}
                                        {{--<li><a href="index.html">Home</a></li>--}}
                                        {{--<li><a href="catagories-post.html">Catagories</a></li>--}}
                                        {{--<li><a href="single-post.html">Single Articles</a></li>--}}
                                        {{--<li><a href="about.html">About Us</a></li>--}}
                                        {{--<li><a href="contact.html">Contact</a></li>--}}
                                    {{--</ul>--}}
                                    {{--<ul class="single-mega cn-col-4">--}}
                                        {{--<li class="title">Catagories</li>--}}
                                        {{--<li><a href="index.html">Home</a></li>--}}
                                        {{--<li><a href="catagories-post.html">Catagories</a></li>--}}
                                        {{--<li><a href="single-post.html">Single Articles</a></li>--}}
                                        {{--<li><a href="about.html">About Us</a></li>--}}
                                        {{--<li><a href="contact.html">Contact</a></li>--}}
                                    {{--</ul>--}}
                                    {{--<ul class="single-mega cn-col-4">--}}
                                        {{--<li class="title">Catagories</li>--}}
                                        {{--<li><a href="index.html">Home</a></li>--}}
                                        {{--<li><a href="catagories-post.html">Catagories</a></li>--}}
                                        {{--<li><a href="single-post.html">Single Articles</a></li>--}}
                                        {{--<li><a href="about.html">About Us</a></li>--}}
                                        {{--<li><a href="contact.html">Contact</a></li>--}}
                                    {{--</ul>--}}
                                    {{--<div class="single-mega cn-col-4">--}}
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
                                {{--</div>--}}
                            {{--</li>--}}
                            @foreach($cat as $rows)
                                <li><a href="{{ route('categoryPost',$rows->id) }}">{{ $rows->name }}</a></li>
                            @endforeach
                            <li><a href="#">About Us</a></li>
                            <li><a href="contact.html">Contact</a></li>
                            @php
                                $viewer_id=session('viewer_id')
                            @endphp
                            <?php if($viewer_id != NULL){ ?>

                            <li><a href="#">Diu</a>
                                <ul class="dropdown">
                                    <li><a href="{{ route('diu.index') }}">Home</a></li>
                                    @foreach($diucat as $rows)
                                        <li><a href="">{{ $rows->name }}</a></li>
                                    @endforeach

                                </ul>
                            </li>
                            <?php } ?>

                        </ul>
                    </div>
                    <!-- Nav End -->
                </div>
            </nav>
        </div>
    </div>
</div>
</header>