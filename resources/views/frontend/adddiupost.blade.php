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
                        @if (\Session::has('success'))
                            <div class="alert alert-success">
                                <ul>
                                    <li>{!! \Session::get('success') !!}</li>
                                </ul>
                            </div>
                        @endif
                        <h4>Add Diu Post</h4>

                        <!-- Reply Form -->
                        <div class="contact-form-area">
                                @if(Session::has('message'))
                                <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
                                @endif    
                            <form action="{{ route('viewer.adddiupost') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-12 col-lg-12">
                                        <div class="form-group">
                                        <label>Post title</label>
                                        <input type="text" name="title" class="form-control">
                                    </div>
                                    </div>
                                    <div class="col-12 col-lg-12">
                                        <div class="form-group">
                                         <label>Category</label>
                                         <select   name="diucat_id" id="select" class="form-control">
                                            <option value="">Enter Category Name...</option>
                                            @foreach($diucat as $category)
                                                <option value="{{ $category->id }}" @if(old('cat_id') == $category->id) selected @endif>{{ $category->name }}</option>
                                            @endforeach
                                         </select>
                                    </div>
                                    </div>
                                    <div class="col-12 col-lg-12">
                                            <div class="form-group">
                                                    <label>Upload Image</label>
                                                    <input type="file" name="image" class="form-control-file">
                                                </div>
                                    </div>    
                                    <div class="col-12 col-lg-12">
                                        <div class="form-group">
                                            <label>Content</label>
                                            <textarea class="form-control" name="content" rows="3"></textarea>
                                        </div>
                                    </div>    
                                    <div class="col-12 col-lg-12">
                                        <div class="form-group">
                                            <label>Tag</label>
                                            <input type="text" name="tag" class="form-control">
                                        </div>
                                    </div>    
                                    <div class="col-12 col-lg-12">
                                        <div class="form-group">
                                            <label>Author</label>
                                            @php
                                                $viewer_name=session('viewer_name')
                                            @endphp
                                            <input type="text" name="author" value="{{ $viewer_name }}" class="form-control" readonly>
                                        </div>
                                    </div>    
                                    <div class="col-12 col-lg-12">
                                            <div class="form-group">
                                                <label>Post Type</label>
                                                <select   name="status" id="select" class="form-control">
                                                    <option value="">Please select</option>
                                                    <option value="Pin Post">Pin Post</option>
                                                    <option value="Normal Post">Normal Post</option>
                                                </select>
                                            </div>
                                    </div>    
                                    <div class="col-12 text-center">
                                        <button class="btn newspaper-btn mt-30 w-100" type="submit">Send Post</button>
                                    </div>
                                    {{-- <div class="col-12 text-center">
                                        <p>Don't have an account then <strong> <a href="{{ route('viewer.registrationindex') }}">register</a></strong></p>
                                    </div> --}}
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