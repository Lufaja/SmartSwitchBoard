<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="https://www.vanderleun.nl/nl/"><img class="royal" src="{{asset('img/logo.svg')}}" alt="Royal van der leun"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                <li class="nav-item">
                    <a class="nav-link active color" aria-current="page" href="{{route('welcome')}}">Home</a>
                <li class="nav-item">
                    {{-- <a class="nav-link active color" aria-current="page" href="{{route('device.index')}}">Device</a> --}}
                </li>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{route('starters')}}">Main page</a>
                </li>
                <li class="nav-item">

                </li>
            </ul>
        </div>
    </div>
    <div class="pe-3">
        <input type="checkbox" id="darkmode-toggle" onchange="DarkMode()"/>
        <label for="darkmode-toggle">
        </label>
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


<style>
    label {
        width:53px;
        height:25px;
        position: relative;
        display: block;
        background: #ebebeb;
        border-radius: 20px;
        box-shadow: inset 0px 5px 15px rgba(0,0,0,0.4), inset 0px -5px 15px rgba(255,255,255,0.4);
        cursor: pointer;
    }
    label:after {
        content: "";
        width:18px;
        height: 18px;
        position: absolute;
        top:4px;
        left:4px;
        background: linear-gradient(180deg,#ffcc89,#d8860b);
        border-radius: 18px;
        box-shadow: 0px 5px 10px rgba(0,0,0,0.2);
    }
    input {
        width: 0;
        height: 0;
        visibility: hidden;
    }
    input:checked + label {
        background: #242424;
    }
    input:checked + label:after {
        left:48px;
        transform: translateX(-100%);
        background: linear-gradient(180deg,#777,#3a3a3a);
    }
    label, label:after {
        transition: 0.5s
    }
    label:active:after{ 
        width: 20px; 
    }

    .dark-mode {
    background: rgb(48, 56, 61);
    /* padding: 20px */
    /* color: white; */
    border: solid orange 2px;
    border-radius: 10px;
    color: #408edd;
}

.dark-mode2{
  background: rgb(48, 56, 61);
  border-radius: 10px;
  /* color: #408edd; */
}

.dark-mode3{
  color: #408edd;
  background: rgb(48, 56, 61);
  border-radius: 10px;
}

.dark-mode4{
  color: #408edd;
  background: rgb(48, 56, 61);
  border-radius: 10px;
  padding: 20px;
}
</style>