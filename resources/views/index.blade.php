@extends('layout.templates')
@section('content')
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <h2 class="section-title">Daftar Antrian</h2>
                </div>
                <!-- topic-item -->
                <div class="col-lg-4 col-sm-6 mb-4">
                    <a class="px-4 py-5 bg-white shadow text-center d-block match-height" onclick="cs()">
                        <i class="ti-credit-card icon text-primary d-block mb-4"></i>
                        <h3 class="mb-3 mt-0">{{ $antri_cs }}</h3>
                        <p class="mb-0">Customer Service</p>
                        @if ($antri === 'cs')
                            <audio controls autoplay hidden>
                                <source src="{{ asset('audio/' . $antri_cs . '.mp3') }}" type="audio/mpeg">
                            </audio>
                        @endif
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <a class="px-4 py-5 bg-white shadow text-center d-block match-height" onclick="teller1()">
                        <i class="ti-credit-card icon text-primary d-block mb-4"></i>
                        <h3 class="mb-3 mt-0">{{ $antri_teller1 }}</h3>
                        <p class="mb-0">Teller 1</p>
                        @if ($antri === 'tl1')
                            <audio controls autoplay hidden>
                                <source src="{{ asset('audio/' . $antri_teller1 . '.mp3') }}" type="audio/mpeg">
                            </audio>
                        @endif
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <a class="px-4 py-5 bg-white shadow text-center d-block match-height" onclick="teller2()">
                        <i class="ti-credit-card icon text-primary d-block mb-4"></i>
                        <h3 class="mb-3 mt-0">{{ $antri_teller2 }}</h3>
                        <p class="mb-0">Teller 2</p>
                        @if ($antri === 'tl2')
                            <audio controls autoplay hidden>
                                <source src="{{ asset('audio/' . $antri_teller2 . '.mp3') }}" type="audio/mpeg">
                            </audio>
                        @endif
                    </a>
                </div>
            </div>

        </div>
    </section>
    <!-- /topics -->

    <!-- call to action -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section px-3 bg-white shadow text-center">
                        <h2 class="mb-4">Didn&rsquo;t find an answer to your question?</h2>
                        <a href="" class="btn btn-primary">contact us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /call to action -->
@endsection
