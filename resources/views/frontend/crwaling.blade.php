@include('frontend.layouts.header')

<!-- Navbar Area -->
@include('frontend.layouts.navbar')

<!-- ##### Header Area End ##### -->

<!-- ##### Hero Area Start ##### -->
<!-- ##### Hero Area End ##### -->

<!-- ##### Blog Area Start ##### -->
<div class="blog-area section-padding-0-80">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-12">
                <div class="blog-posts-area">

                    <!-- Single Featured Post -->

                    @foreach($crawldata as $rows)
                    <div class="single-blog-post featured-post mb-30">
                        <div class="post-thumb">
                            <a href="#"><img style="height: 353px;width:730px" src="{{ $rows->image }}" alt=""></a>
                        </div>
                        <div class="post-data">
                            {{--<a href="#" class="post-catagory">Finance</a>--}}
                            <a href="https://en.prothomalo.com/international" class="post-title">
                                <h6>{{ $rows->title }}</h6>
                            </a>
                            <div class="post-meta">
                                <p class="post-author">By <a href="#">{{ $rows->author }}</a></p>
                                <p class="post-excerp">{{ $rows->content }}</p>
                                <!-- Post Like & Post Comment -->
                            </div>
                        </div>
                    </div>
                    @endforeach


                </div>

            </div>

            <div class="col-12 col-lg-4">
                <div class="blog-sidebar-area">

                
                </div>
            </div>
        </div>
    </div>
</div>




@include('frontend.layouts.footer')