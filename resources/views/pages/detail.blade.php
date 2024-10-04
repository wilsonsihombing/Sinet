@extends('layouts.app')

@section('title', 'details')

@section('content')
    <main>
        <section class="section-details-header"></section>
        <section class="section-details-content">
            <div class="container">
                <!-- breadcrumb -->
                <div class="row">
                    <div class="col p-0">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">Home</li>
                                <li class="breadcrumb-item active">More Events</li>
                                <li class="breadcrumb-item active">Details</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-lg-12 pl-lg-0">
                        <div class="card card-details">
                            <h1>Wisuda Angkatan 2019</h1>
                            <p>Himpunan Mahasiswa Sistem Informasi</p>
                            <div class="gallery">
                                <div class="xzoom-container">
                                    <img src="frontend/images/galleri1.JPG" alt="" class="xzoom" id="xzoom-default"
                                        xoriginal="frontend/images/galleri1.JPG" />
                                </div>

                                <div class="xzoom-thumbs">
                                    <a href="frontend/images/galleri1.JPG">
                                        <img src="frontend/images/galleri1.JPG" alt="" class="xzoom-gallery"
                                            width="200" xpreview="frontend/images/galleri1.JPG" />
                                    </a>
                                    <a href="frontend/images/galleri2.JPG">
                                        <img src="frontend/images/galleri2.JPG" alt="" class="xzoom-gallery"
                                            width="200" xpreview="frontend/images/galleri2.JPG" />
                                    </a>
                                    <a href="frontend/images/galleri3.JPG">
                                        <img src="frontend/images/galleri3.JPG" alt="" class="xzoom-gallery"
                                            width="200" xpreview="frontend/images/galleri3.JPG" />
                                    </a>
                                    <a href="frontend/images/galleri3.JPG">
                                        <img src="frontend/images/galleri3.JPG" alt="" class="xzoom-gallery"
                                            width="200" xpreview="frontend/images/galleri3.JPG" />
                                    </a>
                                    <a href="frontend/images/galleri3.JPG">
                                        <img src="frontend/images/galleri3.JPG" alt="" class="xzoom-gallery"
                                            width="200" xpreview="frontend/images/galleri3.JPG" />
                                    </a>
                                </div>
                            </div>
                            <h2>Tentang Events</h2>
                            <p>
                                Wisuda angkatan Himpunan Mahasiswa Sistem Informasi (HIMSI)
                                merupakan momen penting yang selalu dinantikan oleh para
                                mahasiswa, dosen, dan civitas akademika. Acara ini tidak hanya
                                menjadi penanda resmi berakhirnya masa studi di jurusan Sistem
                                Informasi, tetapi juga simbol keberhasilan para mahasiswa
                                dalam menempuh berbagai tantangan akademik dan organisasi.
                                HIMSI, sebagai organisasi kemahasiswaan, selalu memberikan
                                dukungan penuh dalam perjalanan mahasiswa hingga mencapai
                                titik wisuda, mulai dari pendampingan dalam kegiatan akademik,
                                pelatihan soft skill, hingga program kaderisasi yang
                                mempersiapkan generasi penerus. Kemeriahan acara wisuda ini
                                biasanya diwarnai dengan prosesi penyematan toga, pidato
                                perwakilan mahasiswa, serta penghargaan bagi lulusan dengan
                                prestasi akademik maupun non-akademik.
                            </p>
                            <p>
                                Sebagai bagian dari HIMSI, wisuda juga menjadi momen
                                kebanggaan bersama karena menunjukkan keberhasilan seluruh
                                ekosistem pembelajaran yang telah dibangun oleh himpunan. Para
                                lulusan tak hanya dibekali dengan pengetahuan teknis di bidang
                                teknologi informasi, tetapi juga soft skill yang telah diasah
                                selama berorganisasi, seperti kemampuan komunikasi,
                                kepemimpinan, dan kerja sama tim. Dengan latar belakang yang
                                kuat, lulusan HIMSI siap terjun ke dunia profesional di
                                berbagai bidang teknologi informasi, baik sebagai pengembang
                                sistem, analis data, maupun manajer proyek teknologi. Wisuda
                                ini juga menjadi momen refleksi bagi HIMSI untuk terus
                                meningkatkan kualitas program dan layanan mereka demi
                                mendukung mahasiswa angkatan-angkatan berikutnya meraih
                                kesuksesan yang lebih besar.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

@push('addon-script')
    <!-- Xzoom -->
    <script src="frontend/libraries/xzoom/dist/xzoom.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".xzoom, .xzoom-gallery").xzoom({
                zoomWidth: 500,
                title: false,
                tint: "#333",
                Xoffset: 15,
            });
        });
    </script>
@endpush
