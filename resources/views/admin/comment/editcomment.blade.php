@extends('admin.adminlayouts')

@section('content')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Approved Comment</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                       Approved Comment
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-6">
                                @include('layouts.errors')
                                <form action='{{ url("comment/$comment->id") }}' method="post" enctype="multipart/form-data">

                                    <input name="_method" type="hidden" value="PUT">
                                    <table class="form">
                                        {{ csrf_field() }}



                                        <div class="form-group">
                                            <label>Comment</label>
                                            <textarea class="form-control" name="comment"><?php
                                                if(old('comment')) echo old('comment'); else echo $comment->comment;
                                                ?></textarea>
                                        </div>

                                        <div class="form-group">
                                            {!! Form::label('content') !!}
                                            {!! Form::select('status',(getCommentStatusList()),null,['class'=>'form-control comment','required'=>'required']) !!}
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