<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

@if (isset($breadCrumbs) && $breadCrumbs)

    @foreach ($breadCrumbs as $key => $breadCrumb)
        <div class="mx-2">
            <span class="py-1 px-2 badge badge-primary">{{ Str::title($key) }}</span><br>
            <h4 class="h4 mb-0 text-gray-800">{{ $breadCrumb }} -</h4>
        </div>
    @endforeach
    <div class="mx-2 pt-3">
        <h4 class="h4 mb-0 text-gray-800">@yield('page-heading')</h4>
    </div>

@else
    <h4 class="h4 mb-0 text-gray-800">@yield('page-heading')</h4>
@endif

    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>

    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">

        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">John Doe</span>
                <img class="img-profile rounded-circle" src="{{ asset('portal/images/avatar.jpg') }}">
            </a>
        </li>

    </ul>
</nav>
