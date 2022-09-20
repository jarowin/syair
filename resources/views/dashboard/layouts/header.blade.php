<header class="pc-header ">
    <div class="header-wrapper">
        <div class="ml-auto">
            <ul class="list-unstyled">
                <li>
                    <a class="pc-head-link dropdown-toggle arrow-none mr-0" data-toggle="dropdown" href="#"
                        role="button" aria-haspopup="false" aria-expanded="false">
                        <img src="https://i.postimg.cc/D0hrDm6G/favicon.png" alt="user-image" class="user-avtar">
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
                </li>
            </ul>
        </div>

    </div>
</header>
