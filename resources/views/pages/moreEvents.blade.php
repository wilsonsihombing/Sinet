@extends('layouts.app')

@section('title', 'More Events')

@section('content')
    <!-- main -->
    <main>
        <section class="section-event-header"></section>
        <section class="section-popular-content" id="popularContent">
            <div class="container">
                {{-- breadcrumb --}}
                <div class="row">
                    <div class="col p-0">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="/">Home</a> <!-- Link untuk Home -->
                                </li>
                                <li class="breadcrumb-item active">
                                    More Event <!-- Link untuk More Event -->
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
                
                <!-- Form Pencarian -->
                <div class="row mb-4">
                    <div class="col-md-12">
                        <form class="d-flex" method="GET" action="{{ route('moreEvents') }}">
                            <input aria-label="Search" class="form-control mr-3" placeholder="Search Events" type="search" name="search" value="{{ request()->input('search') }}" />
                            <button class="btn btn-outline-primary" type="submit">
                                Search
                            </button>
                        </form>
                    </div>
                </div>

                <div class="section-popular-event row justify-content-center">
                    @foreach ($items as $item)
                        <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                            <div class="card-event position-relative text-center d-flex flex-column"
                                style="background-image: url('{{ $item->galleryEvents->count() ? Storage::url($item->galleryEvents->first()->image) : '' }}');">
                                <div class="party-event position-relative z-index-2 text-white p-3">
                                    <h4 class="font-weight-bold">{{ $item->title }}</h4>
                                </div>
                                <div class="card-event-title">
                                    <div class="party-event">
                                        {{ $item->location }}
                                    </div>
                                </div>                                
                                <div class="party-button mt-auto positon-relative z-index-2">
                                    <a href="{{ route('details', $item->slug) }}" class="btn btn-party-details px-4">
                                        VIEW DETAILS
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                {{-- <div class="section-popular-event row justify-content-center">
                    @foreach ($items as $item)
                        <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                            <div class="card-event position-relative text-center d-flex flex-column" 
                                style="background-image: url('{{ $item->galleryEvents->count() ? Storage::url($item->galleryEvents->first()->image) : '' }}');">
                                <div class="overlay position-absolute top-0 left-0 w-100 h-100 bg-dark opacity-50"></div>
                                <div class="party-event position-relative z-index-2 text-white p-3">
                                    <h4 class="font-weight-bold">{{ $item->title }}</h4>
                                </div>
                                <div class="party-button mt-auto position-relative z-index-2">
                                    <a href="{{ route('details', $item->slug) }}" class="btn btn-party-details px-4 py-2 text-white">
                                        VIEW DETAILS
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div> --}}

                <!-- Pagination -->
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        {{ $items->links('pagination::bootstrap-5') }} <!-- Menampilkan pagination -->
                    </div>
                </div>

            </div>
        </section>
    </main>
@endsection
