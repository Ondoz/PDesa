<header class="main-header">

    <!-- Header-Upper -->
    <div class="header-upper">
        <div class="container clearfix">

            <div class="header-inner d-lg-flex align-items-center">

                <div class="logo-outer d-flex align-items-center">
                    <div class="logo"><a href="index.html"><img src="assets/images/logo.png" alt="Logo" /></a></div>
                </div>

                <div class="nav-outer clearfix ml-lg-auto mr-lg-auto">
                    <!-- Main Menu -->
                    <nav class="main-menu navbar-expand-lg">
                        <div class="navbar-header clearfix">
                            <!-- Toggle Button -->
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">
                                {{menu('main','layouts.menu_build')}}
                                {{-- <li class="current-menu-item"><a href="index.html">Home</a></li>
                                <li><a href="about.html">About</a></li>
                                <li><a href="servicedetails.html">Service</a></li>
                                <li><a href="projectdetails.html">Project</a></li>
                                <li><a href="blogdetails.html">Blog</a></li>
                                <li><a href="contact.html">Contact</a></li> --}}
                            </ul>
                        </div>
                    </nav>
                    <!-- Main Menu END -->
                </div>

                <div class="menu-btn">
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/admin') }}" class="text-sm text-gray-700 underline">Halaman Admin</a>
                        {{-- @else
                            <a href="{{ route('login') }}" class="btn theme-btn">Login</a>

                            @if (Route::has('register'))
                                {{-- <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a> --}}
                            {{-- @endif --} --}}
                        @endauth
                    @endif
                </div>

            </div>
        </div>
    </div>
    <!-- END Header Upper -->
</header>
