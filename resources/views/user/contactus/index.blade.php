@extends('user.layouts.main')

@section('container')


<div class="container-fluid" style="background-image: url('img/backsepatu.jpeg'); ">
    <div class="container d-block" style="background-color: rgba(0, 0, 0, 0.5); backdrop-filter: blur(7px); padding-top: 120px">
        <h2 class="display-3 text-center text-white" id="kontak">Kontak Kami</h2>
        <p class="text-center text-white">
            Hubungi kami untuk informasi lebih lanjut atau pesan produk sepatu terbaru!
        </p>

        <div class="container mt-5">
            <div class="text-center text-white pb-5 mb-5">
                <h2>Kontak kami sekarang untuk gaya sepatu terkini!</h2>
                <p>Lokasi Anda diluar Kota?</p>
                <p>Nggak jadi masalah! Semua bisa diatur...</p>
            </div>
        </div>

        <div class="d-flex pt-2 pb-3">
            <a class="btn btn-outline-light btn-social" target="_blank" href="http://wa.me/6281908255029"><i class="fab fa-whatsapp"></i></a>
            <a class="btn btn-outline-light btn-social" target="_blank" href="https://web.facebook.com/muhammad.azrulihwan"><i class="fab fa-facebook-f"></i></a>
            <a class="btn btn-outline-light btn-social" target="_blank" href="https://www.youtube.com/@muhammadazrulihwan"><i class="fab fa-youtube"></i></a>
            <a class="btn btn-outline-light btn-social" target="_blank" href="https://www.instagram.com/muhammadazrul_05/"><i class="fab fa-instagram"></i></a>
        </div>
    </div>
</div>



    <!-- Informasi Kontak -->
    <div class="container-fluid pt-5 mt-4 pb-5 bg-dark text-white">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <ul class="list-unstyled">
                        <li><i class="fa-solid fa-map-marker-alt"></i> Alamat: Jl. Contoh No. 123, Kota Anda</li>
                        <li><i class="fa-solid fa-clock"></i> Jam Operasional: Senin-Jumat, 09:00 - 17:00</li>
                        <li><i class="fa-brands fa-whatsapp"></i> WhatsApp: +62 123 4567 8901</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="list-unstyled">
                        <li><i class="fa-solid fa-envelope"></i> Email: info@kickcorner.com</li>
                        <li><i class="fa-brands fa-instagram"></i> Instagram: @kickcorner_official</li>
                        <li><i class="fa-brands fa-facebook"></i> Facebook: /kickcorner</li>
                        <li><i class="fa-brands fa-youtube"></i> Youtube: /kickcorner_channel</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Informasi Kontak -->


@endsection
