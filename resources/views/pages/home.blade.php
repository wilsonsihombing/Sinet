@extends('layouts.app')

@section('title')
    HIMSI
@endsection

@section('content')
    <!-- header -->
    <header class="text-md-left text-left">
        <h1 class="">
            HIMPUNAN MAHASISWA <span class="subtitle">SISTEM INFORMASI</span>
        </h1>
        <br />
        <p>Explore, Learn,</p>
        <p>Grow with <span class="subtitle">HIMSI</span></p>

        <a href="#visi" class="btn btn-explore px-3 mt-3">EXPLORE OUR JOURNEY</a>
    </header>

    <!-- main -->
    <main>
        <div class="container">
            <section class="section-visi text-center py-5" id="visi">
                <div class="col-12 text-center">
                    <h2 class="display-4">Visi</h2>
                    <hr class="costum-mid-hr mx-auto" />
                    <hr class="costume-hr" />
                    <p class="visi-text">
                        Menjadikan Himpunan Mahasiswa Sistem Informasi sebagai wadah yang
                        aktif dan suportif bagi mahasiswa/i untuk mengeksplorasi
                        kreativitas, berkolaborasi dan mengembangkan potensi akademik dan
                        non-akademik.
                    </p>
                </div>

                <div class="col-12 text-center" id="misi">
                    <h2 class="display-4">Misi</h2>
                    <hr class="costum-mid-hr mx-auto" />
                    <hr class="costume-hr" />
                    <ol class="misi-list text-left">
                        <li>
                            Menjadikan HIMSI sebagai wadah yang memberdayakan anggota untuk
                            mencapai potensi penuh mereka melalui penyediaan sumber daya,
                            dukungan, dan penguatan organisasi.
                        </li>
                        <li>
                            Memperkuat jaringan dan hubungan antar anggota HIMSI untuk
                            menciptakan lingkungan yang aktif dan mendukung kolaborasi,
                            serta menampung aspirasi dan penyaluran minat bakat mahasiswa
                            Sistem Informasi.
                        </li>
                        <li>
                            Mengembangkan inovasi dan kreativitas mahasiswa dalam
                            meningkatkan keterampilan dan pengetahuan, serta memberikan
                            kontribusi positif bagi organisasi dan masyarakat
                        </li>
                        <li>
                            Mendorong mahasiswa Sistem Informasi untuk memiliki daya saing
                            dan konektivitas yang luas, serta memperkuat solidaritas dan
                            kebersamaan antar anggota
                        </li>
                        <li>
                            Merealisasikan dan mengembangkan program kerja dari kepengurusan
                            sebelumnya untuk menciptakan himpunan yang berintegritas,
                            bertanggung jawab, dan mampu menghasilkan insan mahasiswa yang
                            aktif, solutif, dan kompetitif di bidangnya.
                        </li>
                    </ol>
                </div>
            </section>
        </div>

        <hr class="hr-relasi" />

        <div class="container">
            <section class="section-relasi text-center">
                <div class="row">
                    <div class="col">
                        <div class="circle">
                            <span class="number"> 33 </span>
                        </div>
                        <p class="label">Kepengurusan</p>
                    </div>
                    <div class="col">
                        <div class="circle">
                            <span class="number"> 450 </span>
                        </div>
                        <p class="label">Mahasiswa</p>
                    </div>
                    <div class="col">
                        <div class="circle">
                            <span class="number"> 1200 </span>
                        </div>
                        <p class="label">Alumni</p>
                    </div>
                </div>
            </section>
        </div>

        <div class="container-fluid">
            <section class="section-struktur">
                <div class="struktur-organisasi text-center">
                    <h2 class="display-5 mt-5">
                        Struktur <span class="costume-color">Organisasi</span>
                    </h2>
                </div>

                <div class="row justify-content-center mt-3 mb-3 struktur-img">
                    <div class="col-lg-10 col-md-8 col-sm-12">
                        <img src="frontend/images/struktur organisasi.png" alt="struktur organisasi" class="img-fluid">
                    </div>
                </div>
            </section>
        </div>

        <div class="container mt-3">
            <section class="section-profile">
                <div class="profile">
                    <h2 class="display-5 text-left mt-5">
                        Profile Lulusan <span class="costume-color">SI</span>
                    </h2>
                    <h2 class="display-5 text-left mt-2 costume-color">IT DEL</h2>

                    <hr class="hr-profile" />

                    <p class="profile-display">
                        Lulusan Program Studi S1 Sistem Informasi Institut Teknologi Del
                        memenuhi aspek sikap, pengetahuan, keterampilan umum, dan
                        keterampilan khusus.
                    </p>
                </div>

                <div class="row justify-content-center profile-img">
                    <div class="col-md-4 col-sm-6 mb-3 text-left">
                        <img src="frontend/images/isdeveloper.webp" alt="isdeveloper" class="img-fluid" />
                        <p class="label">PENGEMBANGAN SISTEM INFORMASI (IS DEVELOPER)</p>
                        <p class="information">
                            System Analyst, Backend Developer, Frontend Developer, Database
                            Administrator (DBA), Quality Assurance (QA) / Tester, DevOps
                            Engineer, Project Manager
                        </p>
                    </div>

                    <div class="col-md-4 col-sm-6 mb-3 text-left">
                        <img src="frontend/images/data science.webp" alt="datascience" class="img-fluid" />
                        <p class="label">DATA SCIENCE</p>
                        <p class="information">
                            Data Analyst, Data Engineer, Big Data Specialist
                        </p>
                    </div>

                    <div class="col-md-4 col-sm-6 mb-3 text-left">
                        <img src="frontend/images/teacher.png" alt="teacher" class="img-fluid costume-img" />
                        <p class="label">TEACHER</p>
                        <p class="information">Dosen, Teaching Assistant</p>
                    </div>
                </div>
            </section>
        </div>

        <section>
            <div class="container mt-2 upcoming-event  mb-5">
                <div class="upcoming-title text-center mb-4">
                    <h2 class="display-5 mt-5">
                        UPCOMING <span class="costume-color">EVENT</span>
                    </h2>
                </div>

                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        {{-- <li data-target="#carouselExampleIndicators" data-slide-to="2"></li> --}}
                    </ol>
                    
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ url('frontend/images/upcoming1.png') }}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ url('frontend/images/upcoming2.png') }}" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    
                    <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators"
                        data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators"
                        data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </button>
                </div>
            </div>
        </section>

        <section class="section-events" id="events">
            <div class="container">
                <div class="row">
                    <div class="col text-center section-events-heading">
                        <h2>OUR MAIN <span>EVENTS</span></h2>
                        <p>
                            Each event is designed to strengthen togetherness, build
                            competence,
                            <br />
                            and foster the spirit of HIMSI members
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-events-content" id="eventsContent">
            <div class="section-event-program row justify-content-center g-3">
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <img src="frontend/images/event1.JPG" alt="event" class="costume-event img-fluid" />
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3">
                    <img src="frontend/images/event2.png" alt="event" class="costume-event img-fluid" />
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3">
                    <img src="frontend/images/event3.png" alt="event" class="costume-event img-fluid" />
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3">
                    <img src="frontend/images/event4.png" alt="event" class="costume-event img-fluid" />
                </div>
            </div>
        </section>

        <div class="button-events">
            <a href="{{ url('/moreEvents') }}" class="btn btn-submit">SEE MORE EVENTS</a>
        </div>


    </main>
@endsection
