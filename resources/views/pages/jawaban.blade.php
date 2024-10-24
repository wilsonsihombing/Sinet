<html>

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

    <!-- css -->
    <link rel="stylesheet" href="frontend/styles/jawaban.css" />
</head>

<body>
    <div class="container-fluid">
        <nav class="row navbar navbar-expand-lg navbar-light bg-white navbar-custom fixed-top">
            <div class="col-md-0.5 offset-md-1">
                <a href="#" class="navbar-brand">
                    <img src="frontend/images/logo.png" alt="logo" />
                </a>
            </div>
            <div class="col-md-7">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navb"
                    aria-controls="navb" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navb">
                    <ul class="navbar-nav ml-auto mr-3">
                        <li class="nav-item mx-md-2">
                            <a href="{{ url('/') }}" class="nav-link active">HOME</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                PROGRAM
                            </a>
                            <div class="dropdown-menu">
                                <a href="#" class="dropdown-item">Kesenian</a>
                                <a href="#" class="dropdown-item">Kerohanian</a>
                                <a href="#" class="dropdown-item">Humas</a>
                            </div>
                        </li>
                        <li class="nav-item mx-md-2">
                            <a href="{{ url('/moreEvents') }}" class="nav-link">EVENT</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                SERVICES
                            </a>
                            <div class="dropdown-menu">
                                <a href="{{ url('/moreEvents') }}" class="dropdown-item">QnA</a>
                                <a href="#" class="dropdown-item">Info Karier</a>
                            </div>
                        </li>
                    </ul>

                    <!-- Mobile button -->
                    <form class="form-inline my-lg-0 d-sm-block d-md-none">
                        <div class="dropdown">
                            <button class="btn btn-login btn-navbar-right px-0 dropdown-toggle" type="button"
                                id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                MyHimsi
                                <img src="frontend/images/user profile.png" alt="user" class="img-user ml-1" />
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item d-flex align-items-center" href="/profile">
                                    <i class="bi bi-person-circle mr-2"></i> Profile
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="/logout">
                                    <i class="bi bi-box-arrow-right mr-2"></i> Logout
                                </a>
                            </div>
                        </div>
                    </form>

                    <!-- Desktop button -->
                    <form class="form-inline my-lg-0 d-none d-md-block">
                        <div class="dropdown">
                            <button class="btn btn-login btn-navbar-right px-0 dropdown-toggle" type="button"
                                id="dropdownMenuDesktop" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                MyHimsi
                                <img src="frontend/images/user profile.png" alt="user" class="img-user ml-1" />
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuDesktop">
                                <a class="dropdown-item d-flex align-items-center" href="/profile">
                                    <i class="bi bi-person-circle mr-2" style="font-size: 20px"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="/logout">
                                    <i class="bi bi-box-arrow-right mr-2" style="font-size: 20px"></i>
                                    Logout
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </nav>
    </div>

    <!-- header -->
    <header class="text-md-left text-left">
        <div class="chat-box">
            <div class="chat-header">
                <i class="fas fa-user-circle"></i>
                <span>Rosco</span>
            </div>
            <div class="chat-question">
                Sebaiknya mengambil MBKM Semester berapa?
            </div>
            <div class="chat-input">
                <input type="text" placeholder="Ketikkan jawaban mu disini" />
                <button class="send-button" type="button" style="border: none; box-shadow: none;">
                    <i class="fas fa-paper-plane"></i>
                </button>
            </div>
        </div>
    </header>

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

    <!-- CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
