@extends('layouts.app')

@section('title')
    Program Kesenian
@endsection

@section('content')
    <div class="container proker text-center py-4">
        <h1>KESENIAN</h1>
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
                    <div class="col-md-3 program-item-title">Welcoming Party</div>
                    <div class="col-md-9">
                        Welcoming Party adalah acara yang diadakan untuk menyambut mahasiswa baru dan memperkenalkan
                        mereka kepada lingkungan kampus. Dalam acara ini, mahasiswa lama dan baru dapat berinteraksi,
                        berbagi pengalaman, dan menjalin hubungan sosial. Tujuan dari Welcoming Party adalah untuk
                        menciptakan rasa kebersamaan dan membantu mahasiswa baru merasa lebih nyaman di lingkungan
                        barunya.
                    </div>
                </div>
            </div>
            <div class="program-item">
                <div class="row">
                    <div class="col-md-3 program-item-title">Refreshing</div>
                    <div class="col-md-9">
                        Program Refreshing merupakan acara santai yang diadakan untuk mengurangi stres dan meningkatkan
                        semangat mahasiswa. Acara ini biasanya melibatkan berbagai aktivitas seperti permainan,
                        olahraga, atau sesi relaksasi. Tujuannya adalah untuk memberikan kesempatan bagi mahasiswa untuk
                        bersantai sejenak dari rutinitas akademik dan menikmati waktu bersama teman-teman.
                    </div>
                </div>

            </div>
            <div class="program-item">
                <div class="row">
                    <div class="col-md-3 program-item-title">Kopi Sore</div>
                    <div class="col-md-9">
                        Kopi Sore adalah acara kumpul santai di mana mahasiswa dapat berkumpul untuk menikmati kopi dan
                        berbincang-bincang. Dalam acara ini, mahasiswa dapat bertukar pikiran, berdiskusi tentang topik
                        menarik, atau sekadar bersantai setelah seharian beraktivitas. Program ini bertujuan untuk
                        memperkuat ikatan antar mahasiswa dan menciptakan suasana yang nyaman untuk berbagi ide dan
                        pengalaman.
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
