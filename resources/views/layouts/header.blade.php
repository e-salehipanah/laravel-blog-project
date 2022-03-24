<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="index.html">Ebrahim Salehi Panah</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto text-center">
                <li class="nav-item"><a class="nav-link" href="{{route('home')}}">Home</a></li>
                @if(auth()->check())
                    <li class="nav-item"><a class="nav-link" href="{{route('home')}}">manage article</a></li>
                    <form action="{{route('logout')}}" method="post">
                        @csrf
                        <button class="nav-link px-lg-3 text-danger border btn border-danger" href="{{route('login')}}">
                            logout
                        </button>
                    </form>
                @else
                    <li class="nav-item">
                        <a class="nav-link px-lg-3 text-info border border-info" href="{{route('login')}}">Login</a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>



