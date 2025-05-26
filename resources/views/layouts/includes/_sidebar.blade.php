<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

   <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('dashboard') }}">
        <div class="sidebar-brand-icon sidebar-brand-text">
        </div>

            {{-- <div class="sidebarlogo"> --}}
            <img src="{{ asset('assets/img/Logo Matrix WHITE 1 copy.png') }}" class="img-fluid" w-10 alt="whitematrixlogo" style="width: 120px">
            {{-- </div> --}}
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="{{ url('dashboard') }}">
            <i class="fa-solid fa-house"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Components</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Components:</h6>
                <a class="collapse-item" href="{{ url('/alert') }}">Alert & Alert Modal</a>
                <a class="collapse-item" href="{{ url('/badge') }}">Badge</a>
                <a class="collapse-item" href="{{ url('/button') }}">Button</a>
                <a class="collapse-item" href="{{ url('/calendar') }}">Calendar</a>
                <a class="collapse-item" href="{{ url('/canvas') }}">Canvas</a>
                <a class="collapse-item" href="{{ url('/card') }}">Card & Tags</a>
                <a class="collapse-item" href="{{ url('/carousel') }}">Carousel</a>
                <a class="collapse-item" href="{{ url('/checkbox') }}">Check Box</a>
                <a class="collapse-item" href="{{ url('/codesnippet') }}">Code Snippet</a>
                <a class="collapse-item" href="{{ url('/darkmode') }}">Darkmode</a>
                <a class="collapse-item" href="{{ url('/dropdown') }}">Dropdown</a>
                <a class="collapse-item" href="{{ url('/label') }}">Label</a>
                <a class="collapse-item" href="{{ url('/loader')}}">Loader</a>
                <a class="collapse-item" href="{{ url('/magnifier') }}">Magnifier</a>
                <a class="collapse-item" href="{{ url('/notification') }}">Notification</a>
                <a class="collapse-item" href="{{ url('/offcanvas') }}">Off Canvas</a>
                <a class="collapse-item" href="{{ url('/pagination') }}">Pagination</a>
                <a class="collapse-item" href="{{ url('/pdfviewer') }}">PDF Viewer</a>
                <a class="collapse-item" href="{{ url('/popup') }}">Popup</a>
                <a class="collapse-item" href="{{ url('/texteditor') }}">Texteditor</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Utilities</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Utilities:</h6>
                <a class="collapse-item" href="{{ url('/color') }}">Colors</a>
                <a class="collapse-item" href="{{ url('/font') }}">Font</a>
                <a class="collapse-item" href="{{ url('/form') }}">Form</a>
                <a class="collapse-item" href="{{ url('/icon') }}">Icon</a>
                <a class="collapse-item" href="{{ url('/logo') }}">Logo</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Addons
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
     <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
            aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Pages</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Login Screens:</h6>
                <a class="collapse-item" href="{{ url('/login')}}">Login</a>
                <a class="collapse-item" href="{{ url('/register')}}">Register</a>
                <a class="collapse-item" href="{{ url('/forgetpassword') }}">Forgot Password</a>
                <div class="collapse-divider"></div>
                <h6 class="collapse-header">Other Pages:</h6>
                <a class="collapse-item" href="{{ url('/404')}}">404 Page</a>
                <a class="collapse-item" href="{{ url('/blankpage')}}">Blank Page</a>
                <a class="collapse-item" href="{{ url('/onprogress')}}">On Progress</a>
                <a class="collapse-item" href="{{ url('/undermaintanance')}}">Under Maintanance</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="{{ url('charts') }}">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Charts</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="{{ url('table') }}">
            <i class="fas fa-fw fa-table"></i>
            <span>Tables</span></a>
    </li>

   <!-- Nav Item - Loginpage -->
   <li class="nav-item">
        <a class="nav-link" href="{{ url('loginpage') }}">
            <!-- <i class="fas fa-fw fa-tachometer-alt"> -->
            <i>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"><path fill="currentColor" d="M3 12a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1zm0 8a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1zm10 0a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-8a1 1 0 0 0-1-1h-6a1 1 0 0 0-1 1zm1-17a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1z"/></svg>
            </i>
            <span>LoginPage</span></a>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>