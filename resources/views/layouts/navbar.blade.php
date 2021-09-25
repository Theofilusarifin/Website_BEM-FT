<div class="menu-wrapper float-left">
    <nav id="mega-menu-holder" class="clearfix">
        <ul class="clearfix">
                <li class="{{ request()->is('/') ? 'active' : '' }}">
                    <a href="{{ route('beranda') }}">Beranda</a>
                </li>
                <li class="{{ request()->is('BPH') ? 'active' : '' }}{{ request()->is('AD') ? 'active' : '' }}{{ request()->is('HRD') ? 'active' : '' }}{{ request()->is('IDD') ? 'active' : '' }}">
                    <a style="pointer-events: none; cursor: default;" href="#">Divisi</a>
                    <ul class="dropdown">
                        <li><a href="{{ route('bph') }}">BPH</a></li>
                        <li><a href="{{ route('ad') }}">AD</a></li>
                        <li><a href="{{ route('hrd') }}">HRD</a></li>
                        <li><a href="{{ route('idd') }}">IDD</a></li>
                    </ul>
                </li>
                <li class="{{ request()->is('tour') ? 'active' : '' }}{{ request()->is('gform') ? 'active' : '' }}{{ request()->is('event') ? 'active' : '' }}">
                    <a style="pointer-events: none; cursor: default;" href="#">Info Mahasiswa</a>
                    <ul class="dropdown">
                        <li><a href="{{ route('event') }}">Kalender Kegiatan FT</a></li>
                        <li><a href="{{ route('tour') }}">Campus Tour</a></li>
                        <li><a href="{{ route('gform') }}">Gform Prestasi</a></li>
                    </ul>
                </li>
                <li class="{{ request()->is('profil/ormawa') ? 'active' : '' }}">
                    <a href="{{ route('ormawa') }}">Ormawa FT</a>
                </li>
                <li class="{{ request()->is('galeri') ? 'active' : '' }}"><a href="{{ route('galeri') }}">Galeri</a></li>
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