<div class="menu-wrapper float-left">
    <nav id="mega-menu-holder" class="clearfix">
        <ul class="clearfix" style="text-align:center;">
            @guest
                {{-- <li class="nav-item">
                    <li class="{{ request()->is('login') ? 'active' : '' }}">
                        <a href="{{ route('login') }}">Login</a>
                    </li>
                </li> --}}
            @else
                <li class="nav-item">
                    <li class="{{ request()->is('admin') ? 'active' : '' }}">
                        <a href="{{ route('admin.index') }}">Beranda</a>
                    </li>
                    <li class="{{ request()->is('admin/kalender') ? 'active' : '' }}">
                        <a href="{{ route('admin.kalender.show') }}">Edit Kalender</a>
                    </li>
                    <li class="{{ request()->is('admin/galeri') ? 'active' : '' }}">
                        <a href="{{ route('admin.galeri.show') }}">Edit Galeri</a>
                    </li>
                </li>
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
        </ul>
    </nav>
</div>

{{-- Supaya responsive --}}
<div class="right-widget float-right">
    <ul>
        <li class="search-option">
            <div class="dropdown" style="visibility: hidden;">
                <button type="button" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-search" aria-hidden="true"></i></button>
            </div>
        </li>
    </ul>
</div>