<header class="main-header">

    <!-- Header-Upper -->
    <div class="header-upper">
        <div class="container clearfix">

            <div class="header-inner d-lg-flex align-items-center">

                <div class="logo-outer d-flex align-items-center">
                    <div class="logo"><a href="index.html"><img src="{{ Voyager::image(setting('site.logo')) }}" alt="Logo" style="height: 80px"/><span style="color: #FC5546;"><b> DESA </span> <span style="color: #000"> SENDANGADI</b></span></a></div>
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
                            </ul>
                        </div>
                    </nav>
                    <!-- Main Menu END -->
                </div>

            </div>
        </div>
    </div>
    <!-- END Header Upper -->
</header>
