<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Quote Manager</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="{{asset('dist/style4.css')}}">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

</head>

<body>
@if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
@endif
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>Quote Manager</h3>
                <strong>QM</strong>
            </div>

            <ul class="list-unstyled components">
                <li class="active">
                    <a href="#customerSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-users"></i>
                        Manage Customer
                    </a>
                    <ul class="collapse list-unstyled" id="customerSubmenu">
                        <li>
                            <a href="{{route('customers.index')}}">Customer</a>
                        </li>
                        {{-- <li>
                            <a href="#">Home 2</a>
                        </li>
                        <li>
                            <a href="#">Home 3</a>
                        </li> --}}
                    </ul>
                </li>
                <li>
                    <a href="#roomSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-home"></i>
                        Manage Rooms Elevations
                    </a>
                    <ul class="collapse list-unstyled" id="roomSubmenu">
                        <li>
                            <a href="#">Rooms Elevations</a>
                        </li>
                        {{-- <li>
                            <a href="#">Home 2</a>
                        </li>
                        <li>
                            <a href="#">Home 3</a>
                        </li> --}}
                    </ul>
                </li>
                <li>
                    <a href="#glassSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-window-restore"></i>
                        Manage Glass
                    </a>
                    <ul class="collapse list-unstyled" id="glassSubmenu">
                        <li>
                            <a href="{{route('glass.typeindex')}}">Glass Type</a>
                        </li>
                        <li>
                            <a href="{{route('glass.subtypeindex')}}">Glass Subtype</a>
                        </li>
                        <li>
                            <a href="{{route('glass.materialindex')}}">Glass Material</a>
                        </li>
                        <li>
                            <a href="{{route('glass.hwindex')}}">Glass Height-Width</a>
                        </li>
                        <li>
                            <a href="#">Crate Final Glass Price</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#benchSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        {{-- <i class="fas fa-copy"></i> --}}
                        <i class="fas fa-square"></i>
                        Manage Benchtop
                    </a>
                    <ul class="collapse list-unstyled" id="benchSubmenu">
                        <li>
                            <a href="{{route('benchtop.indextype')}}">Benchtop Type</a>
                        </li>
                        <li>
                            <a href="{{route('benchtop.indexmain')}}">Bentop Category</a>
                        </li>
                        <li>
                            <a href="{{route('benchtop.indexsub')}}">Bentop Sub Category</a>
                        </li>
                        <li>
                            <a href="{{route('benchtop.indexmaterials')}}">Bentop Materials</a>
                        </li>
                        <li>
                            <a href="{{route('benchtop.indexwidth')}}">Bentop Width</a>
                        </li>
                        <li>
                            <a href="#">Bentop Price</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#accessoriesSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        {{-- <i class="fas fa-copy"></i> --}}
                        <i class="fas fa-briefcase"></i>
                        Manage Accessories
                    </a>
                    <ul class="collapse list-unstyled" id="accessoriesSubmenu">
                        <li>
                            <a href="{{route('accessories.indexmain')}}">Accessories Category</a>
                        </li>
                        <li>
                            <a href="{{route('accessories.indexsub')}}">Accessories Sub Category</a>
                        </li>
                        <li>
                            <a href="{{route('accessories.indexmaterials')}}">Accessories Materials</a>
                        </li>
                        <li>
                            <a href="#">Accessories Price</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#doorsSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        {{-- <i class="fas fa-copy"></i> --}}
                        <i class="fas fa-door-open"></i>
                        Manage Doors                    </a>
                    <ul class="collapse list-unstyled" id="doorsSubmenu">
                        <li>
                            <a href="{{route('door.indexmain')}}">Door Category</a>
                        </li>
                        <li>
                            <a href="{{route('door.indexsub')}}">Door Sub Category</a>
                        </li>
                        <li>
                            <a href="{{route('door.indexmaterials')}}">Door Materials</a>
                        </li>
                        <li>
                            <a href="{{route('door.indexfinishing')}}">Door Finishing</a>
                        </li>
                        <li>
                            <a href="{{route('door.indexcolor')}}">Door Color</a>
                        </li>
                        <li>
                            <a href="#">Door Price</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#mouldingSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-copy"></i>
                        Manage Steel
                    </a>
                    <ul class="collapse list-unstyled" id="mouldingSubmenu">
                        <li>
                            <a href="{{route('steel.indexmain')}}">Steel category</a>
                        </li>
                        <li>
                            <a href="{{route('steel.indexsub')}}">Steel sub category</a>
                        </li>
                        <li>
                            <a href="">Steel price</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#benchtopSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-copy"></i>
                        Manage Quote
                    </a>
                    <ul class="collapse list-unstyled" id="benchtopSubmenu">
                        <li>
                            <a href="#">All Ouote</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#cabinateSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-copy"></i>
                        Manage Cabinate
                    </a>
                    <ul class="collapse list-unstyled" id="cabinateSubmenu">
                        {{-- <li>
                            <a href="{{route('cabinate.showproducts')}}">Cabinate products</a>
                        </li>
                        <li>
                            <a href="#">Cabinate Sub products</a>
                        </li> --}}
                        <li>
                            <a href="{{route('cabinate.showCategory')}}">Manage category</a>
                        </li>
                        <li>
                            <a href="{{route('cabinate.showSubCategory')}}">Manage sub-category</a>
                        </li>
                        <li>
                            <a href="{{route('cabinate.showUnit')}}">Manage unit</a>
                        </li>
                    </ul>
                </li>
                {{-- <li>
                    <a href="#splashbacksSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-copy"></i>
                        Manage Splashbacks
                    </a>
                    <ul class="collapse list-unstyled" id="splashbacksSubmenu">
                        <li>
                            <a href="#">Splashbacks</a>
                        </li>
                        <li>
                            <a href="#">Page 2</a>
                        </li>
                        <li>
                            <a href="#">Page 3</a>
                        </li>
                    </ul>
                </li> --}}
                {{-- <li>
                    <a href="#steelSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-copy"></i>
                        Manage Steel
                    </a>
                    <ul class="collapse list-unstyled" id="steelSubmenu">
                        <li>
                            <a href="#">Steels</a>
                        </li>
                        <li>
                            <a href="#">Page 2</a>
                        </li>
                        <li>
                            <a href="#">Page 3</a>
                        </li>
                    </ul>
                </li> --}}
            </ul>
        </nav>

        <!-- Page Content  -->
        <div id="app2">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span></span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <a class="btn btn-info" href="{{route('home')}}">
                                Create Quote
                            </a>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
                <main class="py-4">
                    @include('flash-message')
                    @yield('content')
                </main>
        </div>
    </div>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
    
</body>

</html>