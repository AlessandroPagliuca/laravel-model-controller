<header>
    <div class="row container">
        <div class="col-6">
            <h1 class="text-danger text-uppercase">netflix</h1>

        </div>
        <div class="col-6">
            <ul class="fw-semibold">
                <li><a href="{{ route('home') }}" class="{{ Request::is('/') ? 'active' : '' }}">home</a></li>
                <li><a href="{{ route('movies.index') }}" class="{{ Request::is('movies') ? 'active' : '' }}">movies</a>
                </li>
            </ul>
        </div>
    </div>

</header>
