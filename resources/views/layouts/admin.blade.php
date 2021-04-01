<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="x-ua-compatible" content="ie=edge">

        <title>Baguio Steel Line Trading</title>
        <link rel="stylesheet" href="/bower_components\admin-lte/plugins/fontawesome-free/css/all.min.css">
        <link rel="stylesheet" href="/bower_components\admin-lte/dist/css/adminlte.min.css">
        <link rel="stylesheet" href="/bower_components\admin-lte/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
        <link rel="stylesheet" href="/bower_components\admin-lte/dist/css/adminlte.min.css">
        <link rel="stylesheet" href="/bower_components\admin-lte/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

        
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="/resources/demos/style.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
      <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.13.4/jquery.mask.min.js"></script>
        
    </head>
    <body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <nav class="main-header navbar navbar-expand navbar-dark navbar-teal">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="/home" class="nav-link">Home</a>
                </li>
            </ul>
            <div class="container">
                <ul class="navbar-nav ml-auto">
                         
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
            </div>
        </nav>


  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-teal accent-teal elevation-4">
    <!--Side Bar-->
    <div class="sidebar">
        <!--Blank Space-->
      <div class="user-panel mt-4 pb-4 mb-3 d-flex">
      </div>
      <!--Navigation Buttons-->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!--Contracts-->
            <li class="nav-header">Contracts</li>
            <li class="nav-item">
                    <a href="/contracts/create" class="nav-link">
                    <i class="fas fa-plus-circle nav-icon"></i>
                    <p>Create New Contract</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/contracts/pendings" class="nav-link">
                    <i class="fas fa-pause-circle nav-icon"></i>
                    <p>Pending Contracts</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/contracts/ongoings" class="nav-link">
                    <i class="fas fa-chevron-circle-right nav-icon"></i>
                    <p>Ongoing Contracts</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/contracts/finished" class="nav-link">
                    <i class="fas fa-check-circle nav-icon"></i>
                    <p>Finished Contracts</p>
                    </a>
                </li> 
                
          <li class="nav-header"></li>

            <!--Sales-->    
          <li class="nav-item">
            <a href="/sales" class="nav-link">
            <i class="nav-icon far fa-sticky-note"></i>
              <p>
                Report
              </p>
            </a>
          </li> 

        </ul> 
      </nav>
    </div>
  </aside>

  <!--main Content-->
  <div class="content-wrapper">
    <div class="content-header">
    </div>
    <div class="content">
      <div class="container-fluid">
            @yield('content')
        
      </div>
    </div>
  </div>

<!--Footer-->
  <footer class="main-footer">
        Copyright &copy; 2019 AdminLTE.io All rights reserved.
    </footer>
</div>

        <script src="/bower_components\admin-lte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="/bower_components\admin-lte/plugins/datatables/jquery.dataTables.js"></script>
        <script src="/bower_components\admin-lte/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
        <script src="/bower_components\admin-lte/dist/js/adminlte.min.js"></script>
        <script src="/bower_components\admin-lte/dist/js/demo.js"></script>
</body>
</html>
