<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>DIU Newsportal</title>
    <link rel="icon" href="img/daffodil-international-university.png">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
</head>

<body>
    <!-- ##### Header Area Start ##### -->
    <header class="header-area">
        <div class="top-header-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="top-header-content d-flex align-items-center justify-content-between">
                            <div class="logo">
                            </div>
                            <div class="login-search-area d-flex align-items-center">
                                <div class="login d-flex">
                                    <a href="login.html">Login</a>
                                </div>
                                <div class="search-form">
                                    <form action="#" method="post">
                                        <input type="search" name="search" class="form-control" placeholder="Search">
                                        <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->



    <!-- ##### Header Area End ##### -->


    <section>
        <div class="container">
            <div class="menu">
                <ul>
                    <li><a href="#">home</a></li>
                    @foreach($cat as $row)
                    <li><a href="#">{{ $row->name }}</a></li>
                            @endforeach
                        
                    </li>
                    <li><a href="#">about</a></li>
                    <li><a href="#">contact us</a></li>
                </ul>
            </div>

            <div class="clr"></div>
        </div>
    </section>




    <section>
        <div class="banner_part">
            @foreach($slider as $row)
            <div class="banner_item" style="background: url({{ asset("storage/images/$row->image")}})">
                <div class="container text-center">
                    <div class="col-lg-6 banner_text">
                        <div class="banner_text_inn">
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>

    <!-- ##### Slider Area End ##### -->

    <section>

        <div class="container">
            <div class="quotes_h">
                <h2>Todays Temperatue</h2>
                <h3><center><strong>{{$test}} &#8451</strong></center></h3>
                <center><div class="weather-box cloud-img" style="width: 74px; height: 74px"><img src="{{ asset('images/cloudy.png') }}" alt=""></center>
            </div>
        </div>
    </div>

        

    </section>




    <!-- ##### Featured Post Area Start ##### -->
    <div class="featured-post-area">
        <div class="container">
            <div class="row">


                @foreach($data as $row)
                <div class="col-lg-4">
                    <div class="single-blog-post featured-post">
                        <div class="post-thumb">
                            <a href="#"><img src="{{ asset("storage/images/$row->image")}}" alt=""></a>
                        </div>
                        <div class="post-data">
                            <a href="#" class="post-catagory">{{ $row->cat->name }}</a>
                            <a href="#" class="post-title">
                                <h4>{{ $row->title }}</h4>

                            </a>
                            <div class="post-meta">
                                <p class="post-author">By <a href="#">{{ $row->author }}</a></p>
                                <p>{{ $row->content }}</p>
                                <!-- Post Like & Post Comment -->
                               
                            </div>
                        </div>
                    </div>
                </div>

                @endforeach
               
            </div>


            

    <!-- ##### Featured Post Area End ##### -->

    <!-- ##### Popular News Area Start ##### -->
    <div class="popular-news-area section-padding-80-50">
        <div class="container">
            <div class="row">
                    <div class="section-heading">
                        <h6>Latest News</h6>
                    </div>

                   

                        <!-- Single Post -->
                            @foreach($latest as $row)
                           <div class="col-lg-4">
                                               <div class="single-blog-post featured-post">
                                                   <div class="post-thumb">
                                                       <a href="#"><img src="{{ asset("storage/images/$row->image")}}" alt=""></a>
                                                   </div>
                                                   <div class="post-data">
                                                       <a href="#" class="post-catagory">{{ $row->cat->name }}</a>
                                                       <a href="#" class="post-title">
                                                           <h4>{{ $row->title }}</h4>

                                                       </a>
                                                       <div class="post-meta">
                                                           <p class="post-author">By <a href="#">{{ $row->author }}</a></p>
                                                           <p>{{ $row->content }}</p>
                                                           <!-- Post Like & Post Comment -->
                                                           <div class="d-flex align-items-center">
                                                               <a href="#" class="post-like"><img src="img/core-img/like.png" alt=""> <span>392</span></a>
                                                               <a href="#" class="post-comment"><img src="img/core-img/chat.png" alt=""> <span>10</span></a>
                                                           </div>
                                                       </div>
                                                   </div>
                                               </div>
                                           </div>

                            @endforeach
                        

                        <!-- Single Post -->
                        <div class="col-12 col-md-6">
                            <div class="single-blog-post style-3">
                                <div class="post-thumb">
                                    <a href="#"></a>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
    <!--    </div>-->

    

    <!-- ##### Popular News Area End ##### -->

    <!-- ##### Video Post Area Start ##### -->
    <div class="video-post-area bg-img bg-overlay" style="background-image: url(img/bg-img/bg1.jpg);">
        <div class="container">
            <!-- ##### Video Post Area End ##### -->

            <!-- ##### Editorial Post Area Start ##### -->
            <div class="editors-pick-post-area section-padding-80-50">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-7 col-lg-9">
                            <!--
                            <div class="section-heading">
                                <h6>Editor Voice</h6>
                            </div>
