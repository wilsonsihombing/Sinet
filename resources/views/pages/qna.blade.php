<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sinet</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <!-- Font Bebas Neue -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet" />
    <!-- Font Roboto -->
    <link
        href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Roboto:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet" />
    <!-- CSS -->
    <link rel="stylesheet" href="frontend/styles/main.css" />
    <link rel="stylesheet" href="frontend/styles/qna.css" />


    <!-- font roboto -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link
        href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet" />

    <!-- icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

    <!-- icon  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />

</head>

<body>
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
                            <button class="btn btn-login" type="button"
                                style="margin-right: 10px; background-color: #0174be; color: #ffffff;"
                                onclick="location.href='{{ url('login') }}';">Login</button>
                        </form>
                        <form class="form-inline my-lg-0 d-none d-md-block">
                            <button class="btn btn-login" type="button"
                                style="margin-right: 10px; background-color: #0174be; color: #ffffff;"
                                onclick="location.href='{{ url('login') }}';">Login</button>
                        </form>

                    @endguest

                    @auth
                        <!-- Mobile button -->
                        <form class="form-inline my-lg-0 d-sm-block d-md-none" action="{{ url('logout') }}" method="POST">
                            @csrf
                            <div class="dropdown">
                                <button class="btn btn-login btn-navbar-right px-0 dropdown-toggle" type="button"
                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    MyHimsi
                                    {{-- <img src="frontend/images/user profile.png" alt="user" class="img-user ml-1" /> --}}
                                    <img src="{{ Auth::user()->photo ? asset('storage/' . Auth::user()->photo) : url('frontend/images/profile.png') }}"
                                        alt="user" class="img-user ml-1">
                                    {{-- <i class="bi bi-person-circle mr-2"></i> --}}
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item d-flex align-items-center" href="/profile">
                                        {{-- <i class="bi bi-person-circle mr-2"></i> <!-- Ikon Profile --> --}}
                                        <img src="{{ Auth::user()->photo ? asset('storage/' . Auth::user()->photo) : url('frontend/images/profile.png') }}"
                                            alt="user" class="img-avatar ml-3">
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
                                    id="dropdownMenuDesktop" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    MyHimsi
                                    {{-- <img src="frontend/images/user profile.png" alt="user" class="img-user ml-1" /> --}}
                                    <img src="{{ Auth::user()->photo ? asset('storage/' . Auth::user()->photo) : url('frontend/images/profile.png') }}"
                                        alt="user" class="img-user ml-1">
                                    {{-- <i class="bi bi-person-circle ml-1"></i> --}}
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuDesktop">
                                    <a class="dropdown-item d-flex align-items-center" href="/profile">
                                        {{-- <i class="bi bi-person-circle mr-2" style="font-size: 20px;"></i> <!-- Ikon Profile --> --}}
                                        <img src="{{ Auth::user()->photo ? asset('storage/' . Auth::user()->photo) : url('frontend/images/profile.png') }}"
                                            alt="user" class="img-avatar ml-3">
                                        Profile
                                    </a>
                                    <button type="submit" class="dropdown-item d-flex align-items-center">
                                        <i class="bi bi-box-arrow-right mr-2" style="font-size: 20px;"></i>
                                        <!-- Ikon Logout -->
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

    <!-- Header -->
    <header class="text-left head-qna">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1>DARI BERTANYA <br><span class="subtitle">JADI MENGERTI</span></h1>
                </div>
            </div>
            <!-- Form Pertanyaan -->
            <div class="row justify-content-center">
                <div class="col-12 col-md-8">
                    <form action="/qna" method="POST" class="question-box">
                        @csrf
                        <input type="text" name="question" class="form-control"
                            placeholder="Ajukan Pertanyaan mu!" required />
                        <button type="submit" class="btn btn-primary mt-3">
                            <i class="fas fa-paper-plane"></i> Kirim
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </header>

    <!-- Question List -->
    <div class="question-list">
        <h3>List Pertanyaan</h3>
        @foreach ($questions as $question)
            <div class="question-item">
                @if ($question->user)
                    <p>{{ $question->user->name }}</p> <!-- Nama penanya -->
                @else
                    <p>Nama penanya tidak tersedia</p>
                @endif
                <p>{{ $question->question }}</p> <!-- Pertanyaan -->
                <div>
                    <!-- Tombol Jawab -->
                    <a href="{{ url('/answerqna', ['id' => $question->id]) }}">
                        <button>Jawab</button>
                    </a>

                    <!-- Tombol Lihat Jawaban -->
                    <a href="{{ route('seeAnswer.qna', ['id' => $question->id]) }}">
                        Lihat jawaban..
                    </a>
                </div>

            </div>
        @endforeach
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif



    </div>
</body>

<footer class="footer">
    <div class="container">
        <div class="footer-content">
            <div class="footer-left ml-1">
                <p class="footer-heading">THANK YOU FOR VISITING OUR WEBSITE</p>
                <nav class="footer-nav">
                    <a href="{{ url('/') }}">Home</a> | <a href="{{ route('program.kesenian') }}">Program</a> |
                    <a href="{{ url('/moreEvents') }}">Events</a> | <a href="{{ url('/qna') }}">QnA</a> | <a
                        href="#">Karier</a>
                </nav>
                <p class="follow-us">FOLLOW US</p>
                <div class="footer-social">
                    <a href="#"><i class="fab fa-facebook"></i> Facebook</a> |
                    <a href="https://www.instagram.com/himsi.itdel_/"><i class="fab fa-instagram"></i> Instagram</a> |
                    <a
                        href="https://www.linkedin.com/company/himpunan-mahasiswa-sistem-informasi-itdel/posts/?feedView=all">
                        <i class="fab fa-linkedin"></i> LinkedIn</a>
                </div>
            </div>
            <div class="footer-right">
                <p class="footer-contact-heading">CONTACT US</p>
                <p><i class="fas fa-map-marker-alt"></i> Jl. Sitoluama, Laguboti, Toba</p>
                <p><i class="fas fa-envelope"></i> himsi@gmail.com</p>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="footer-logo-wrapper">
                <img src="frontend/images/lambang bagus.png" alt="SI Logo" class="footer-logo" />
            </div>
            <div class="footer-title">
                <p class="title">INFORMATION SYSTEMS</p>
                <p class="subtitle">Del Institute of Technology</p>
            </div>
        </div>
        <div class="footer-copyright">
            <hr class="footer-line" />
            <p>Copyright &copy; 2024 HIMSI. All right reserved.</p>
        </div>
    </div>
</footer>


<!-- CDN Scripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</html>
