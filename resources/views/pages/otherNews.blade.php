@extends('layouts.app')

@section('title', 'Other News')

@section('content')
    <div class="container" style="padding-top: 120px;">
        <!-- Search Bar -->
        <div class="row mb-4">
            <div class="col-md-12">
                <form class="d-flex search-form" method="GET" action="{{ route('otherNews') }}">
                    <input aria-label="Search" class="form-control search-input mr-3" placeholder="Search" type="search"
                        name="search" value="{{ request()->input('search') }}" />
                    <button class="btn btn-primary search-btn" type="submit">
                        <i class="fas fa-search"></i> Search
                    </button>
                </form>
            </div>
        </div>

        <!-- News Section -->
        @if ($news->count())
            @foreach ($news as $item)
                <div class="row news-item mb-4 align-items-center">
                    <div class="col-md-4">
                        <div class="news-image-container">
                            <img alt="{{ $item->title }}" class="img-fluid news-image" height="200"
                                src="{{ Storage::url($item->image) }}" width="300" />
                        </div>
                    </div>

                    <div class="col-md-8">
                        <h5 class="news-title">
                            <a href="{{ route('detailNews', ['slug' => $item->slug]) }}" class="news-link">
                                {{ $item->title }}
                            </a>
                        </h5>
                        <p class="news-description">{{ Str::limit($item->body, 150) }}</p>
                        <p class="news-date text-muted">{{ $item->created_at->format('d F Y') }}</p>
                    </div>
                </div>
            @endforeach
        @else
            <p class="text-center text-muted">No news found matching</p>
        @endif

        <!-- Pagination Links -->
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                {{ $news->links('pagination::bootstrap-5') }}
            </ul>
        </nav>
    </div>
@endsection
