<header class="navheader py-3 shadow-sm">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand fw-bold text-primary" href="#">
                Kaya Fest
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="{{ route('home') }}" class="btn btn-warning shadow">HOME</a>
                    </li>
                    <li class="nav-item">
                    <a href="{{ route('programma') }}" class="btn btn-warning shadow">PROGRAMMA</a>

                    </li>
                    <li class="nav-item">
                        <a href="{{ route('location') }}" class="btn btn-warning shadow">LOCATION</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('contatti') }}" class="btn btn-warning shadow">CONTATTI</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>
