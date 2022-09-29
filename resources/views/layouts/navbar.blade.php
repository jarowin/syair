{{-- <div class="container-fluid p-0">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ route('welcome') }}">
                <img src="https://i.postimg.cc/B6nsCC9P/logo.png" alt="" class="logo logo-sm" width="70" height="30">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('/') ? 'active' : '' }}"
                            href="{{ route('welcome') }}"><strong>Beranda</strong></a>
                    </li>
                    @foreach ($pasarans as $key => $pasaran)
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('*'.$pasaran->nama) ? 'active' : '' }}"
                            href="{{ route('post.pasaran', $pasaran->nama) }}"><strong>{{ $pasaran->nama }}</strong></a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </nav>
</div> --}}
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container">
        <a class="navbar-brand" href="{{ route('welcome') }}">
            <img src="https://i.postimg.cc/B6nsCC9P/logo.png" alt="" class="logo logo-sm" width="70" height="30">
        </a>
        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse" id="navbarCollapse" style="">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('/') ? 'active' : '' }}"
                        href="{{ route('welcome') }}"><strong>Beranda</strong></a>
                </li>
                @foreach ($pasarans as $key => $pasaran)
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('*'.$pasaran->nama) ? 'active' : '' }}"
                        href="{{ route('post.pasaran', $pasaran->nama) }}"><strong>{{ $pasaran->nama }}</strong></a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</nav>