@extends('layouts.app')

@section('title', 'More Events')

@section('content')
    <!-- main -->
    <main>
        <section class="section-event-header"></section>
        <section class="section-popular-content" id="popularContent">
            <div class="container">
                {{-- breadcrumb --}}
                {{-- <div class="row">
                    <div class="col p-0">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">Home</li>
                                <li class="breadcrumb-item active">More Event</li>
                            </ol>
                        </nav>
                    </div>
                </div> --}}
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

                <div class="section-popular-event row justify-content-center">
                    @foreach ($items as $item)
                        <div class="col-sm-6 col-md-4 col-lg-3">
                            <div class="card-event text-center d-flex flex-column"
                                style="background-image: url('{{ $item->galleryEvents->count() ? Storage::url($item->galleryEvents->first()->image) : '' }}');">
                                <div class="party-event">{{ $item->title }}</div>
                                <div class="party-button mt-auto">
                                    <a href="{{ route('details', $item->slug) }}" class="btn btn-party-details px-4">
                                        VIEW DETAILS
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </section>
    </main>
@endsection
