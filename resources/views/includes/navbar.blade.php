<!-- Navbar -->
<div class="container-fluid">
    <nav class="row navbar navbar-expand-lg navbar-light bg-white navbar-custom fixed-top">
        <div class="col-md-0.5 offset-md-1">
            <a href="#" class="navbar-brand">
                <img src="{{ asset('frontend/images/logo.png') }}" alt="logo" />
            </a>
        </div>
        <div class="col-md-7">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navb">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navb">
                <ul class="navbar-nav ml-auto mr-3">
                    <li class="nav-item mx-md-2">
                        <a href="{{ url('/') }}" class="nav-link active">HOME</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" id="navbardrop"
                            data-toggle="dropdown">PROGRAM</a>
                        <div class="dropdown-menu">
                            <a href="{{ route('program.kesenian') }}" class="dropdown-item">Kesenian</a>
                            <a href="{{ route('program.kerohanian') }}" class="dropdown-item">Kerohanian</a>
                            <a href="{{ route('program.humas') }}" class="dropdown-item">Humas</a>
                            <a href="{{ route('program.pendidikan') }}" class="dropdown-item">Pendidikan</a>
                        </div>
                    </li>
                    <li class="nav-item mx-md-2">
                        <a href="{{ url('/moreEvents') }}" class="nav-link">EVENT</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" id="navbardrop"
                            data-toggle="dropdown">SERVICES</a>
                        <div class="dropdown-menu">
                            <a href="{{ url('/qna') }}" class="dropdown-item">QnA</a>
                            <a href="{{ url('/infokarier') }}" class="dropdown-item">Info Karier</a>
                        </div>
                    </li>
                </ul>

                @guest
                    <!-- Tombol Masuk jika pengguna belum login -->
                    <form class="form-inline my-lg-0 d-sm-block d-md-none">
                        <button class="btn btn-login" type="button" style="margin-right: 10px; background-color: #0174be; color: #ffffff;"
                            onclick="location.href='{{ url('login') }}';">Login</button>
                    </form>
                    <form class="form-inline my-lg-0 d-none d-md-block">
                        <button class="btn btn-login" type="button" style="margin-right: 10px; background-color: #0174be; color: #ffffff;"
                            onclick="location.href='{{ url('login') }}';">Login</button>
                    </form>
                    
                @endguest

                @auth
                    <!-- Mobile button -->
                    <form class="form-inline my-lg-0 d-sm-block d-md-none" action="{{ url('logout') }}" method="POST">
                        @csrf
                        <div class="dropdown">
                            <button class="btn btn-login btn-navbar-right px-0 dropdown-toggle" type="button"
                                id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                MyHimsi
                                {{-- <img src="frontend/images/user profile.png" alt="user" class="img-user ml-1" /> --}}
                                <img src="{{ Auth::user()->photo ? asset('storage/' . Auth::user()->photo) : url('frontend/images/profile.png') }}" alt="user" class="img-user ml-1">
                                {{-- <i class="bi bi-person-circle mr-2"></i> --}}
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item d-flex align-items-center" href="/profile">
                                    {{-- <i class="bi bi-person-circle mr-2"></i> <!-- Ikon Profile --> --}}
                                    <img src="{{ Auth::user()->photo ? asset('storage/' . Auth::user()->photo) : url('frontend/images/profile.png') }}" alt="user" class="img-avatar ml-3">
                                    Profile
                                </a>
                                <button type="submit" class="dropdown-item d-flex align-items-center">
                                    <i class="bi bi-box-arrow-right mr-2"></i> <!-- Ikon Logout -->
                                    Logout
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Desktop button -->
                    <form class="form-inline my-lg-0 d-none d-md-block" action="{{ url('logout') }}" method="POST">
                        @csrf
                        <div class="dropdown">
                            <button class="btn btn-login btn-navbar-right px-0 dropdown-toggle" type="button"
                                id="dropdownMenuDesktop" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                MyHimsi
                                {{-- <img src="frontend/images/user profile.png" alt="user" class="img-user ml-1" /> --}}
                                <img src="{{ Auth::user()->photo ? asset('storage/' . Auth::user()->photo) : url('frontend/images/profile.png') }}" alt="user" class="img-user ml-1">
                                {{-- <i class="bi bi-person-circle ml-1"></i> --}}
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuDesktop">
                                <a class="dropdown-item d-flex align-items-center" href="/profile">
                                    {{-- <i class="bi bi-person-circle mr-2" style="font-size: 20px;"></i> <!-- Ikon Profile --> --}}
                                    <img src="{{ Auth::user()->photo ? asset('storage/' . Auth::user()->photo) : url('frontend/images/profile.png') }}" alt="user" class="img-avatar ml-3">
                                    Profile
                                </a>
                                <button type="submit" class="dropdown-item d-flex align-items-center">
                                    <i class="bi bi-box-arrow-right mr-2" style="font-size: 20px;"></i> <!-- Ikon Logout -->
                                    Logout
                                </button>
                            </div>
                        </div>
                    </form>
                @endauth
            </div>
        </div>
    </nav>
</div>
