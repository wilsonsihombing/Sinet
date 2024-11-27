<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
            <img src="{{ url('frontend/images/lambang bagus.png') }}" alt="logo" style="width: 40px; height: auto;"
                class="py-1">
        </div>
        <div class="sidebar-brand-text mx-1">SINET HIMSI</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{route('dashboard')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('event-package.index') }}">
            <i class="fas fa-calendar-alt"></i> <!-- Ikon kalender acara -->
            <span>Events</span>
        </a>
    </li>
    

    <li class="nav-item">
        <a class="nav-link" href="{{ route('gallery.index') }}">
            <i class="fas fa-fw fas fa-fw fa-images"></i>
            <span>Galeri Events</span></a>
    </li>
    
    <li class="nav-item">
        <a class="nav-link" href="{{ route('upcoming-event.index') }}">
            <i class="fas fa-fw fas fa-fw fa-images"></i>
            <span>Upcoming Events</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('news.index') }}">
            <i class="fas fa-newspaper"></i> <!-- Ikon berita -->
            <span>News</span>
        </a>
    </li>    

    <!-- Divider -->
    <hr class="sidebar-divider">


    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->
