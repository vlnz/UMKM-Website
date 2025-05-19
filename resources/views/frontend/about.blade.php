@extends('frontend.layouts.app')

@section('about')
    <section>
        @foreach ($categories as $item)
            @if ($item->id == 2)
                <div class="hero">
                    <div class="container">
                        <div class="row justify-content-between">
                            <div class="col-lg-5">
                                <div class="intro-excerpt">
                                    <h1>{{ $item->name }}</h1>
                                    <p class="lead mt-4 text-justify"
                                        style="text-align: justify; font-size: 16px; width:650px;">
                                        {{ $item->description }}
                                    </p>
                                    <p><a href="https://api.whatsapp.com/send?phone=6285339163645&text="
                                            class="btn btn-secondary me-2">Contact Now</a><a href="{{ route('/') }}"
                                            class="btn btn-white-outline" style="width: 150px;">Back Now</a></p>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="hero-img-wrap">
                                    <img src="{{ asset($item->image) }}" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wave-container">
                    <img src="{{ asset('assets/images/wave.png') }}" alt="wave">
                </div>
            @endif
        @endforeach
    </section>
@endsection
