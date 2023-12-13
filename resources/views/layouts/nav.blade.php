<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="/"><img class="royal" src="{{asset('img/logo.svg')}}" alt="Royal van der leun"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                <li class="nav-item">
                    <a class="nav-link active color" aria-current="page" href="{{route('welcome')}}">Home</a>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{route('dashboard')}}">Dashboard</a>
                </li>
                </li>
                <li class="nav-item">

                </li>
            </ul>
        </div>
    </div>
    <div class="dropdown">
        <button onclick="myFunction()" class="dropbtn">Menu</button>
            <a href="{{Route("device.index")}}">Configuration Menu</a>
            <a href="../settings/settings.php">Settings</a>
            <a href="#Logout">Logout</a>
        </div>
    </div>
</nav>
