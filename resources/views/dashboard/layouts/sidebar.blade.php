<nav class="pc-sidebar ">
    <div class="navbar-wrapper">
        <div class="m-header">
            <a href="{{ url('/dashboard') }}" class="b-brand">
                <img src="https://i.postimg.cc/B6nsCC9P/logo.png" alt="" class="logo logo-lg" width="80" height="40">
                <img src="https://i.postimg.cc/B6nsCC9P/logo.png" alt="" class="logo logo-sm" width="80" height="40">
            </a>
        </div>
        <div class="navbar-content">
            <ul class="pc-navbar">
                <li class="pc-item pc-caption">
                    <label>Navigation</label>
                </li>
                <li class="pc-item">
                    <a href="{{ url('/dashboard') }}" class="pc-link "><span class="pc-micon"><i
                                class="material-icons-two-tone">home</i></span><span
                            class="pc-mtext">Dashboard</span></a>
                </li>
                <li class="pc-item {{ request()->is('*pasaran*') ? 'active' : '' }}">
                    <a href="{{ route('pasaran.index') }}" class="pc-link "><span class="pc-micon"><i
                                class="material-icons-two-tone">storefront</i></span><span
                            class="pc-mtext">Pasaran</span></a>
                </li>
                <li class="pc-item {{ request()->is('*syair*') ? 'active' : '' }}">
                    <a href="{{ route('syair.index') }}" class="pc-link "><span class="pc-micon"><i
                                class="material-icons-two-tone">menu_book</i></span><span
                            class="pc-mtext">Syair</span></a>
                </li>
                <li class="pc-item {{ request()->is('*prediksi*') ? 'active' : '' }}">
                    <a href="{{ route('prediksi.index') }}" class="pc-link "><span class="pc-micon"><i
                                class="material-icons-two-tone">local_library</i></span><span
                            class="pc-mtext">Prediksi</span></a>
                </li>
                <li class="pc-item">
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                        class="pc-link">
                        <span class="pc-micon"><i class="material-icons-two-tone">power_settings_new</i></span><span
                            class="pc-mtext">Logout</span>
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>