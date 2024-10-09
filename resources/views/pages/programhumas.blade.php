@extends('layouts.app')

@section('title')
    Program Humas
@endsection

@section('content')

    <body>
        <div class="container proker text-center">
            <h1>HUMAS</h1>
            <div class="d-flex justify-content-center">
                <div class="profile-wrapper">
                    <div class="profile-circle">
                        <img src="{{ url('frontend/images/kezia.png') }}" alt="Profile 1">
                    </div>
                    <div class="profile-name">Rahel Simanjuntak</div>
                </div>
                <div class="profile-wrapper">
                    <div class="profile-circle">
                        <img src="{{ url('frontend/images/kezia.png') }}" alt="Profile 1">
                    </div>
                    <div class="profile-name">Rahel Simanjuntak</div>
                </div>
                <div class="profile-wrapper">
                    <div class="profile-circle">
                        <img src="{{ url('frontend/images/kezia.png') }}" alt="Profile 1">
                    </div>
                    <div class="profile-name">Rahel Simanjuntak</div>
                </div>
                <div class="profile-wrapper">
                    <div class="profile-circle">
                        <img src="{{ url('frontend/images/kezia.png') }}" alt="Profile 1">
                    </div>
                    <div class="profile-name">Rahel Simanjuntak</div>
                </div>
                <div class="profile-wrapper">
                    <div class="profile-circle">
                        <img src="{{ url('frontend/images/kezia.png') }}" alt="Profile 1">
                    </div>
                    <div class="profile-name">Rahel Simanjuntak</div>
                </div>
            </div>
        </div>
        <div class="container mt-4 py-4">
            <div class="program-title">Program Kerja</div>
            <div class="program-content">
                <div class="program-item">
                    <div class="row">
                        <div class="col-md-3 program-item-title">Membantu Program Kerja Divisi Lain</div>
                        <div class="col-md-9">
                            Program Membantu Program Kerja Divisi Lain merupakan inisiatif untuk meningkatkan kolaborasi
                            antar divisi dalam organisasi. Melalui program ini, anggota dapat memberikan dukungan dalam
                            bentuk tenaga, ide, atau sumber daya untuk membantu mencapai tujuan yang telah ditetapkan oleh
                            divisi lain. Dengan bekerja sama, diharapkan sinergi antar divisi dapat tercipta, meningkatkan
                            efektivitas dan efisiensi dalam pelaksanaan program kerja di organisasi.
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </body>
@endsection
