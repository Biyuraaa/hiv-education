@extends('template')
@section('content')
<div class="container-fluid bg-primary py-5 mb-5" style="background-image: url('{{ asset("assets/images/HIVV.jpg") }}'); background-size: cover; background-position: center;">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                <h1 class="display-3 text-white animated slideInDown">Penyebab</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <!-- Breadcrumb items can be added here if needed -->
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- Header End -->

<!-- Penyebab Start -->
<div class="container-xxl py-4 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="text-left">
            <h6 class="section-title bg-white text-center text-primary px-3">Penyebab HIV/AIDS</h6>
            <div class="mb-4">
                <!-- Removed biggest-font class, not a standard Bootstrap class -->
                Penyakit HIV/AIDS dapat terjadi melalui hubungan seksual vaginal atau anal, penggunaan jarum suntik, dan transfusi darah. HIV dapat menular dari ibu kepada anak selama masa kehamilan, melahirkan, dan menyusui.<br><br>
                Berikut ini beberapa faktor risiko meningkatkan penularan HIV/AIDS:
            </div>
            <ul class="list-unstyled">
                <!-- Removed ul and list-unstyled -->
                <li>1. Berhubungan seksual dengan berganti-ganti pasangan tanpa menggunakan pengaman</li>
                <li>2. Menggunakan jarum suntik bersama-sama</li>
                <li>3. Transfusi darah yang tidak steril</li>
                <li>4. Mengidap penyakit STD atau penyakit menular seksual lainnya</li>
            </ul>
        </div>
    </div>
</div>
@endsection
