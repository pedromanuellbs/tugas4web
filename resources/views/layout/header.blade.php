<nav class="row p-3 m-2 bg-dark-subtle text-emphasis-dark">
    
    
    <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12 col-xs-12">
        @auth
        <a class="btn btn-dark w-100" href="/login">Tambahkan Berita</a>
        @endauth
    </div>
    
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12">
            @auth
            <h3>Halo Wari, {{ Auth::user()->name }}</h3>
            @endauth
            @guest
            <h3>Selamat Datang</h3>
            @endguest
        </div>

        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 col-xs-12">
            @auth
            <a class="btn btn-dark w-100" href="/logout">LOGOUT</a>
            @endauth
            @guest
            <a class="btn btn-dark w-100" href="/login">LOGIN</a>
            @endguest
        </div>
    
    
    
</nav>