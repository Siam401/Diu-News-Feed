@extends('admin.adminlayouts')

@section('content')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Tables</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        DataTables Advanced Tables
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                    <tr>
                                        <th>Serial No.</th>
                                        <th>Category Name</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    @foreach($cats as $cat)
                                    <tbody>

                                    <tr class="odd gradeX">

                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$cat->name}}</td>
                                        @if(\Illuminate\Support\Facades\Auth::check())
                                            @if(isAdmin())
                                        <td><a href='{{ url("cat/$cat->id/edit") }}'>Edit</a> ||

                                            <form method="post" action='{{ url("cat/$cat->id") }}'>
                                                <input name="_method" type="hidden" value="DELETE">
                                                {{ csrf_field() }}
                                                <input type="submit" value="DELETE"> </form>
                                        </td>
                                            @endif
    @endif
                                    </tr>
                                    </tbody>
                                    @endforeach
                                </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('admin/assets/js/vendor/jquery-2.1.4.min.js') }}"></script>
        <script src="{{ asset('admin/vendor/jquery/jquery.min.js') }}"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="{{ asset('admin/vendor/bootstrap/js/bootstrap.min.js') }}"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="{{ asset('admin/vendor/metisMenu/metisMenu.min.js') }}"></script>

        <!-- DataTables JavaScript -->
        <script src="{{ asset('admin/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('admin/vendor/datatables-plugins/dataTables.bootstrap.min.js') }}"></script>
        <script src="{{ asset('admin/vendor/datatables-responsive/dataTables.responsive.js') }}"></script>

        <!-- Custom Theme JavaScript -->
        <script src="{{ asset('admin/dist/js/sb-admin-2.js') }}"></script>

        <!-- Page-Level Demo Scripts - Tables - Use for reference -->
        <script>
            $(document).ready(function() {
                $('#dataTables-example').DataTable({
                    responsive: true
                });
            });
        </script>

        </body>

        </html>

@endsection