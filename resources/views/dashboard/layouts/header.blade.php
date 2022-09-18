<header class="pc-header ">
    <div class="header-wrapper">
        <div class="ml-auto">
            <ul class="list-unstyled">
                <li class="dropdown pc-h-item">
                    <a class="pc-head-link dropdown-toggle arrow-none mr-0" data-toggle="dropdown" href="#"
                        role="button" aria-haspopup="false" aria-expanded="false">
                        <img src="https://i.postimg.cc/ZR5qwycH/apple-touch-icon.png" alt="user-image" class="user-avtar" width="50" height="50">
                        <span>
                            <span class="user-name">{{ auth()->user()->name }}</span>
                            <span class="user-desc">
                                @if (auth()->user()->isAdmin == 1)
                                Adminstrator
                                @else
                                Normal User
                                @endif
                            </span>
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right pc-h-dropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault(); 
                                document.getElementById('logout-form').submit();">
                            <i class="material-icons-two-tone">chrome_reader_mode</i>
                            <span>Logout</span>
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>
        </div>

    </div>
</header>
