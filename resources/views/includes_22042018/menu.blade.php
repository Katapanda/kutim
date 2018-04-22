<!-- Menu Area -->
<section class="menu-area">
    <div class="container">
        <div class="menu-content">
            <div class="row">
                <div class="col-lg-10 col-md-12">
                    <ul class="list-unstyled list-inline">
                        <li class="list-inline-item {{ (\Request::route()->getName() == 'beranda') ? 'active' : '' }}"><a href="{{ route('beranda') }}">BERANDA</a></li>
                        <li class="list-inline-item {{ (\Request::route()->getName() == 'profil') ? 'active' : '' }}"><a>PROFIL<i class="fa fa-angle-down"></i></a>
                            <ul class="list-unstyled">
                                <li>
                                    <a data-toggle="modal" data-target="#sambutan-modal">SAMBUTAN</a>
                                </li>
                                <li class="{{ (\Request::route()->getName() == 'sejarah') ? 'active' : '' }}">
                                    <a href="{{ route('sejarah') }}">SEJARAH</a>
                                </li>
                                <li class="{{ (\Request::route()->getName() == 'struktur_organisasi') ? 'active' : '' }}">
                                    <a href="{{ route('struktur_organisasi') }}">STRUKTUR ORGANISASI</a>
                                </li>
                                <li class="{{ (\Request::route()->getName() == 'tupoksi') ? 'active' : '' }}">
                                    <a href="{{ route('tupoksi') }}">TUPOKSI</a>
                                </li>
                                <li class="{{ (\Request::route()->getName() == 'visi_misi') ? 'active' : '' }}">
                                    <a href="{{ route('visi_misi') }}">VISI DAN MISI</a>
                                </li>
                                
                            </ul>
                        </li>
                        <li class="list-inline-item {{ (\Request::route()->getName() == 'berita') ? 'active' : '' }}">
                            <a href="{{ route('berita') }}">BERITA</a>
                        </li>
                        <li class="list-inline-item {{ (\Request::route()->getName() == 'artikel') ? 'active' : '' }}">
                            <a href="{{ route('artikel') }}">ARTIKEL</a>
                        </li>
                        <li class="list-inline-item {{ (\Request::route()->getName() == 'agenda') ? 'active' : '' }}">
                            <a href="{{ route('agenda') }}">AGENDA</a>
                        </li>
                        <li class="list-inline-item {{ (\Request::route()->getName() == 'pengumuman') ? 'active' : '' }}">
                            <a href="{{ route('pengumuman') }}">PENGUMUMAN</a>
                        </li>
                        <li class="list-inline-item {{ (\Request::route()->getName() == 'foto') ? 'active' : '' }}">
                            <a href="{{ route('foto') }}">FOTO</a>
                        </li>
                        <li class="list-inline-item {{ (\Request::route()->getName() == 'video') ? 'active' : '' }}">
                            <a href="{{ route('video') }}">VIDEO</a>
                        </li>
                        <li class="list-inline-item {{ (\Request::route()->getName() == 'peta') ? 'active' : '' }}">
                            <a href="{{ route('peta') }}">PETA</a>
                        </li>
                        <li class="list-inline-item {{ (\Request::route()->getName() == 'kontak') ? 'active' : '' }}">
                            <a href="{{ route('kontak') }}">KONTAK</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-12">
                    <div class="clock text-right">
                        <span id="dg-clock"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Menu Area -->

<!-- Mobile Menu -->
<section class="mobile-menu-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="mobile-menu">
                    <nav id="dropdown">
                        <a href="{{ route('beranda') }}"><img src="{{ asset('assets_frontend/images/logo.png') }}" alt="" class="img-fluid" width="400" height="800"></a>
                        <a href=""><i class="fa fa-home"></i></a>
                        <ul>
                            <li class="list-inline-item"><a href="{{ route('beranda') }}">Beranda</a></li>
                            <li class="list-inline-item"><a href="">PROFIL</a>
                                <ul class="list-unstyled">
                                    <li>
                                        <a data-toggle="modal" data-target="#sambutan-modal">SAMBUTAN</a>
                                    </li>
                                    <li class="{{ (\Request::route()->getName() == 'sejarah') ? 'active' : '' }}">
                                        <a href="{{ route('sejarah') }}">SEJARAH</a>
                                    </li>
                                    <li class="{{ (\Request::route()->getName() == 'struktur_organisasi') ? 'active' : '' }}">
                                        <a href="{{ route('struktur_organisasi') }}">STRUKTUR ORGANISASI</a>
                                    </li>
                                    <li class="{{ (\Request::route()->getName() == 'tupoksi') ? 'active' : '' }}">
                                        <a href="{{ route('tupoksi') }}">TUPOKSI</a>
                                    </li>
                                    <li class="{{ (\Request::route()->getName() == 'visi_misi') ? 'active' : '' }}">
                                        <a href="{{ route('visi_misi') }}">VISI DAN MISI</a>
                                    </li>
                                    
                                </ul>
                            </li>
                            <li class="list-inline-item {{ (\Request::route()->getName() == 'berita') ? 'active' : '' }}">
                                <a href="{{ route('berita') }}">BERITA</a>
                            </li>
                            <li class="list-inline-item {{ (\Request::route()->getName() == 'artikel') ? 'active' : '' }}">
                                <a href="{{ route('artikel') }}">ARTIKEL</a>
                            </li>
                            <li class="list-inline-item {{ (\Request::route()->getName() == 'agenda') ? 'active' : '' }}">
                                <a href="{{ route('agenda') }}">AGENDA</a>
                            </li>
                            <li class="list-inline-item {{ (\Request::route()->getName() == 'pengumuman') ? 'active' : '' }}">
                                <a href="{{ route('pengumuman') }}">PENGUMUMAN</a>
                            </li>
                            <li class="list-inline-item {{ (\Request::route()->getName() == 'foto') ? 'active' : '' }}">
                                <a href="{{ route('foto') }}">FOTO</a>
                            </li>
                            <li class="list-inline-item {{ (\Request::route()->getName() == 'video') ? 'active' : '' }}">
                                <a href="{{ route('video') }}">VIDEO</a>
                            </li>
                            <li class="list-inline-item {{ (\Request::route()->getName() == 'peta') ? 'active' : '' }}">
                                <a href="{{ route('peta') }}">PETA</a>
                            </li>
                            <li class="list-inline-item {{ (\Request::route()->getName() == 'kontak') ? 'active' : '' }}">
                                <a href="{{ route('kontak') }}">KONTAK</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Mobile Menu -->