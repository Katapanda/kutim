<!-- Top Header_Area -->
<!-- <section class="top_header_area">
    <div class="container">
        <ul class="nav navbar-nav top_nav">
            <li><a href=""><i class="fa fa-phone"></i>
                @foreach($kontak as $kon) {{ $kon->telepon }}  @endforeach
            </a></li>
            <li><a href=""><i class="fa fa-envelope-o"></i>@foreach($kontak as $kon) {{ $kon->email }}  @endforeach</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right social_nav">
            <li><a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
            <li><a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
            <li><a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
        </ul>
    </div>
</section> -->
<!-- End Top Header_Area -->

<!-- Header_Area -->
<nav class="navbar navbar-default header_aera" style="background-color: #EEEEEE; height: 90px">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="col-md-2 p0">
            <div class="navbar-header navbar-left">
                <a class="navbar-brand" href="{{ route('beranda') }}"><img src="{{ asset('assets_frontend/images/logo.png') }}" alt="" width="100%" height="90px"></a>
            </div>
        </div>

        <div class="col-md-4">
            <div class="collapse navbar-collapse">
                <div style="margin-left: -220px; margin-top: 0px" class="nav navbar-nav navbar-left">
                    <img src="{{ asset('assets_frontend/images/nama_dinas.png') }}" alt="" width="700px" >
                </div>
            </div>
        </div>        
    </div><!-- /.container -->
</nav>
<!-- End Header_Area -->