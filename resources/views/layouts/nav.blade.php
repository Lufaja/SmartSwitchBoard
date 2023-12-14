<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="https://www.vanderleun.nl/nl/"><img class="royal" src="{{asset('img/logo.svg')}}" alt="Royal van der leun"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                <li class="nav-item">
                    <a class="nav-link active color" aria-current="page" href="{{route('home')}}">Home</a>
                <li class="nav-item">
                    {{-- <a class="nav-link active color" aria-current="page" href="{{route('device.index')}}">Device</a> --}}
                </li>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{route('starters')}}">Main page</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="dropdown">
        <button onclick="myFunction()" class="dropbtn">Menu</button>
        <div id="myDropdown" class="dropdown-content" style="z-index: 100;">
            <a href="{{route('device.index')}}">Configuration Menu</a>
            <a href="{{route('2fa.index')}}">User Settings</a>
            {{-- <a href="{{Route("device.index")}}">devices</a> --}}
            <a href="#Logout">Logout</a>
        </div>
    </div>
</nav>
