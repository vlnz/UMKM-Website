@extends('frontend.layouts.app')

@section('main')
    <section>
        @foreach ($categories as $item)
        @if ($item->id == 1)
            <div class="hero" id="home">
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-lg-5">
                            <div class="intro-excerpt">
                                <h1>Lele Berkualitas <br>Percayakan <span style="color: #F8BC38;">Dengan Kami</span>
                                </h1>
                                <p class="lead mt-4 text-justify"
                                    style="text-align: justify; font-size: 16px; width:650px;">
                                    {{ $item->description }}
                                </p>
                                <p><a href="https://api.whatsapp.com/send?phone=6285791323118&text="
                                        class="btn btn-secondary me-2">Contact Now</a><a
                                        href="{{ route('frontend.about') }}" class="btn btn-white-outline"
                                        style="width: 150px;">Explore</a></p>
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

        @if ($item->id == 2)
            <!-- Start Product Section -->
            <div class="product-section" id="about">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-4">
                            <img src="{{ asset($item->image) }}" class="img-fluid product-thumbnail"
                                alt="Menjala Ikan">
                        </div>
                        <div class="col-md-8">
                            <h2 class="mb-4 section-title">{{ $item->name }}</h2>
                            <p class="lead mt-4 text-justify" style="text-align: justify; font-size: 16px;">
                                {{ $item->description }}
                            </p>
                            <p>
                                <a href="{{ route('frontend.about') }}" class="btn"
                                    style="width: 200px;">Explore</a>
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        @endif


        @if ($item->id == 3)
            <div class="why-choose-section" id="services">
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-lg-6">
                            <h2 class="section-title">{{ $item->name }}</h2>
                            <p style="text-align: justify; font-size: 16px;">{{ $item->description }}</p>

                            <div class="row my-5">
                                <div class="col-6 col-md-6">
                                    <div class="feature">
                                        <div class="icon">
                                            <img src="{{ asset('assets/images/truck.svg') }}" alt="Image"
                                                class="imf-fluid">
                                        </div>
                                        <h3>Pengiriman Cepat &amp; Efisien</h3>
                                    </div>
                                </div>

                                <div class="col-6 col-md-6">
                                    <div class="feature">
                                        <div class="icon">
                                            <img src="{{ asset('assets/images/bag.svg') }}" alt="Image"
                                                class="imf-fluid">
                                        </div>
                                        <h3>Mudah untuk Membeli
                                            Maupun Bermitra</h3>

                                    </div>
                                </div>

                                <div class="col-6 col-md-6">
                                    <div class="feature">
                                        <div class="icon">
                                            <img src="{{ asset('assets/images/support.svg') }}" alt="Image"
                                                class="imf-fluid">
                                        </div>
                                        <h3>Dukungan 24/7 Untuk Investor </h3>
                                    </div>
                                </div>

                                <div class="col-6 col-md-6">
                                    <div class="feature">
                                        <div class="icon">
                                            <img src="{{ asset('assets/images/return.svg') }}" alt="Image"
                                                class="imf-fluid">
                                        </div>
                                        <h3>Komplain atau Saran
                                            Bebas Kerumitan</h3>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-lg-5">
                            <div class="img-wrap col-md-4">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3949.922905924852!2d111.86419567395758!3d-8.10933259191975!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78e3c2364f224b%3A0xd82709517f772f32!2sSiswoyo%20Lele!5e0!3m2!1sid!2sid!4v1733929303672!5m2!1sid!2sid"
                                    width="400" height="300" style="border:0;" allowfullscreen=""
                                    loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                            <h2 class="section-title" style="padding-top: 10px">Alamat Kami</h2>
                            <p style="width:300px;">Temenggungan, Tawing, Kec. Gondang, Kabupaten Tulungagung, Jawa
                                Timur 66263</p>
                            <p><a href="https://maps.app.goo.gl/eVbv7xSiAD1o8LHU9" class="btn">Maps</a></p>
                        </div>
                    </div>
                </div>
            </div>
        @endif


        @if ($item->id == 4)
            <div class="we-help-section" id="benefit">
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-lg-7 mb-5 mb-lg-0">
                            <div class="imgs-grid">
                                <div class="grid grid-1"><img src="{{ asset($item->image) }}" alt="gambar-lele">
                                </div>
                                <div class="grid grid-3"><img src="{{ asset('assets/images/lelebanyak.png') }}"
                                        alt="gambar-lele"></div>
                                <div class="grid grid-2"><img src="{{ asset('assets/images/image4.png') }}"
                                        alt="gambar-lele"></div>
                            </div>
                        </div>
                        <div class="col-lg-5 ps-lg-5">
                            <h2 class="section-title mb-4">{{ $item->name }}</h2>
                            <p style="text-align: justify; font-size: 16px;">{{ $item->description }}</p>

                            <ul class="list-unstyled custom-list my-4">
                                <li><b>Benefit yang Banyak</b>
                                    <p>Dengan bermitra atau menggunakan Jasa atau Budidaya lele kami pastinya
                                        mendapatkan potongan harga yang lebih baik</p>
                                </li>
                                <li><b>Kualitas Lele yang Terbaik</b>
                                    <p>Kami selalu memberikan Pakan yang paling berkualitas untuk Pakan lele kami jadi
                                        tidak usah ragu untuk memastikan lele tersebut</p>
                                </li>
                                <li><b>Lebih Banyak Waktu</b>
                                    <p>Kami melakukan pengiriman pada saat itu juga tanpa adanya delay dengan begitu
                                        pelanggan dapat dengan santai menunggu lelenya</p>
                                </li>
                                <li><b>Ramah Bagi Lingkungan</b>
                                    <p>Kami membuang limbah lele tersebut di selokan kusus guna agar di serap oleh tanah
                                        nantinya ataupun menguap</p>
                                </li>
                                <h2 class="section-title mb-4">Hubungi Kami Segera via WhatsUp</h2>
                                <div class="d-flex gap-3">
                                    <a href="#home" class="btn btn-secondary me-2">Explore Now</a>
                                    <a href="https://api.whatsapp.com/send?phone=6285791323118&text="
                                        class="btn btn-success">Contact Now</a>
                                </div>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        @endif

        @if ($item->id > 4)
            <div class="product-section" id="more">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-4">
                            <img src="{{ asset($item->image) }}" class="img-fluid product-thumbnail"
                                alt="Menjala Ikan">
                        </div>
                        <div class="col-md-8">
                            <h2 class="mb-4 section-title">{{ $item->name }}</h2>
                            <p class="lead mt-4 text-justify" style="text-align: justify; font-size: 16px;">
                                {{ $item->description }}
                            </p>
                            <p>
                                <a href="{{ route('frontend.about') }}" class="btn"
                                    style="width: 200px;">Explore</a>
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        @endif
    @endforeach
    </section>

@endsection

