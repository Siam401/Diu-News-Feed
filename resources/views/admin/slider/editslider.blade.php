@extends('admin.adminlayouts')

@section('content')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Forms</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Update New Post
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-6">
                                @include('layouts.errors')
                                <form action='{{ url("slider/$slider->id") }}' method="post" enctype="multipart/form-data">

                                    <input name="_method" type="hidden" value="PUT">
                                    <table class="form">
                                        {{ csrf_field() }}
                                        <div class="form-group">
                                            <label>Title</label>
                                            <input type="text" name="title" value="<?php
                                            if(old('title')) echo old('title'); else echo $slider->title;
                                            ?>" class="form-control">
                                            <p class="help-block">Enter Category Name...</p>
                                        </div>


                                        <div class="form-group">
                                            <label>Upload Image</label>
                                            <img src="{{ asset("storage/images/$slider->image")}}" height="80px" width="200px"/><br/>
                                            <input type="file" name="image" />
                                        </div>

                                        <button type="submit" class="btn btn-primary">Submit</button>

                            </div>
                        </div>
                        <!-- /.col-lg-6 (nested) -->

                        <!-- /.col-lg-6 (nested) -->
                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <script src="{{ asset('admin/vendor/jquery/jquery.min.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('admin/vendor/bootstrap/js/bootstrap.min.js') }}"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{ asset('admin/vendor/metisMenu/metisMenu.min.js') }}"></script>


    <!-- Custom Theme JavaScript -->
    <script src="{{ asset('admin/dist/js/sb-admin-2.js') }}"></script>

    </body>

    </html>

@endsection