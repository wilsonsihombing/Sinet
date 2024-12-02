@extends('layouts.app')

@section('title', 'Info Karier')

@section('content')
    <div class="container" style="margin-top: 100px">
        <div class="row mb-3">
            <div class="col-md-12 d-flex justify-content-between">
                <!-- Form Pencarian -->
                <form class="d-flex align-items-center mb-4" method="GET" action="{{ route('career.search') }}">
                    <div class="input-group w-100">
                        <!-- Input pencarian -->
                        <input aria-label="Search" class="form-control rounded-pill border-primary mr-2" name="search"
                            placeholder="Search for jobs..." type="search" value="{{ request()->input('search') }}"
                            style="border-radius: 30px 0 0 30px;" />

                        <!-- Tombol pencarian -->
                        <button class="btn btn-outline-primary rounded-pill" type="submit"
                            style="border-radius: 0 30px 30px 0;">
                            <i class="bi bi-search"></i> Search
                        </button>
                    </div>
                </form>

                <a href="{{ route('career.create') }}">
                    <button class="btn btn-primary">
                        Tambahkan Loker
                    </button>
                </a>
            </div>
        </div>

        <div class="row">
            <!-- Kolom untuk daftar lowongan -->
            <div class="col-md-4">
                <p class="mb-4"><strong>{{ $careers->count() }}</strong> lowongan</p>

                @if ($careers->count() > 0)
                    @foreach ($careers as $career)
                        <div class="job-card card mb-4 shadow-lg rounded-lg border-0">
                            <div class="card-body">
                                <h5 class="job-title">
                                    <a href="javascript:void(0)" class="career-link" data-id="{{ $career->id }}"
                                        style="text-decoration: none; color: #007bff; font-size: 1.1em; font-weight: 600;">
                                        {{ $career->title }}
                                    </a>
                                </h5>
                                <p class="job-location text-muted" style="font-size: 0.9em;">
                                    <i class="bi bi-person-circle"></i> {{ $career->poster->name ?? 'Tidak diketahui' }}
                                </p>
                                <p class="job-description" style="font-size: 0.95em; color: #333;">
                                    {{ implode(' ', array_slice(explode(' ', $career->description), 0, 20)) }}...
                                </p>
                            </div>
                            <div class="card-footer bg-light border-top-0 text-muted">
                                <p class="job-posted" style="font-size: 0.85em;">
                                    <i class="bi bi-calendar-event"></i> {{ $career->posted_date->diffForHumans() }}
                                </p>
                            </div>
                        </div>
                    @endforeach
                @else
                    <p class="text-center">Tidak ada lowongan yang ditemukan untuk pencarian ini.</p>
                @endif
            </div>

            <!-- Kolom untuk menampilkan detail lowongan yang dipilih -->
            <div class="col-md-8" id="career-detail"
                style="background-color: #f8f9fa; padding: 20px; border-radius: 8px; height: 100%;">
                <p class="text-center text-muted" style="font-size: 1.2em; padding-top: 100px;">
                    Pilih lowongan untuk melihat detail.
                </p>
            </div>
        </div>

    </div>

    <!-- Script untuk menampilkan detail lowongan ketika diklik -->
    <script>
        document.querySelectorAll('.career-link').forEach(function(link) {
            link.addEventListener('click', function() {
                const careerId = this.getAttribute('data-id');

                // Lakukan request ke server untuk mengambil data detail lowongan
                fetch(`/infokarier/${careerId}`)
                    .then(response => response.json())
                    .then(data => {
                        // Tampilkan detail lowongan di kolom sebelah kanan
                        const detailContainer = document.getElementById('career-detail');
                        detailContainer.innerHTML = `
                            <div class="card shadow-lg rounded-lg" style="background-color: #f9f9f9; padding: 20px;">
                                <h1 class="display-4 text-primary" style="font-weight: 600;">${data.title}</h1>
                                <p class="lead"><strong>Diposting oleh:</strong> ${data.poster.name || 'Tidak diketahui'}</p>
                                <p><strong><i class="bi bi-calendar-event"></i> Tanggal Posting:</strong> ${data.posted_date}</p>
                                <p><strong><i class="bi bi-calendar-x"></i> Tanggal Expired:</strong> 
                                    ${data.expired_date ? new Date(data.expired_date).toLocaleDateString() : 'Tidak ada'}</p>
                                <hr />
                                <h5><strong>Deskripsi:</strong></h5>
                                <p>${data.description}</p>
                               <button class="btn btn-outline-primary btn-lg mt-3" onclick="window.location.href='mailto:${data.poster.email}'">Hubungi Poster</button>
                            </div>
                        `;

                        // Animasi tampilkan konten detail dengan efek fade-in
                        detailContainer.classList.add('fade-in');
                    })
                    .catch(error => console.error('Error:', error));
            });
        });
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const careerLinks = document.querySelectorAll(".career-link");
            const careerDetail = document.getElementById("career-detail");

            careerLinks.forEach(link => {
                link.addEventListener("click", function() {
                    const careerId = this.getAttribute("data-id");

                    // Simulasikan pemuatan detail (Ganti dengan Ajax jika perlu)
                    careerDetail.innerHTML = `
                    <h3>Detail Lowongan </h3>
                    <p>Detail lengkap lowongan akan ditampilkan di sini...</p>
                `;

                    // Tambahkan animasi aktif
                    careerDetail.classList.add("active");
                });
            });
        });
    </script>

@endsection
