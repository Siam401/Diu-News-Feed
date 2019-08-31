<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li class="sidebar-search">
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                </div>
                <!-- /input-group -->
            </li>
            <li>
                <a href="{{ url('admin/adminindex') }}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Category<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ url('cat/create') }}">Add Category</a>
                    </li>
                    <li>
                        <a href="{{ url('/cat') }}">Category List</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>

            <li>
                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>Diu Category<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ url('diucat/create') }}">Add Category</a>
                    </li>
                    <li>
                        <a href="{{ url('/diucat') }}">Category List</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>


            <li>
                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Post<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ url('/post/create') }}">Add Post</a>
                    </li>
                    <li>
                        <a href="{{ url('/post') }}">Post List</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>

            <li>
                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>Diu Post<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ url('/diupost/create') }}">Add Post</a>
                    </li>
                    <li>
                        <a href="{{ url('/diupost') }}">Post List</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>



            <li>
                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Profile<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">

                    <li>
                        <a href="{{ url('user/create') }}">Add Profile</a>
                    </li>

                    <li>
                        <a href="{{ url('/user') }}"> Profile List</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>




            <li>
                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Slider List<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">

                    <li>
                        <a href="{{ url('slider/create') }}">Add Slider</a>
                    </li>

                    <li>
                        <a href="{{ url('/slider') }}">Slider List</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>


            <li>
                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Comment<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">

                    <li>
                        <a href="{{ url('/comment') }}">All Comments</a>
                    </li>


                </ul>
                <!-- /.nav-second-level -->
            </li>




            {{--<li>--}}
                {{--<a href="tables.html"><i class="fa fa-table fa-fw"></i> Tables</a>--}}
            {{--</li>--}}
            {{--<li>--}}
                {{--<a href="forms.html"><i class="fa fa-edit fa-fw"></i> Forms</a>--}}
            {{--</li>--}}
            {{--<li>--}}
                {{--<a href="#"><i class="fa fa-wrench fa-fw"></i> UI Elements<span class="fa arrow"></span></a>--}}
                {{--<ul class="nav nav-second-level">--}}
                    {{--<li>--}}
                        {{--<a href="panels-wells.html">Panels and Wells</a>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<a href="buttons.html">Buttons</a>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<a href="notifications.html">Notifications</a>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<a href="typography.html">Typography</a>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<a href="icons.html"> Icons</a>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<a href="grid.html">Grid</a>--}}
                    {{--</li>--}}
                {{--</ul>--}}
                {{--<!-- /.nav-second-level -->--}}
            {{--</li>--}}
            {{--<li>--}}
                {{--<a href="#"><i class="fa fa-sitemap fa-fw"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>--}}
                {{--<ul class="nav nav-second-level">--}}
                    {{--<li>--}}
                        {{--<a href="#">Second Level Item</a>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<a href="#">Second Level Item</a>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<a href="#">Third Level <span class="fa arrow"></span></a>--}}
                        {{--<ul class="nav nav-third-level">--}}
                            {{--<li>--}}
                                {{--<a href="#">Third Level Item</a>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<a href="#">Third Level Item</a>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<a href="#">Third Level Item</a>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<a href="#">Third Level Item</a>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                        {{--<!-- /.nav-third-level -->--}}
                    {{--</li>--}}
                {{--</ul>--}}
                {{--<!-- /.nav-second-level -->--}}
            {{--</li>--}}
            {{--<li>--}}
                {{--<a href="#"><i class="fa fa-files-o fa-fw"></i> Sample Pages<span class="fa arrow"></span></a>--}}
                {{--<ul class="nav nav-second-level">--}}
                    {{--<li>--}}
                        {{--<a href="blank.html">Blank Page</a>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<a href="{{ url('/login') }}">Login Page</a>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<a href="{{ url('user/create') }}">Registration Page</a>--}}
                    {{--</li>--}}
                {{--</ul>--}}
                {{--<!-- /.nav-second-level -->--}}
            {{--</li>--}}
        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>
<!-- /.navbar-static-side -->
</nav>
