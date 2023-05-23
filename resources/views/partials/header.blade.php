<header>
    <h1 class="text-danger text-uppercase px-5">netflix</h1>
    <ul class="fw-semibold">
        <li><a href="{{ route('home') }}" class="{{ Request::is('/') ? 'active' : '' }}">home</a></li>
        <li><a href="{{ route('movies.index') }}" class="{{ Request::is('movies') ? 'active' : '' }}">movies</a></li>
    </ul>
</header>
