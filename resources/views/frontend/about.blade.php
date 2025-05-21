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
                                        <a href="https://api.whatsapp.com/send?phone=6285791323118&text="
                                            class="btn btn-success">Contact Now</a>
                                    </div>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
    </section>
@endsection
