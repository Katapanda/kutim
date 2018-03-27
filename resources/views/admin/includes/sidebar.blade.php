<!-- Side-Nav-->
<aside class="main-sidebar hidden-print " >
  <section class="sidebar" id="sidebar-scroll">
    
    <div class="user-panel">
      <div class="f-left image"><img src="{{ asset('assets/images/avatar-1.png') }}" alt="User Image" class="img-circle">
      </div>
      <div class="f-left info">
        <p>Irfan Rangga Gumilar</p>
        <p class="designation">ADMIN <i class="icofont icofont-caret-down m-l-5"></i></p>
      </div>
    </div>
    <!-- sidebar profile Menu-->
    <ul class="nav sidebar-menu extra-profile-list">
      <li>
        <a class="waves-effect waves-dark" href="profile.html">
          <i class="icon-user"></i>
          <span class="menu-text">View Profile</span>
          <span class="selected"></span>
        </a>
      </li>
      <li>
        <a class="waves-effect waves-dark" href="javascript:void(0)">
          <i class="icon-logout"></i>
          <span class="menu-text">Logout</span>
          <span class="selected"></span>
        </a>
      </li>
    </ul>
    <!-- Sidebar Menu-->
    <ul class="sidebar-menu">
      <li class="nav-level">Navigasi & Master</li>
      <li class="treeview {{ (\Request::route()->getName() == 'dashboard') ? 'active' : '' }}">
        <a class="waves-effect waves-dark" href="{{ route('dashboard') }}">
          <i class="icon-speedometer"></i><span> Beranda</span>
        </a>
      </li>
      <li class="treeview {{ (\Request::route()->getName() == 'user_role.index') ? 'active' : '' }}">
        <a class="waves-effect waves-dark" href="{{ route('user_role.index') }}">
          <i class="icon-list"></i><span> User Role</span>
        </a>
      </li>
      <li class="treeview {{ (\Request::route()->getName() == 'artikel.index') ? 'active' : '' }}">
        <a class="waves-effect waves-dark" href="{{ route('artikel.index') }}">
          <i class="icon-list"></i><span> Artikel</span>
        </a>
      </li>
      <li class="treeview {{ (\Request::route()->getName() == 'agenda.index') ? 'active' : '' }}">
        <a class="waves-effect waves-dark" href="{{ route('agenda.index') }}">
          <i class="icon-list"></i><span> Agend</span>
        </a>
      </li>
      <li class="treeview {{ (\Request::route()->getName() == 'berita.index') ? 'active' : '' }}">
        <a class="waves-effect waves-dark" href="{{ route('berita.index') }}">
          <i class="icon-list"></i><span> Berita</span>
        </a>
      </li>

      <li class="treeview {{ (\Request::route()->getName() == 'so.index') ? 'active' : '' }}">
        <a class="waves-effect waves-dark" href="{{ route('so.index') }}">
          <i class="icon-list"></i><span> Struktur Organisasi</span>
        </a>
      </li>
      <li class="treeview {{ (\Request::route()->getName() == 'user.index') ? 'active' : '' }}">
        <a class="waves-effect waves-dark" href="{{ route('user.index') }}">
          <i class="icon-user"></i><span> User Account</span>
        </a>
      </li>
      <li class="treeview {{ (\Request::route()->getName() == 'gambaranumum.index') ? 'active' : '' }}">
        <a class="waves-effect waves-dark" href="{{ route('gambaranumum.index') }}">
          <i class="icon-user"></i><span> Gambaran Umum</span>
        </a>
      </li>
      <li class="treeview {{ (\Request::route()->getName() == 'tupoksi.index') ? 'active' : '' }}">
        <a class="waves-effect waves-dark" href="{{ route('tupoksi.index') }}">
          <i class="icon-user"></i><span> Tupoksi</span>
        </a>
      </li>
      <li class="treeview {{ (\Request::route()->getName() == 'sambutan.index') ? 'active' : '' }}">
        <a class="waves-effect waves-dark" href="{{ route('sambutan.index') }}">
          <i class="icon-user"></i><span> Sambutan</span>
        </a>
      </li>
      <li class="treeview {{ (\Request::route()->getName() == 'programkerja.index') ? 'active' : '' }}">
        <a class="waves-effect waves-dark" href="{{ route('programkerja.index') }}">
          <i class="icon-user"></i><span> Program Kerja</span>
        </a>
      </li>
      <li class="treeview {{ (\Request::route()->getName() == 'sejarah.index') ? 'active' : '' }}">
        <a class="waves-effect waves-dark" href="{{ route('sejarah.index') }}">
          <i class="icon-user"></i><span> Sejarah</span>
        </a>
      </li>
      <li class="nav-level">Management</li>
      
      <li class="treeview">
        <a class="waves-effect waves-dark" href="#!">
          <i class="icon-chart"></i>
          <span> Charts &amp; Maps</span>
          <span class="label label-success menu-caption">New</span>
          <i class="icon-arrow-down"></i>
        </a>
        <ul class="treeview-menu">
          <li>
            <a class="waves-effect waves-dark" href="float-chart.html">
              <i class="icon-arrow-right"></i> Float Charts
            </a>
          </li>
          <li>
            <a class="waves-effect waves-dark" href="morris-chart.html">
              <i class="icon-arrow-right"></i> Morris Charts
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-level">Laporan</li>
      <li class="treeview">
        <a class="waves-effect waves-dark" href="#!">
          <i class="icon-docs"></i><span>Pages</span><i class="icon-arrow-down"></i>
        </a>
        <ul class="treeview-menu">
          <li class="treeview">
            <a href="#!">
              <i class="icon-arrow-right"></i><span> Authentication</span><i class="icon-arrow-down"></i>
            </a>
            <ul class="treeview-menu">
              <li>
                <a class="waves-effect waves-dark" href="register1.html" target="_blank"><i class="icon-arrow-right"></i> Register 1</a>
              </li>
              
              <li>
                <a class="waves-effect waves-dark" href="login1.html" target="_blank"><i class="icon-arrow-right"></i><span> Login 1</span>
              </a>
            </li>
            <li>
              <a class="waves-effect waves-dark" href="forgot-password.html" target="_blank"><i class="icon-arrow-right"></i><span> Forgot Password</span>
            </a>
          </li>
          <li>
            <a class="waves-effect waves-dark" href="profile.html"><i class="icon-arrow-right"></i> Profile</a>
          </li>
        </ul>
      </li>
    </ul>
  </li>
</ul>
</section>
</aside>