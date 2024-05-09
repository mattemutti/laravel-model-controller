<header>
    <div class="bg-dark py-4">
        <div class="container">
            <nav class="navbar navbar-expand-sm bg-dark">
                <div class="container-fluid">
                    <div class="collapse navbar-collapse " id="navbarID">
                        <a class="navbar-brand {{ Route::currentRouteName() === 'guests.movies.home' || 'guests.movies.show' ? 'text-primary' : 'text-white' }}"
                            href="{{ route('guests.movies.home') }}">Movies</a>

                        <div class="navbar-nav">

                            <a class="nav-link  {{ Route::currentRouteName() === 'guests.about' ? 'text-primary' : 'text-white' }}"
                                aria-current="page" href="{{ route('guests.about') }}">About</a>
                        </div>
                        <div class="navbar-nav">
                            <a class="nav-link {{ Route::currentRouteName() === 'guests.contacts' ? 'text-primary' : 'text-white' }}"
                                aria-current="page" href="{{ route('guests.contacts') }}">Contacts</a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>
