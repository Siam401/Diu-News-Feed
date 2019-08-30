<section id="sliderSection">
    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-8">
            <div class="slick_slider">
                @foreach($slider as $row)
                <div class="single_iteam"> <a href="pages/single_page.html"> <img src="{{ asset("storage/images/$row->image")}}" alt=""></a>
                    <div class="slider_article">
                        <h2><a class="slider_tittle" href="pages/single_page.html">{{$row->title}}</a></h2>

                    </div>

                </div>
                @endforeach
            </div>
        </div>