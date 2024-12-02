@extends('layouts.app')

@section('title', 'Details News')

@section('content')
    <div class="container news-container py-5" style="margin-top: 70px;">
        <div class="row">
            <!-- Kolom Konten Utama -->
            <div class="col-md-8">
                <nav aria-label="breadcrumb" class="news-breadcrumb mb-4">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Beranda</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('otherNews') }}">Berita</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $news->title }}</li>
                    </ol>
                </nav>
                <h1 class="news-title">{{ $news->title }}</h1>
                <p class="news-meta text-muted">
                    <i class="bi bi-calendar-event"></i> {{ $news->created_at->format('d M Y, H:i:s') }}
                </p>
                <div class="news-image-wrapper">
                    <img src="{{ Storage::url($news->image) }}" alt="{{ $news->title }}" class="img-fluid rounded" />
                </div>
                <div class="news-content mt-4">
                    <p>{{ $news->body }}</p>
                </div>
            </div>

            <!-- Kolom Sidebar -->
            <div class="col-md-4">
                <div class="sidebar">
                    <h5 class="sidebar-title">Berita Terbaru</h5>
                    <ul class="list-group list-group-flush">
                        @foreach ($latestNews as $item)
                            <li class="list-group-item latest-news-item">
                                <a href="{{ route('detailNews', $item->slug) }}"
                                    class="latest-news-link d-flex align-items-center">
                                    <img src="{{ Storage::url($item->image) }}" alt="{{ $item->title }}"
                                        class="latest-news-image me-3" />
                                    <p class="latest-news-title">{{ $item->title }}</p>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
