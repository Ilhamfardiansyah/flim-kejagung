<div class="collapse navbar-collapse" id="navbarVerticalCollapse">
    <div class="navbar-vertical-content scrollbar">
        <ul class="navbar-nav flex-column mb-3" id="navbarVerticalNav">
            <li class="nav-item">
                <!-- parent pages--><a class="nav-link {{ Route::is('home') ? 'active' : '' }}" href="{{ route('home') }}"
                    role="button">
                    <div class="d-flex align-items-center">
                        <span class="nav-link-icon"><span class="fas fa-chart-pie"></span></span><span
                            class="nav-link-text ps-1">Dashboard</span>
                    </div>
                </a>

                <!-- parent pages--><a class="nav-link {{ Route::is('form_regis') ? 'active' : '' }}"
                    href="{{ route('form_regis') }}" role="button">
                    <div class="d-flex align-items-center">
                        <span class="nav-link-icon"><span class="fas fa-calendar-alt"></span></span><span
                            class="nav-link-text ps-1">Form Regis</span>
                    </div>
                </a>

                <!-- parent pages--><a class="nav-link {{ Route::is('regist') ? 'active' : '' }}"
                    href="{{ route('regist') }}" role="button" aria-expanded="false">
                    <div class="d-flex align-items-center">
                        <span class="nav-link-icon"><span class="fas fa-comments"></span></span><span
                            class="nav-link-text ps-1">Daftar Regis Masuk</span>
                    </div>
                </a>

                <!-- parent pages--><a class="nav-link {{ Route::is('form_list') ? 'active' : '' }}"
                    href="{{ route('form_list') }}" role="button" aria-expanded="false">
                    <div class="d-flex align-items-center">
                        <span class="nav-link-icon"><span class="fab fa-trello"></span></span><span
                            class="nav-link-text ps-1">Form List Case</span>
                    </div>
                </a>

                <!-- parent pages--><a class="nav-link {{ Route::is('daftar_kasus') ? 'active' : '' }}"
                    href="{{ route('daftar_kasus') }}" role="button" aria-expanded="false">
                    <div class="d-flex align-items-center">
                        <span class="nav-link-icon"><span class="far fa-file-alt"></span></span><span
                            class="nav-link-text ps-1">Daftar Nama Kasus</span>
                    </div>
                </a>

            </li>
            <li class="nav-item">

                <!-- parent pages--><a class="nav-link {{ Route::is('coc') ? 'active' : '' }}"
                    href="{{ route('coc') }}" role="button" aria-expanded="false">
                    <div class="d-flex align-items-center">
                        <span class="nav-link-icon"><span class="fas fa-flag"></span></span><span
                            class="nav-link-text ps-1">Form CoC</span>
                    </div>
                </a>
                <!-- parent pages--><a class="nav-link" href="pages/landing.html" role="button" aria-expanded="false">
                    <div class="d-flex align-items-center">
                        <span class="nav-link-icon"><span class="fas fa-globe"></span></span><span
                            class="nav-link-text ps-1">Daftar CoC</span>
                    </div>
                </a>
                <!-- parent pages--><a class="nav-link {{ Route::is('akuisisi') ? 'active' : '' }}"
                    href="{{ route('akuisisi') }}" role="button" aria-expanded="false">
                    <div class="d-flex align-items-center">
                        <span class="nav-link-icon"><span class="fas fa-handshake"></span></span><span
                            class="nav-link-text ps-1">BA Akuisisi</span>
                    </div>
                </a>
                <!-- parent pages--><a class="nav-link dropdown-indicator" href="#authentication" role="button"
                    data-bs-toggle="collapse" aria-expanded="false" aria-controls="authentication">
                    <div class="d-flex align-items-center">
                        <span class="nav-link-icon"><span class="fas fa-lock"></span></span><span
                            class="nav-link-text ps-1">Laporan</span>
                    </div>
                </a>
                <ul class="nav collapse false" id="authentication">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('laporan') }}" data-bs-toggle="collapse"
                            aria-expanded="false" aria-controls="authentication">
                            <div class="d-flex align-items-center">
                                <span class="nav-link-text ps-1">Kasus</span>
                            </div>

                        </a>
                        <!-- more inner pages-->

                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#card" data-bs-toggle="collapse" aria-expanded="false"
                            aria-controls="authentication">
                            <div class="d-flex align-items-center">
                                <span class="nav-link-text ps-1">CoC</span>
                            </div>
                        </a>
                    </li>
                </ul>
                <!-- parent pages--><a class="nav-link dropdown-indicator" href="#user" role="button"
                    data-bs-toggle="collapse" aria-expanded="false" aria-controls="user">
                    <div class="d-flex align-items-center">
                        <span class="nav-link-icon"><span class="fas fa-user"></span></span><span
                            class="nav-link-text ps-1">Master Data</span>
                    </div>
                </a>
                <ul class="nav collapse false" id="user">
                    <li class="nav-item">
                        <a class="nav-link {{ Route::is('register') ? 'active' : '' }}" href="/register"
                            aria-expanded="false">
                            <div class="d-flex align-items-center">
                                <span class="nav-link-text ps-1">User</span>
                            </div>
                        </a>
                        <!-- more inner pages-->
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/user/settings.html" aria-expanded="false">
                            <div class="d-flex align-items-center">
                                <span class="nav-link-text ps-1">Satker</span>
                            </div>
                        </a>
                        <!-- more inner pages-->
                        <a class="nav-link" href="pages/user/settings.html" aria-expanded="false">
                            <div class="d-flex align-items-center">
                                <span class="nav-link-text ps-1">Pangkat</span>
                            </div>
                        </a>
                        <!-- more inner pages-->
                        <a class="nav-link" href="pages/user/settings.html" aria-expanded="false">
                            <div class="d-flex align-items-center">
                                <span class="nav-link-text ps-1">Jabatan</span>
                            </div>
                        </a>
                    </li>
                </ul>
        </ul>
    </div>
</div>
