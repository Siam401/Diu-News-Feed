
@extends('layouts.layouts')

@section('content')

    <section id="contentSection">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-8">
                <div class="left_content">
                    <div class="single_post_content">
                        @foreach($data as $row)
                        <h2><span>{{$row->tag}}</span></h2>
                        <div class="single_post_content_left">
                            <ul class="business_catgnav  wow fadeInDown">
                                <li>
                                    <figure class="bsbig_fig"> <a href="{{route('singlePost',$row->id)}}" class="featured_img"> <img alt="" src="{{ asset("storage/images/$row->image")}}"> <span class="overlay"></span> </a>
                                        <figcaption> <a href="{{route('singlePost',$row->id)}}">{{$row->title}}</a> </figcaption>
                                        <p>{{ str_limit($row->content, 150) }}</p>
                                    </figure>
                                    <div class="readmore clear">
                                        <a href="">Read More</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        @endforeach

                            <div class="single_post_content_right">
                                <ul class="spost_nav">
                                    <li>
                                        @foreach($testto as $row)
                                            <div class="media wow fadeInDown"> <a href="{{route('singlePost',$row->id)}}" class="media-left"> <img alt="" src="{{ asset("storage/images/$row->image")}}"> </a>
                                                <div class="media-body"> <a href="{{route('singlePost',$row->id)}}" class="catg_title">{{$row->title}}</a> </div>
                                            </div>
                                        @endforeach
                                    </li>
                                </ul>
                            </div>

                    </div>

                    <div class="fashion_technology_area">
                        <div class="fashion">
                            <div class="single_post_content">
                                @foreach($test as $row)
                                <h2><span>{{$row->tag}}</span></h2>
                                <ul class="business_catgnav wow fadeInDown">
                                    <li>
                                        <figure class="bsbig_fig"> <a href="{{route('singlePost',$row->id)}}" class="featured_img"> <img alt="" src="{{ asset("storage/images/$row->image")}}"> <span class="overlay"></span> </a>
                                            <figcaption> <a href="{{route('singlePost',$row->id)}}">{{$row->title}}</a> </figcaption>
                                            <p>{{ str_limit($row->content, 150) }}</p>
                                        </figure>
                                    </li>
                                </ul>
                                @endforeach
                                    <ul class="spost_nav">
                                        @foreach($inter as $row)
                                        <li>
                                            <div class="media wow fadeInDown"> <a href="{{route('singlePost',$row->id)}}" class="media-left"> <img alt="" src="{{ asset("storage/images/$row->image")}}"> </a>
                                                <div class="media-body"> <a href="{{route('singlePost',$row->id)}}" class="catg_title">{{$row->title}}</a> </div>
                                            </div>
                                        </li>
                                        @endforeach
                                    </ul>
                            </div>
                        </div>

                        <div class="technology">

                            <div class="single_post_content">
                                @foreach($sports as $row)
                                <h2><span>{{$row->tag}}</span></h2>
                                <ul class="business_catgnav">
                                    <li>
                                        <figure class="bsbig_fig"> <a href="{{route('singlePost',$row->id)}}" class="featured_img"> <img alt="" src="{{ asset("storage/images/$row->image")}}"> <span class="overlay"></span> </a>
                                            <figcaption> <a href="{{route('singlePost',$row->id)}}">{{$row->title}}</a> </figcaption>
                                            <p>{{ str_limit($row->content, 150) }}</p>
                                        </figure>
                                    </li>
                                </ul>
                                @endforeach
                                    <ul class="spost_nav">
                                        @foreach($sportsin as $row)
                                            <li>
                                                <div class="media wow fadeInDown"> <a href="{{route('singlePost',$row->id)}}" class="media-left"> <img alt="" src="{{ asset("storage/images/$row->image")}}"> </a>
                                                    <div class="media-body"> <a href="{{route('singlePost',$row->id)}}" class="catg_title">{{$row->title}}</a> </div>
                                                </div>
                                            </li>
                                        @endforeach
                                    </ul>
                            </div>

                        </div>
                    </div>
                    <div class="single_post_content">
                        <h2><span>Photography</span></h2>

                        <ul class="photograph_nav  wow fadeInDown">
                            <li>
                                <div class="photo_grid">
                                    <figure class="effect-layla"> <a class="fancybox-buttons" data-fancybox-group="button" href="images/photograph_img2.jpg" title="Photography Ttile 1"> <img src="images/photograph_img2.jpg" alt=""/></a> </figure>
                                </div>
                            </li>
                        </ul>

                    </div>




                    <div class="single_post_content">
                        @foreach($science as $row)
                            <h2><span>{{$row->tag}}</span></h2>
                            <div class="single_post_content_left">
                                <ul class="business_catgnav  wow fadeInDown">
                                    <li>
                                        <figure class="bsbig_fig"> <a href="{{route('singlePost',$row->id)}}" class="featured_img"> <img alt="" src="{{ asset("storage/images/$row->image")}}"> <span class="overlay"></span> </a>
                                            <figcaption> <a href="{{route('singlePost',$row->id)}}">{{$row->title}}</a> </figcaption>
                                            <p>{{ str_limit($row->content, 150) }}</p>
                                        </figure>
                                    </li>
                                </ul>
                            </div>
                        @endforeach

                        <div class="single_post_content_right">
                            <ul class="spost_nav">
                                <li>
                                    @foreach($tech as $row)
                                        <div class="media wow fadeInDown"> <a href="{{route('singlePost',$row->id)}}" class="media-left"> <img alt="" src="{{ asset("storage/images/$row->image")}}"> </a>
                                            <div class="media-body"> <a href="{{route('singlePost',$row->id)}}" class="catg_title">{{$row->title}}</a> </div>
                                        </div>
                                    @endforeach
                                </li>
                            </ul>
                        </div>

                    </div>


                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
                <aside class="right_content">
                    @include ('layouts.popularPost')
                    <div class="single_sidebar">
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#category" aria-controls="home" role="tab" data-toggle="tab">Category</a></li>
                            <li role="presentation"><a href="#video" aria-controls="profile" role="tab" data-toggle="tab">Video</a></li>
                            <li role="presentation"><a href="#comments" aria-controls="messages" role="tab" data-toggle="tab">Comments</a></li>
                        </ul>
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="category">
                                <ul>
                                    @foreach($cats as $category)
                                    <li class="cat-item"><a href="">{{ $category->name }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="video">
                                <div class="vide_area">
                                    <iframe width="100%" height="250" src="http://www.youtube.com/embed/h5QWbURNEpA?feature=player_detailpage" frameborder="0" allowfullscreen></iframe>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="comments">
                                <ul class="spost_nav">
                                    <li>
                                        <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="images/post_img1.jpg"> </a>
                                            <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 1</a> </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="images/post_img2.jpg"> </a>
                                            <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 2</a> </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="images/post_img1.jpg"> </a>
                                            <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 3</a> </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="images/post_img2.jpg"> </a>
                                            <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 4</a> </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="single_sidebar wow fadeInDown">
                        <h2><span>Sponsor</span></h2>
                        <a class="sideAdd" href="#"><img src="images/add_img.jpg" alt=""></a> </div>
                    <div class="single_sidebar wow fadeInDown">
                        <h2><span>Category Archive</span></h2>
                        <select class="catgArchive">
                            <option>Select Category</option>
                            @foreach($cats as $category)
                                <option value="{{ $category->id }}" @if(old('category_id') == $category->id) selected @endif>{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="single_sidebar wow fadeInDown">
                        <h2><span>Links</span></h2>
                        <ul>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Rss Feed</a></li>
                            <li><a href="#">Login</a></li>
                            <li><a href="#">Life &amp; Style</a></li>
                        </ul>
                    </div>
                </aside>
            </div>
        </div>
    </section>

@endsection