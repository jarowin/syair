<div class="container">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('welcome') }}">MGAHP</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{ route('welcome') }}"><strong>Beranda</strong></a>
                    </li>
                    @foreach ($pasarans as $key => $pasaran)
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('*'.$pasaran->nama) ? 'active' : '' }}" href="{{ route('post.pasaran', $pasaran->nama) }}"><strong>{{ $pasaran->nama }}</strong></a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </nav>
</div>