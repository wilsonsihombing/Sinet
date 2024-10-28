@extends('layouts.app')

@section('title')
    Program Kerohanian
@endsection

@section('content')
    

<body>
    <div class="container proker text-center py-4">
        <h1>KEROHANIAN</h1>
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
                    <div class="col-md-3 program-item-title">Poster Mingguan/Acara Keagamaan</div>
                    <div class="col-md-9">
                        Setiap hari Minggu akan diposting sebuah poster berisi ucapan selamat Hari Minggu yang dilengkapi dengan ayat Alkitab sebagai ayat emas untuk minggu tersebut. Selain itu, pada hari-hari besar keagamaan seperti Natal, Idul Fitri, dan Paskah, akan diposting poster khusus berisi ucapan selamat memperingati hari raya tersebut. Program ini bertujuan untuk memberikan inspirasi rohani, memperkuat hubungan antarjemaat, serta menyemarakkan momen-momen penting dalam kehidupan beragama dengan penuh makna.
                    </div>
                </div>
            </div>
            <div class="program-item">
                <div class="row">
                    <div class="col-md-3 program-item-title">Caring Hearts</div>
                    <div class="col-md-9">
                        Kegiatan yang dilaksanakan oleh divisi kerohanian, di mana mereka akan mengunjungi tempat-tempat sosial seperti panti asuhan dan gereja untuk memberikan bantuan sesuai kemampuan. Melalui program ini, diharapkan rasa kepedulian sosial mahasiswa Sistem Informasi dapat semakin meningkat.
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

@endsection