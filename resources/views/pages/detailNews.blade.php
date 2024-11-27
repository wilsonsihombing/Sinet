@extends('layouts.app')

@section('title', 'Details News')

@section('content')
    <div class="container" style="padding-top:110px;">
        <div class="row">
            <div class="col-md-8">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('home') }}">Beranda</a> <!-- Ganti dengan route home atau halaman utama Anda -->
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{ route('otherNews') }}">Berita</a> <!-- Ganti dengan route untuk daftar berita -->
                        </li>
                        <li aria-current="page" class="breadcrumb-item active">
                            {{ $news->title }} <!-- Menampilkan judul berita -->
                        </li>
                    </ol>
                </nav>                
                <h1 class="news-title">{{ $news->title }}</h1> <!-- Menampilkan judul berita -->
                <p class="news-meta">
                    {{ $news->created_at->format('d M Y, H:i:s') }} <!-- Menampilkan tanggal berita -->
                </p>

                <img alt="{{ $news->title }}" class="img-fluid mt-3" height="400" src="{{ Storage::url($news->image) }}"
                    width="750" /> <!-- Menampilkan gambar berita -->

                <div class="news-content">
                    <p>{{ $news->body }}</p> <!-- Menampilkan isi berita -->
                </div>
            </div>

            <div class="col-md-4 sidebar">
                <h5>Terbaru</h5>
                <ul class="list-group">
                    @foreach ($latestNews as $item)
                        <!-- Menampilkan berita terbaru -->
                        <li class="list-group-item">
                            <a href="{{ route('detailNews', $item->slug) }}">
                                <img alt="{{ $item->title }}" height="50" src="{{ Storage::url($item->image) }}"
                                    width="50" />
                                <p>{{ $item->title }}</p>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection
