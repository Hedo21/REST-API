<!DOCTYPE html>
<html lang="en">

@include('layouts.head')

<body class="bg-gray-100">

    <div class="container-fluid no-gutters">

        <div class="row">

            <!-- Left Sidebar -->
            @include('layouts.sidebar')
            <!-- /Left Sidebar -->

            <!-- Main Part -->
            <div class="main-wrapper">

                <!-- Top Toolbar -->
                <div class="navbar navbar-light bg-white px-3 px-sm-5 py-3">
                    <div class="d-inline-block mr-3">
                        <a href="#" data-target="#sidebar-left" data-toggle="collapse-width"
                            class="btn btn-dark btn-icon rounded-circle shadow-00">
                            <i class="fa fa-navicon"></i>
                        </a>
                    </div>

                    {{-- <form class="search-form form-inline my-2 my-lg-0">
                        <div class="input-group input-group-built-in">
                            <input type="text" class="form-control rounded-1" placeholder="Search for something..."
                                aria-label="Search for something...">
                            <span class="input-group-btn">
                                <a href="#" class="btn btn-icon">
                                    <i class="fa fa-search"></i>
                                </a>
                            </span>
                        </div>
                    </form> --}}
                    <ul class="nav ml-auto">
                        <li class="m-sm-1 m-md-2 position-relative">
                            <a data-toggle="dropdown" href="#" aria-expanded="false">
                                <div class="d-inline-block mr-2">
                                    <img src="assets/custom/1.0.0/images/03.jpg" class="rounded-circle" height="32px">
                                </div>
                                <div class="d-none d-lg-inline-block">
                                    <span class="d-block">Pandu Hedo Muhaimin</span>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="login.html">
                                    <i class="fa fa-sign-out" aria-hidden="true"></i> Logout
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- /Top Toolbar -->
                <!-- Main Content -->
                <main>
                    <div class="content-wrapper container-fluid px-5 mt-5 mb-4 trans-03-in-out">
                        @yield('content')
                    </div>
                </main>
                <!-- /Main Content -->
                <!-- Footer -->
                <footer class="bg-white w-100 pl-5 pr-5 pt-4 pb-4 mt-auto">
                    <div>Neuethemes © 2018</div>
                </footer>
                <!-- /Footer -->
            </div>
            <!-- /Main Part -->
        </div>
    </div>

    @include('layouts.footerscript')
</body>

</html>