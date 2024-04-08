@extends('template')
@section('content')
<div class="container-fluid bg-primary py-5 mb-5" style="background-image: url('{{ asset('assets/images/HIV11.jpg') }}'); background-size: cover; background-position: center;">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                <h1 class="display-3 text-white animated slideInDown">Gejala & Diagnosis</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- Header End -->

<!-- Gejala Start -->
<div class="container-xxl py-4 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="text-left" style="text-align: left;">
            <h6 class="section-title bg-white text-center text-primary px-3"></h6>
            <h2 class="mb-4 biggest-font" style="font-size: 2rem;"> <!-- Modified font size -->
                Gejala HIV/AIDS<br>
                Gejala HIV/AIDS terjadi ke dalam beberapa tahapan seperti: <br>1. Gejala tahap pertama: <br>- Mudah terserang flu <br>- Demam <br>- Sakit Tenggorokan <br>- Timbul ruam <br>- Nyeri otot <br><br>2. Gejala tahap kedua: <br>Mengalami gejala HIV/AIDS yang sama dengan tahap pertama tetapi akan berlangsung selama kurang lebih 10 tahun. <br><br>3. Gejala tahap ketiga: <br>Di tahap ketiga, mulai terjadi infeksi dari virus HIV kemudian akan memasuki fase AIDS, dengan menimbulkan beberapa gejala seperti: <br>- Demam yang berkepanjangan (lebih dari 10 hari) <br>- Selalu merasa lemas <br>- Kesulitan untuk bernafas <br>- Mengalami gangguan diare kronis dalam kurun waktu yang lama <br>- Mudah terserang infeksi jamur pada mulut, tenggorokan dan alat kelamin <br>- Berat badan turun drastis karena kehilangan nafsu makan.
            </h2>
        </div>
    </div>
</div>
@endsection
