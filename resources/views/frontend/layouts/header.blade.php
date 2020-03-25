<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>The News Paper - News &amp; Lifestyle Magazine Template</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('ui/frontend/img/core-img/favicon.ico') }}">



    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="{{ asset('ui/frontend/style.css') }}">

</head>

<body>
<!-- ##### Header Area Start ##### -->
<header class="header-area">

    <!-- Top Header Area -->
    <div class="top-header-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="top-header-content d-flex align-items-center justify-content-between">
                        <!-- Logo -->
                        <div class="logo">
                            <div class="quotes_h">
                                <center><div class="weather-box cloud-img" style="width: 24px; height: 24px"><img src="{{ asset('images/cloudy.png') }}" alt=""></center>
                                <h6><center><strong style="color: #fff;">{{$test}} &#8451</strong></center></h6>
                                <h6><center><strong style="color: #fff;">{{ $date }}</strong></center></h6>
                            </div>
                        </div>

                        <!-- Login Search Area -->
                        <div class="login-search-area d-flex align-items-center">
                            <!-- Login -->
                            @php
                                $viewer_name=session('viewer_name')
                            @endphp
                            <?php if($viewer_name != NULL){ ?>
                            <span class="welcome_text" style="margin-right: 415px;margin-top: 13px"> 
                            <h6><strong style="color: #fff;"><i class="fa fa-user">Welcome {{ $viewer_name }}!</i></strong></h6>
                            </span>
                            <div class="login d-flex">
                            <a href="{{ route('viewer.viewer_adddiupost') }}">Add diu post</a>
                            <a href="{{ route('viewer.viewer_addpost') }}">Add post</a>
                            <a href="{{ route('viewer.logout') }}">Logout</a>

                            </div>
                            <?php }else{ ?>
                                <div class="login d-flex">
                                <a href="{{ route('viewer.index') }}">Login</a>
                                <a href="{{ route('viewer.registrationindex') }}">Register</a>
                            </div>
                            <?php }?>
                            
                            <!-- Search Form -->
                            <!-- <div class="search-form">
                                <form action="#" method="post">
                                    <input type="search" name="search" class="form-control" placeholder="Search">
                                    <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                                </form>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>