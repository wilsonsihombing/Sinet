@extends('layouts.app')

@section('title')
    Program Pendidikan
@endsection

@section('content')

    <body>
        <div class="container proker text-center py-4">
            <h1>PENDIDIKAN</h1>
            <div class="row justify-content-center">
                <div class="col-6 col-sm-4 col-md-3 col-lg-2 my-2">
                    <div class="profile-wrapper">
                        <div class="profile-circle">
                            <img src="{{ url('frontend/images/kezia.png') }}" alt="Profile 1">
                        </div>
                        <div class="profile-name">Rahel Simanjuntak</div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2 my-2">
                    <div class="profile-wrapper">
                        <div class="profile-circle">
                            <img src="{{ url('frontend/images/kezia.png') }}" alt="Profile 1">
                        </div>
                        <div class="profile-name">Rahel Simanjuntak</div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2 my-2">
                    <div class="profile-wrapper">
                        <div class="profile-circle">
                            <img src="{{ url('frontend/images/kezia.png') }}" alt="Profile 1">
                        </div>
                        <div class="profile-name">Rahel Simanjuntak</div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2 my-2">
                    <div class="profile-wrapper">
                        <div class="profile-circle">
                            <img src="{{ url('frontend/images/kezia.png') }}" alt="Profile 1">
                        </div>
                        <div class="profile-name">Rahel Simanjuntak</div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2 my-2">
                    <div class="profile-wrapper">
                        <div class="profile-circle">
                            <img src="{{ url('frontend/images/kezia.png') }}" alt="Profile 1">
                        </div>
                        <div class="profile-name">Rahel Simanjuntak</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-4 py-4">
            <div class="program-title">Program Kerja</div>
            <div class="program-content">
                <div class="program-item">
                    <div class="row">
                        <div class="col-md-3 program-item-title">Tutorial Himpunan</div>
                        <div class="col-md-9">
                            Tutorial Himpunan adalah program yang diadakan untuk membantu mahasiswa memahami materi kuliah
                            secara lebih mendalam. Dalam sesi ini, para asisten dosen (asdos) akan memfasilitasi diskusi dan
                            memberikan penjelasan tambahan terkait topik-topik yang sulit. Program ini bertujuan untuk
                            meningkatkan pemahaman akademis dan mendorong kolaborasi antara mahasiswa.
                        </div>
                    </div>
                </div>
                <div class="program-item">
                    <div class="row">
                        <div class="col-md-3 program-item-title">Mencari Asdos</div>
                        <div class="col-md-9">
                            Program Mencari Asdos bertujuan untuk membantu mahasiswa menemukan asisten dosen yang sesuai
                            dengan kebutuhan mereka. Mahasiswa dapat melihat profil asdos, termasuk latar belakang akademis
                            dan bidang keahlian. Ini akan memudahkan mahasiswa dalam mendapatkan bimbingan yang tepat dan
                            meningkatkan pengalaman belajar mereka.
                        </div>
                    </div>
                </div>
                <div class="program-item">
                    <div class="row">
                        <div class="col-md-3 program-item-title">Sharing Knowledge</div>
                        <div class="col-md-9">
                            Sharing Knowledge adalah inisiatif di mana mahasiswa dapat berbagi pengetahuan dan pengalaman
                            mereka
                            dalam bidang tertentu. Sesi ini mencakup presentasi, diskusi, dan workshop yang memungkinkan
                            mahasiswa untuk saling belajar dan bertukar ide. Program ini bertujuan untuk menciptakan
                            lingkungan
                            belajar yang kolaboratif dan inovatif.
                        </div>
                    </div>

                </div>

                <div class="program-item">
                    <div class="row">
                        <div class="col-md-3 program-item-title">Student Awards</div>
                        <div class="col-md-9">
                            Program Student Awards diadakan untuk menghargai prestasi mahasiswa di berbagai bidang, seperti
                            akademik, olahraga, dan seni. Penghargaan ini bertujuan untuk memotivasi mahasiswa agar terus
                            berprestasi dan memberikan pengakuan kepada mereka yang telah berkontribusi positif dalam
                            komunitas
                            kampus. Acara ini diharapkan dapat meningkatkan semangat dan rasa bangga di kalangan mahasiswa.
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </body>
@endsection
