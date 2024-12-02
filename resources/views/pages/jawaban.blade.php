<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sinet</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

    <!-- Font Awesome & Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="frontend/styles/jawaban.css" />
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

                    <!-- Mobile & Desktop User Button -->
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
                                    <i class="bi bi-person-circle mr-2" style="font-size: 20px"></i> Profile
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="/logout">
                                    <i class="bi bi-box-arrow-right mr-2" style="font-size: 20px"></i> Logout
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </nav>
    </div>

    <!-- Content Section -->
    <header class="text-md-left text-left">
    @extends('layouts.app')
    <div class="container">
        <div class="chat-box">
            @if(isset($question))
                <div class="chat-question">
                    <p><strong></strong><span class = "penanya-name"> {{ $question->user->name ?? 'Nama tidak tersedia' }}</p>
                    <p><strong>Pertanyaan:</strong> {{ $question->question }}</p>
                </div>
                <form action="{{ route('submit.answer.qna', ['id' => $question->id]) }}" method="POST">
                    @csrf
                    <div class="position-relative">
                    <label for="answer">Jawaban Anda:</label>
                    <textarea id="answer" name="answer" class="form-control" rows="5" required></textarea>
                    <button type="submit" class="btn btn-primary position-absolute" style="right: 10px; bottom: 10px;">
                        <i class="fas fa-paper-plane"></i> Kirim
                    </button>
                </div>
                </form>
            @else
                <div class="alert alert-warning">
                    Pertanyaan tidak ditemukan.
                </div>
            @endif
        </div>
    </div>
</header>


    <!-- Footer -->
   

    <!-- CDN
