<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font.css">
    <link rel="stylesheet" type="text/css" href="assets/css/li-scroller.css">
    <link rel="stylesheet" type="text/css" href="assets/css/slick.css">
    <link rel="stylesheet" type="text/css" href="assets/css/jquery.fancybox.css">
    <link rel="stylesheet" type="text/css" href="assets/css/theme.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">

    <script src="assets/js/html5shiv.min.js"></script>
    <script src="assets/js/respond.min.js"></script>





    <![endif]-->
</head>
<body>
<div id="preloader">
    <div id="status">&nbsp;</div>
</div>
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
<div class="container">
    <header id="header">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="header_top">
                    <div class="header_top_left">
                        <ul class="top_nav">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="#">About</a></li>
                            <li><a href={{ url('/contact') }}>Contact</a></li>
                        </ul>
                    </div>
                    <div class="header_top_right">
                        <p>Friday, December 05, 2045</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="header_bottom">
                    <div class="logo_area"><a href="index.php" class="logo"><img src="images/logo.jpg" alt=""></a></div>

                </div>
            </div>
        </div>
    </header>
    <section id="navArea">
        <nav class="navbar navbar-inverse" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            </div>
            <div id="navbar" class="navbar-collapse collapse nav">
                <ul class="nav navbar-nav main_nav">
                    <li class="active"><a href="index.html"><span class="fa fa-home desktop-home"></span><span class="mobile-show">Home</span></a></li>
                    <li><a href={{ url('/contact') }}>Contact</a></li>
                </ul>
            </div>
        </nav>
    </section>
    <section id="newsSection">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="latest_newsarea"> <span>Latest News</span>

                    <ul id="ticker01" class="news_sticker">
                        @foreach($posts as $post)
                        <li><a href="{{route('singlePost',$post->id)}}"><img src="{{ asset("storage/images/$post->image")}}" alt="">{{$post->title}}</a></li>
                        @endforeach

                    </ul>
                    <div class="social_area">
                        <ul class="social_nav">
                            <li class="facebook"><a href=""></a></li>
                            <li class="twitter"><a href=""></a></li>
                            <li class="flickr"><a href=""></a></li>
                            <li class="pinterest"><a href=""></a></li>
                            <li class="googleplus"><a href=""></a></li>
                            <li class="vimeo"><a href=""></a></li>
                            <li class="youtube"><a href=""></a></li>
                            <li class="mail"><a href=""></a></li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </section>