-->

                            <div class="row">

                                <!-- World News -->
                                <div class="col-12 col-md-5 col-lg-3">
                                    <!-- Single Post -->
                                    <div class="single-blog-post style-2">
                                        <div class="post-thumb">
                                            <a href="#"><img src="{{ asset('assets/img/bg-img/3.jpeg') }}" alt=""></a>
                                        </div>
                                        <div class="post-data">
                                            <a href="#" class="post-title">
                                                <h6>ROTARY </h6>
                                            </a>
                                            <div class="post-meta">
                                                <div class="post-date"><a href="#">February 11, 2019</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ##### Editorial Post Area End ##### -->

            <!-- ##### Footer Area Start ##### -->
            <footer class="footer-area">

                <!-- Main Footer Area -->
                <div class="main-footer-area">
                    <div class="container">
                        <div class="row">
                            <!-- Footer Widget Area -->
                            <div class="col-12 col-sm-6 col-lg-4">
                                <div class="footer-widget-area mt-80">
                                    <!-- Footer Logo -->
                                    <div class="footer-logo">

                                    </div>
                                    <!-- List -->
                                    <ul class="list">
                                        <li><a href="mailto:contact@youremail.com">mr.sabbirahmed.bd@gmail.com</a></li>
                                        <li><a>+8801917 491010</a></li>
                                        <li><a href="http://yoursitename.com">www.online newportal.com</a></li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Footer Widget Area -->
                            <div class="col-12 col-sm-6 col-lg-2">
                                <div class="footer-widget-area mt-80">
                                    <!-- Title -->
                                    <h4 class="widget-title">Politics</h4>
                                    <!-- List -->
                                    <ul class="list">
                                        <li><a href="#">Business</a></li>
                                        <li><a href="#">Markets</a></li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Footer Widget Area -->
                            <div class="col-12 col-sm-4 col-lg-2">
                                <div class="footer-widget-area mt-80">
                                    <!-- Title -->
                                    <h4 class="widget-title">Featured</h4>
                                    <!-- List -->
                                    <ul class="list">
                                        <li><a href="#">Football</a></li>
                                        <li><a href="#">Golf</a></li>
                                        <li><a href="#">Tennis</a></li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Footer Widget Area -->
                            <div class="col-12 col-sm-4 col-lg-2">
                                <div class="footer-widget-area mt-80">
                                    <!-- Title -->


                                </div>
                            </div>

                            <!-- Footer Widget Area -->
                            <div class="col-12 col-sm-4 col-lg-2">
                                <div class="footer-widget-area mt-80">
                                    <!-- Title -->
                                    <h4 class="widget-title">+More</h4>
                                    <!-- List -->
                                    <ul class="list">
                                        <li><a href="#">Fashion</a></li>
                                        <li><a href="#">Design</a></li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Bottom Footer Area -->
                <div class="bottom-footer-area">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <div class="col-12">

                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <!-- ##### Footer Area Start ##### -->

    <!-- ##### All Javascript Files ##### -->
    <script src="{{ asset('assets/js/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/slick.min.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
</body>

</html>
