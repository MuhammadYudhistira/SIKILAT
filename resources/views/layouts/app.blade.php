<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title')</title>

    <!-- tab icon -->
    <link rel="shortcut icon" href="{{ asset('logoPuskesmas.ico') }}" type="image/x-icon">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- icon -->
    <link rel="stylesheet" href="{{ asset('icon/css/all.css') }}">

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.2/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.4.0/css/responsive.bootstrap4.min.css"> -->

    <!-- W3school -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">



    <!-- data tables -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- my style -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.15.16/dist/css/uikit.min.css" />

    <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.15.16/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.15.16/dist/js/uikit-icons.min.js"></script>
</head>

<body style="background-color: white">
    <div id="app">
        <!-- navbar-side -->
        <nav class="navbar-side" id="navbar-side" style=" background-color: #013555;">
            <div class="text-center mt-1" style="width:40px; ">
                <a href="" align="center">
                    <img src="{{ asset('img/logobpsdm.png') }}" alt="logo BPSDM" class="logo" style="margin-left:20px">

                </a>
            </div>
            <div class="menu-list  pt-3">
                <div class="menu-item" >
                    <a href="/" class="menu-link nav-link "><i class="fas fa-home icon"></i><b>Dashboard</b></a>
                </div>

                <div class="menu-item">
                    <a href="/tamu" class="menu-link nav-link "><i class="fas fa-users icon"></i>Data Tamu</a>
                </div>

                <div class="menu-item">
                    <div class="nav__dropdown">
                        <a href="#" class="menu-link nav_link" style="margin-left: 20px; " >
                            <i class="fas fa-bed icon" aria-hidden="true"></i>
                            <span class="nav__name">Kelola Kamar</span>
                            <i class="fa fa-caret-down" style="margin-left:45px"></i>
                        </a>
                        <div class="nav__dropdown-collapse">
                            <div class="nav__dropdown-content">
                                <a href="/tipe" class="nav__dropdown-item">Tipe Kamar</a>
                                <a href="/kamar" class="nav__dropdown-item">Detail Kamar</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="menu-item" style="margin-top: 10px">
                    <a href="/laporan" class="menu-link nav-link"><i class="fas fa-book icon"  ></i><b>Laporan</b></a>
                </div>
            </div>
            <div class="logout mt-3 text-center">
                <form action="/auth/logout" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-primary px-5">Logout</button>
                </form>
            </div>
        </nav>

        <!-- navbar-top -->
        <nav class="navbar navbar-top fixed-top navbar-light bg-white py-1" id="navbar-top" style="box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
            <div class="container-fluid px-4">
                <!-- burger icon toggle -->
                <div class="position-relative">
                    <input type="checkbox" name="sidebar-toggle" id="sidebar-toggle" class="position-absolute start-0" style="cursor: pointer;">
                    <span><i class="fas fa-bars burger-icon"></i></span>
                </div>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto" >
                    <span>Hello, I'm {{auth()->user()->name}}</span>
                </ul>
            </div>
        </nav>

        <main class="content mb-5" id="content">
            <div class="container-fluid">
                @yield('bread_crumb')
                @yield('content')
            </div>
        </main>
        <footer>
            <p class="text-center">&copy 2023 Build by BPSDM Prov.Sumbar</p>
        </footer>
    </div>

    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- data tables -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js" defer></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js" defer></script>



    <!-- icon -->
    <script src="{{ asset('icon/js/all.js') }}"></script>

    <!-- my script -->
    <script src="{{ asset('js/navbar.js') }}"></script>
    @yield('script')

    <!-- Script SideBar -->
    <script>
function myAccFunc() {
  var x = document.getElementById("demoAcc");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
    x.previousElementSibling.className += " w3-white";
  } else {
    x.className = x.className.replace(" w3-show", "");
    x.previousElementSibling.className =
    x.previousElementSibling.className.replace(" w3-white", "");
  }
}
</script>

<!-- script submenu sidebar bootstrap -->
<script>
  // Hide submenus
$('#body-row .collapse').collapse('hide');

// Collapse/Expand icon
$('#collapse-icon').addClass('fa-angle-double-left');

// Collapse click
$('[data-toggle=sidebar-colapse]').click(function() {
    SidebarCollapse();
});

function SidebarCollapse () {
    $('.menu-collapsed').toggleClass('d-none');
    $('.sidebar-submenu').toggleClass('d-none');
    $('.submenu-icon').toggleClass('d-none');
    $('#sidebar-container').toggleClass('sidebar-expanded sidebar-collapsed');

    // Treating d-flex/d-none on separators with title
    var SeparatorTitle = $('.sidebar-separator-title');
    if ( SeparatorTitle.hasClass('d-flex') ) {
        SeparatorTitle.removeClass('d-flex');
    } else {
        SeparatorTitle.addClass('d-flex');
    }

    // Collapse/Expand icon
    $('#collapse-icon').toggleClass('fa-angle-double-left fa-angle-double-right');
}


</script>
</body>
</html>
