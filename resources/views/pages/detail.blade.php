@extends('layouts.app')

@section('title', 'details')

@section('content')
    <main>
        <section class="section-details-header"></section>
        <section class="section-details-content">
            <div class="container">
                <!-- breadcrumb -->
                {{-- <div class="row">
                    <div class="col p-0">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">Home</li>
                                <li class="breadcrumb-item active">More Events</li>
                                <li class="breadcrumb-item active">Details</li>
                            </ol>
                        </nav>
                    </div>
                </div> --}}
                <div class="row">
                    <div class="col p-0">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="/">Home</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="/moreEvents">More Events</a>
                                </li>
                                <li class="breadcrumb-item active">
                                    Details
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12 pl-lg-0">
                        <div class="card card-details">
                            <h1>{{ $item->title }}</h1>
                            <p>{{ $item->location }}</p>

                            @if ($item->galleryEvents->count())
                                <div class="gallery">
                                    <div class="xzoom-container">
                                        <img src="{{ Storage::url($item->galleryEvents->first()->image) }}" alt=""
                                            class="xzoom" id="xzoom-default"
                                            xoriginal="{{ Storage::url($item->galleryEvents->first()->image) }}" />
                                    </div>

                                    <div class="xzoom-thumbs">
                                        @foreach ($item->galleryEvents as $gallery)
                                            <a href="{{ Storage::url($gallery->image) }}">
                                                <img src="{{ Storage::url($gallery->image) }}" alt=""
                                                    class="xzoom-gallery" width="209"
                                                    xpreview="{{ Storage::url($gallery->image) }}" />
                                            </a>
                                        @endforeach

                                    </div>
                                </div>
                            @endif

                            <h2>Tentang Events</h2>
                            <p>
                               {!! $item->about !!} 
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
