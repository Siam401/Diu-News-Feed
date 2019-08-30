<div class="single_sidebar">
    <h2><span>Popular Post</span></h2>
    <ul class="spost_nav">
        @foreach($poplpost as $row)
        <li>

            <div class="media wow fadeInDown"> <a href="" class="media-left"> <img alt="" src="{{ asset("storage/images/$row->image")}}"> </a>
                <div class="media-body"> <a href="#" class="catg_title"> {{$row->title}}</a> </div>
            </div>

        </li>
        @endforeach
    </ul>
</div>