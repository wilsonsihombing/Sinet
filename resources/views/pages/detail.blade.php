@extends('layouts.app')

@section('title', 'Event Details')

@section('content')
    <main>
        <section class="section-details-header">
            <!-- Hero Section with Background Image -->
            <div class="hero-section text-center text-white"
                style="background-image: url('{{ Storage::url($item->galleryEvents->first()->image) }}');">
                <div class="overlay"></div>
                <div class="hero-content">
                    <h1>{{ $item->title }}</h1>
                    <p class="lead">{{ $item->location }}</p>
                </div>
            </div>
        </section>

        <section class="section-details-content">
            <div class="container">

                <!-- Breadcrumbs -->
                <div class="row">
                    <div class="col p-0">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item"><a href="/moreEvents">More Events</a></li>
                                <li class="breadcrumb-item active">Details</li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <!-- Event Details Card -->
                <div class="row">
                    <div class="col-lg-12 pl-lg-0">
                        <div class="card card-details shadow-lg">
                            <div class="card-body">
                                <!-- Event Title and Location -->
                                <h2>{{ $item->title }}</h2>
                                <p class="text-muted">{{ $item->location }}</p>

                                <!-- Image Gallery -->
                                @if ($item->galleryEvents->count())
                                    <div class="gallery">
                                        <div class="xzoom-container">
                                            <img src="{{ Storage::url($item->galleryEvents->first()->image) }}"
                                                alt="Event Image" class="xzoom" id="xzoom-default"
                                                xoriginal="{{ Storage::url($item->galleryEvents->first()->image) }}" />
                                        </div>

                                        <div class="xzoom-thumbs">
                                            @foreach ($item->galleryEvents as $gallery)
                                                <a href="{{ Storage::url($gallery->image) }}">
                                                    <img src="{{ Storage::url($gallery->image) }}" alt="Gallery Image"
                                                        class="xzoom-gallery" width="209"
                                                        xpreview="{{ Storage::url($gallery->image) }}" />
                                                </a>
                                            @endforeach
                                        </div>
                                    </div>
                                @endif

                                <!-- Event Description -->
                                <h3 class="mt-5">Tentang Event</h3>
                                <p class="lead">{!! $item->about !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

@push('addon-script')
    <!-- Xzoom JS -->
    <script src="frontend/libraries/xzoom/dist/xzoom.min.js"></script>
    <script>
        $(document).ready(function() {
            // Initialize XZoom for image gallery
            $(".xzoom, .xzoom-gallery").xzoom({
                zoomWidth: 500,
                title: false,
                tint: "#333",
                Xoffset: 15,
            });
        });
    </script>
@endpush
