<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sinet</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />

    <!-- font bebasneue -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet" />

    <!-- font roboto -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="frontend/styles/seeanswer.css" />
</head>

<body>
    <!-- Navbar -->
    <div class="container-fluid">
        <nav class="row navbar navbar-expand-lg navbar-light bg-white navbar-custom fixed-top">
            <div class="col-md-0.5 offset-md-1">
                <a href="#" class="navbar-brand">
                    <img src="frontend/images/logo.png" alt="logo" />
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
                                onclick="location.href='{{ url('login') }}';">Masuk</button>
                        </form>
                        <form class="form-inline my-lg-0 d-none d-md-block">
                            <button class="btn btn-login" type="button"
                                style="margin-right: 10px; background-color: #0174be; color: #ffffff;"
                                onclick="location.href='{{ url('login') }}';">Masuk</button>
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
                                    <img src="frontend/images/user profile.png" alt="user" class="img-user ml-1" />
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item d-flex align-items-center" href="/profile">
                                        <i class="bi bi-person-circle mr-2"></i> <!-- Ikon Profile -->
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
                                    <img src="frontend/images/user profile.png" alt="user" class="img-user ml-1" />
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuDesktop">
                                    <a class="dropdown-item d-flex align-items-center" href="/profile">
                                        <i class="bi bi-person-circle mr-2" style="font-size: 20px;"></i>
                                        <!-- Ikon Profile -->
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
    <header>
        <div class="question-box">
            <div class="input-box py-2">
                <img src="frontend/images/user profile.png" alt="user" class="img-user ml-1"
                    style="width: 3%; height: 3%;">
                <span class="user-name">Rosco</span>
            </div>
            <p>Sebaiknya mengambil MBKM semester berapa?</p>
        </div>

        <div class="title-answer">
            <h1 class="instructions">Answer :</h1>
        </div>

        <div class="answer-box-container">
            <div class="answer-box">
                <div class="input-box">
                    <img src="frontend/images/user profile.png" alt="user" class="img-user ml-1"
                        style="width: 15%; height: 15%">
                    <span class="user-name">Rosco</span>
                </div>
                Tergantung sih sama jurusanmu juga. Beberapa teman di jurusan lain ada yang ngambil semester 6, tapi di
                tempatku ada yang nunggu sampai semester 7 biar lebih siap. Saran aku sih, ambil setelah sebagian besar
                mata kuliah inti kamu udah kelar. Kalau udah merasa cukup paham sama dasar-dasarnya, baru deh kamu siap
                buat MBKM.
            </div>
            <div class="answer-box">
                <div class="input-box">
                    <img src="frontend/images/user profile.png" alt="user" class="img-user ml-1"
                        style="width: 15%; height: 15%">
                    <span class="user-name">Rosco</span>
                </div>
                Aku dulu ngambil di semester 7. Waktunya pas banget karena udah beres mata kuliah wajib, jadi lebih
                fleksibel deh buat fokus ke program MBKM.
            </div>
            <div class="answer-box">
                <div class="input-box">
                    <img src="frontend/images/user profile.png" alt="user" class="img-user ml-1"
                        style="width: 15%; height: 15%">
                    <span class="user-name">Rosco</span>
                </div>
                Aku lihat banyak yang ambil di semester 6. Kayaknya itu waktu yang pas karena gak terlalu buru-buru tapi
                juga gak terlalu akhir, jadi masih ada waktu buat persiapan lain juga.
            </div>
            <div class="answer-box">
                <div class="input-box">
                    <img src="frontend/images/user profile.png" alt="user" class="img-user ml-1"
                        style="width: 15%; height: 15%">
                    <span class="user-name">Rosco</span>
                </div>
                Menurutku sih, idealnya di semester 5 atau 6. Di semester itu, kamu udah punya dasar yang cukup kuat dan
                bisa fokus banget buat eksplor MBKM tanpa ganggu kuliah utama.
            </div>
        </div>
    </header>

    <!-- CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
