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

    <!-- icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <!-- icon  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />

    <link rel="stylesheet" href="frontend/styles/infokarier.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.0/font/bootstrap-icons.min.css" rel="stylesheet">

    <!-- Swiper -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <style>
        .head-qna h2 {
            color: white;
            /* Ubah warna tulisan menjadi putih */
        }

        .career-form-container {
            background-image: url('frontend/images/background.jpg');
            /* Ganti dengan path gambar Anda */
            background-size: cover;
            background-position: center;
            padding: 50px 0;
        }

        .career-form {
            background-color: rgba(255, 255, 255, 0.8);
            /* Tambahkan transparansi agar konten tetap terlihat */
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .swiper {
            width: 600px;
            height: 300px;
        }

        .scrollable-card {
            height: 300px;
            overflow-y: auto;
            background-color: rgba(255, 255, 255, 0.8);
        }
    </style>

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

    <!-- Header Section -->
    <header class="text-left head-qna mt-5 pt-5">
        <div class="container">
            <h2 class="mb-4">Daftar Info Karir</h2>
            @if($careerInfos->isEmpty())
            <p>Tidak ada info karir yang tersedia.</p>
            @else
            <div class="row">
                <div class="swiper">
                    <div class="swiper-wrapper">
                        @foreach($careerInfos as $careerInfo)
                        <div class="swiper-slide">
                            <div class="col-12">
                                <div class="card shadow-lg scrollable-card">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $careerInfo->title }}</h5>
                                        <p class="card-text">{{ $careerInfo->description }}</p>
                                        <p class="card-text"><small class="text-muted">Diposting pada: {{ $careerInfo->posted_date }}</small></p>
                                        <p class="card-text"><small class="text-muted">Kadaluarsa: {{ $careerInfo->expired_date ? $careerInfo->expired_date : 'Tidak ada' }}</small></p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            @endif

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </header>


    <!-- Formulir Karir Section -->
    <div class="career-form-container shadow-lg">
        <div class="container">
            <div class="row w-100">
                <div class="col-12">
                    <div class="career-form">
                        <h3 class="text-center mb-5">Tambah Info Karir</h3>
                        <form action="{{ route('career.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="title">Judul</label>
                                <input type="text" class="form-control" id="title" name="title" required>
                            </div>
                            <div class="form-group">
                                <label for="description">Deskripsi</label>
                                <textarea class="form-control" id="description" name="description" rows="5" required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="posted_date">Tanggal Diposting</label>
                                <input type="date" class="form-control" id="posted_date" name="posted_date" required>
                            </div>
                            <div class="form-group">
                                <label for="expired_date">Tanggal Kadaluarsa</label>
                                <input type="date" class="form-control" id="expired_date" name="expired_date">
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Tambah Info Karir</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-left ml-1">
                    <p class="footer-heading">THANK YOU FOR VISITING OUR WEBSITE</p>
                    <nav class="footer-nav">
                        <a href="{{ url('/') }}">Home</a> | <a href="{{ route('program.kesenian') }}">Program</a>
                        |
                        <a href="{{ url('/moreEvents') }}">Events</a> | <a href="{{ url('/qna') }}">QnA</a> |
                        <a href="#">Karier</a>
                    </nav>
                    <p class="follow-us">FOLLOW US</p>
                    <div class="footer-social">
                        <a href="#"><i class="fab fa-facebook"></i> Facebook</a> |
                        <a href="https://www.instagram.com/himsi.itdel_/"><i class="fab fa-instagram"></i>
                            Instagram</a> |
                        <a
                            href="https://www.linkedin.com/company/himpunan-mahasiswa-sistem-informasi-itdel/posts/?feedView=all"><i
                                class="fab fa-linkedin"></i> LinkedIn</a>
                    </div>
                </div>

                <div class="footer-right">
                    <p class="footer-contact-heading">CONTACT US</p>
                    <p>
                        <i class="fas fa-map-marker-alt"></i> Jl. Sitoluama, Laguboti,
                        Toba
                    </p>
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
        </div>

        <div class="footer-copyright">
            <hr class="footer-line" />
            <p>Copyright &copy; 2024 HIMSI. All right reserved.</p>
        </div>

    </footer>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script type="module">
        import Swiper from 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.mjs'

        const swiper = new Swiper('.swiper', {
            // Optional parameters
            direction: 'horizontal',
            loop: true,

            // If we need pagination
            pagination: {
                el: '.swiper-pagination',
            },

            // Navigation arrows
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },

            // And if we need scrollbar
            scrollbar: {
                el: '.swiper-scrollbar',
            },
        });
    </script>

</body>

</html>