<header>
    <div class="topbar">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 text-sm">
                    <div class="site-info">
                        <a href="#"><span class="mai-call text-primary"></span> 01743347457457</a>
                        <span class="divider">|</span>
                        <a href="#"><span class="mai-mail text-primary"></span> research-club@gmail.com</a>
                    </div>
                </div>
                <div class="col-sm-4 text-right text-sm">
                    <div class="social-mini-button">
                        <a href="#"><span class="mai-logo-facebook-f"></span></a>
                        <a href="#"><span class="mai-logo-twitter"></span></a>
                        <a href="#"><span class="mai-logo-dribbble"></span></a>
                        <a href="#"><span class="mai-logo-instagram"></span></a>
                    </div>
                </div>
            </div> <!-- .row -->
        </div> <!-- .container -->
    </div> <!-- .topbar -->

    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('home') }}"><img src="./assets/img/research_icon.png" alt=""></a>

            <form action="#">
                <div class="input-group input-navbar">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="icon-addon1"><span class="mai-search"></span></span>
                    </div>
                    <input type="text" class="form-control"  aria-label="Username" aria-describedby="icon-addon1">
                </div>
            </form>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupport">
                <ul class="navbar-nav ml-auto">



                    <div class="dropdown">
                        <button class="nav-link dropdown-toggle"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            Projects
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="{{ url('web_project') }}">Web Development</a>
                            <a class="dropdown-item" href="{{ url('mobile_application') }}">Mobile Application</a>
                            <a class="dropdown-item" href="{{ url('thesis') }}">Thesis</a>
                        </div>
                    </div>


                    @if(Route::has('login'))
                        @auth

                            <li class="nav-item">
                                <a class="btn btn-primary ml-lg-3" href={{ url('profile') }}>My Profile </a>
                            </li>

                            <li class="nav-item">
                                <a class="btn btn-primary ml-lg-3" href={{ route('team.show') }}>My Team </a>
                            </li>



                            <div class="dropdown">
                                <button class="nav-link dropdown-toggle"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    My Work
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="{{ url('create_project') }}">Create New Project</a>
                                    <a class="dropdown-item" href="{{ url('project_details') }}">My Project Details</a>

                                </div>
                            </div>
                            <x-app-layout>
                            </x-app-layout>

                        @else
                            <li class="nav-item">
                                <a class="btn btn-primary ml-lg-3" href={{ route('login') }}>Login </a>
                            </li>

                            <li class="nav-item">
                                <a class="btn btn-primary ml-lg-3" href="{{ route('register') }}">Register </a>
                            </li>
                        @endauth
                    @endif


                </ul>
            </div> <!-- .navbar-collapse -->
        </div> <!-- .container -->
    </nav>
</header>
