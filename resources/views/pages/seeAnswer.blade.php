<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sinet</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- font bebasneue -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet" />

     <!-- Font Roboto -->
     <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet" />
  
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
   
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/styles/seeanswer.css') }}" />
    
</head>

<body>
    <!-- Navbar -->
    <div class="container-fluid">
        <nav class="row navbar navbar-expand-lg navbar-light bg-white navbar-custom fixed-top">
            <!-- Navbar content here... -->
        </nav>
    </div>
    @yield('content')
    <!-- seeAnswer.blade.php -->
    <header>
    @section('content')
    @extends('layouts.app')
        <div class="container">
            <h1 class="title">Question and Answers</h1>

            <!-- Card untuk Pertanyaan -->
            <div class="question-card">
                <div class="question-header">
                    <strong>{{ $question->postedBy->name ?? 'Anonymous' }}</strong> asked:
                </div>
                <div class="question-body">
                    <p>{{ $question->question }}</p>
                </div>
            </div>

            <!-- Bagian untuk Menampilkan Semua Jawaban -->
            <div class="answer-section">
    <h2>Answers</h2>
    <div class="answer-list">
        @if ($question->answers->isNotEmpty())
            @foreach ($question->answers as $index => $answer)
                <div class="answer-card">
                    <div class="answer-header">
                        Answered by: <strong>{{ $answer->answeredBy->name ?? 'Anonymous' }}</strong>
                    </div>
                    <div class="answer-body">
                        <p>{{ $answer->answer }}</p>
                    </div>
                </div>
                
            @endforeach
        @else
            <p class="no-answer">No answers yet.</p>
        @endif
    </div>
</div>

    </header>
    @endsection

    <!-- Footer -->
        
            <!-- Footer content here... -->
        </div>
    </footer>

    <!-- CDN Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
