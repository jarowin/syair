<nav class="pc-sidebar ">
    <div class="navbar-wrapper">
        <div class="m-header">
            <a href="{{ url('/dashboard') }}" class="b-brand">
                <!-- ========   change your logo hear   ============ -->
                <img src="https://i.postimg.cc/ZR5qwycH/apple-touch-icon.png" alt="" class="logo logo-lg" width="50" height="50">
                <img src="https://i.postimg.cc/ZR5qwycH/apple-touch-icon.png" alt="" class="logo logo-sm" width="50" height="50">
            </a>
        </div>
        <div class="navbar-content">
            <ul class="pc-navbar">
                <li class="pc-item pc-caption">
                    <label>Navigation</label>
                </li>
                <li class="pc-item">
                    <a href="{{ url('/dashboard') }}" class="pc-link "><span class="pc-micon"><i class="material-icons-two-tone">home</i></span><span class="pc-mtext">Dashboard</span></a>
                </li>
                <li class="pc-item {{ request()->is('*pasaran*') ? 'active' : '' }}">
                    <a href="{{ route('pasaran.index') }}" class="pc-link "><span class="pc-micon"><i class="material-icons-two-tone">storefront</i></span><span class="pc-mtext">Pasaran</span></a>
                </li>
                <li class="pc-item {{ request()->is('*syair*') ? 'active' : '' }}">
                    <a href="{{ route('syair.index') }}" class="pc-link "><span class="pc-micon"><i class="material-icons-two-tone">history_edu</i></span><span class="pc-mtext">Syair</span></a>
                </li>
                <li class="pc-item {{ request()->is('*prediksi*') ? 'active' : '' }}">
                    <a href="{{ route('prediksi.index') }}" class="pc-link "><span class="pc-micon"><i class="material-icons-two-tone">lightbulb_outline</i></span><span class="pc-mtext">Prediksi</span></a>
                </li>
                
                {{-- <li class="pc-item {{ request()->is('*sosmed*') ? 'active' : '' }}">
                    <a href="{{ route('sosmed.index') }}" class="pc-link "><span class="pc-micon"><i class="material-icons-two-tone">menu_book</i></span><span class="pc-mtext">Sosmed</span></a>
                </li>
                
                <li class="pc-item {{ request()->is('*games*') ? 'active' : '' }}">
                    <a href="{{ route('games.index') }}" class="pc-link "><span class="pc-micon"><i class="material-icons-two-tone">star</i></span><span class="pc-mtext">Games</span></a>
                </li> --}}
            </ul>
        </div>
    </div>
</nav>