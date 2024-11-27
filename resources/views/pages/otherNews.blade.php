@extends('layouts.app')

@section('title', 'Other News')

@section('content')
    <div class="container" style="padding-top:120px;">
        <div class="row mb-4">
            <div class="col-md-12">
                <form class="d-flex" method="GET" action="{{ route('otherNews') }}">
                    <input aria-label="Search" class="form-control mr-3" placeholder="Search" type="search" name="search"
                        value="{{ request()->input('search') }}" />
                    <button class="btn btn-outline-primary" type="submit">
                        Search
                    </button>
                </form>
            </div>
        </div>

        @if ($news->count())
            @foreach ($news as $item)
                <div class="row mb-4">
                    <div class="col-md-4">
                        <img alt="{{ $item->title }}" class="img-fluid" height="200"
                            src="{{ Storage::url($item->image) }}" width="300" />
                    </div>

                    <div class="col-md-8">
                        <!-- Membungkus judul berita dengan tautan ke detail berita -->
                        <h5>
                            <a href="{{ route('detailNews', ['slug' => $item->slug]) }}">
                                {{ $item->title }}
                            </a>
                        </h5>
                        <p>{{ Str::limit($item->body, 150) }}</p>
                        <p>{{ $item->created_at->format('d F Y') }}</p>
                    </div>
                </div>
            @endforeach
        @else
            <p>No news found matching</p>
        @endif

        <!-- Pagination Links -->
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                <!-- Pagination Links -->
                {{ $news->links('pagination::bootstrap-5') }}
            </ul>
        </nav>

    </div>
@endsection
