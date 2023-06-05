<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{route('welcome')}}">Buffer</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('welcome')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('contact_us')}}">Lavora con noi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Tutti i prodotti</a>
                </li>
                @auth
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Crea prodotti</a>
                </li>
                @endauth
            </ul>


            @auth
            <div class="d-flex aling" >
            Benvenuto {{Auth::user()->name}}
            </div>
            @else
            <div class="d-flex justify-content-end ">

                    <a class="nav-link active" aria-current="page" href="{{ route('register') }}">Registrati qui</a>
                    <a class="nav-link active mx-3" aria-current="page" href="{{ route('login') }}">Log-in</a>
            </div>
                
            @endauth


            @auth
            <form method="POST" action="{{route('logout')}}">
                @csrf
            <button class="mx-3 btn btn-danger">LOG-OUT</button>
            </form>
            @endauth




        </div>
    </div>
</nav>
