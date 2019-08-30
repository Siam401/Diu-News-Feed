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
                        <h4>Login</h4>

                        <!-- Reply Form -->
                        <div class="contact-form-area">
                            @if(Session::has('message'))
                            <p class="alert {{ Session::get('alert-class', 'alert-danger') }}">{{ Session::get('message') }}</p>
                            @endif
                            <form action="{{ route('viewer.login') }}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-12 col-lg-12">
                                        <input type="email" class="form-control" id="name" name="email" placeholder="Email*">
                                    </div>
                                    <div class="col-12 col-lg-12">
                                        <input type="password" class="form-control" id="email" name="password" placeholder="Password*">
                                    </div>
                                    <div class="col-12 text-center">
                                        <button class="btn newspaper-btn mt-30 w-100" type="submit">Login</button>
                                    </div>
                                    <div class="col-12 text-center">
                                        <p>Don't have an account then <strong> <a href="{{ route('viewer.registrationindex') }}">register</a></strong></p>
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