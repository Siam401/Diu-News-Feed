@include('frontend.layouts.header')

<!-- Navbar Area -->
@include('frontend.layouts.navbar')

<!-- ##### Header Area End ##### -->

<div class="blog-area section-padding-0-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-12 col-lg-8">
                <div class="blog-posts-area">
                    <div class="post-a-comment-area section-padding-80-0">
                        <h4>Registration</h4>

                        <!-- Reply Form -->
                        <div class="contact-form-area">
                            <form action="{{ route('viewer.store') }}" method="post">
                                @csrf
                                <div class="row">
                                	<div class="col-12 col-lg-12">
                                	    <input type="text" class="form-control" id="name" name="viewer_name" placeholder="Name*">
                                	</div>
                                    <div class="col-12 col-lg-12">
                                        <input type="email" class="form-control" id="name" name="email" placeholder="Email*">
                                    </div>
                                    <div class="col-12 col-lg-12">
                                        <input type="text" class="form-control" id="name" name="viewer_no" placeholder="Mobile number*">
                                    </div>
                                    <div class="col-12 col-lg-12">
                                        <input type="password" class="form-control" id="email" name="password" placeholder="Password*">
                                    </div>
                                    <div class="col-12 text-center">
                                        <button class="btn newspaper-btn mt-30 w-100" type="submit">Register</button>
                                    </div>
                                    <div class="col-12 text-center">
                                        <p>Have an account then <strong> <a href="{{ route('viewer.login') }}">login</a></strong></p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2"></div>

        </div>
    </div>
</div>




@include('frontend.layouts.footer')