<div class="container">
    <nav class="navbar navbar-expand-lg m-0">
        <a class="navbar-brand" href="#">Laravel Model Controller</a>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link { Route::currentRouteName() === 'guests.home' ? 'active' : ''}}"
                        href="{{ route('guests.home') }}">Home</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link { Route::currentRouteName() === 'guests.movies' ? 'active' : ''}}"
                        href="{{ route('guests.movies') }}">Movies</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link { Route::currentRouteName() === 'guests.tvshows' ? 'active' : ''}}"
                        href="{{ route('guests.tvshows') }}">TV Shows</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link { Route::currentRouteName() === 'guests.people' ? 'active' : ''}}"
                        href="{{ route('guests.people') }}">People</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link { Route::currentRouteName() === 'guests.more' ? 'active' : ''}}"
                        href="{{ route('guests.more') }}">More</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- /.navbar -->
</div>
<!-- /.container -->
