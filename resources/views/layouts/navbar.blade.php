<div class="menu-wrapper float-left">
    <nav id="mega-menu-holder" class="clearfix">
        <ul class="clearfix">
                <li class="{{ request()->is('/') ? 'active' : '' }}">
                    <a href="{{ route('beranda') }}">Beranda</a>
                </li>
                <li class="{{ request()->is('divisi/') ? 'active' : '' }}">
                    <a href="#">Divisi</a>
                    <ul class="dropdown">
                        <li><a href="{{ route('bph') }}">BPH</a></li>
                        <li><a href="{{ route('ad') }}">AD</a></li>
                        <li><a href="{{ route('hrd') }}">HRD</a></li>
                        <li><a href="{{ route('idd') }}">IDD</a></li>
                    </ul>
                </li>
                <li class="{{ request()->is('event') ? 'active' : '' }}">
                    <a href="{{ route('event') }}">Event Terkini</a>
                </li>
                <li class="{{ request()->is('profil/ormawa') ? 'active' : '' }}">
                    <a href="{{ route('ormawa') }}">Profil Ormawa FT</a>
                </li>
                <li class="{{ request()->is('galeri') ? 'active' : '' }}"><a href="{{ route('galeri') }}">Galeri</a></li>
        </ul>
    </nav>
</div> 