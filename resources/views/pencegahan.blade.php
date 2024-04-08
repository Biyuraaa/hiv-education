@extends('template')
@section('content')
<div class="container-fluid bg-primary py-5 mb-5" style="background-image: url('{{asset('assets/images/home.jpg')}}'); background-size: cover; background-position: center;">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                <h1 class="display-3 text-white animated slideInDown">Pencegahan</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- Header End -->

<!-- Pencegahan Start -->
<div class="container-xxl py-4 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="text-left" style="text-align: left;">
            <h6 class="section-title bg-white text-center text-primary px-3"></h6>
            <h2 class="mb-4 biggest-font" style="font-size: 2rem;"> <!-- Modified font size -->
                Pencegahan HIV/AIDS<br>
                HIV/AIDS apabila tidak mendapatkan pengobatan akan berdampak pada gangguan kesehatan lainnya seperti Tuberkulosis (TB), Infeksi Saluran Pernapasan Akut (ISPA), bahkan kanker. Penderita HIV/AIDS dapat melakukan pengobatan berupa terapi Antiretroviral (ARV) yang akan bekerja mencegah virus HIV berkembang. <br>Bahaya HIV/AIDS ini tidak akan hanya dirasakan oleh satu orang, tetapi dapat menular kepada orang lain. <br><br>Maka dari itu perlu dilakukan pencegahan HIV/AIDS dengan cara: <br>1. Tidak melakukan hubungan seksual sebelum menikah <br>2. Tidak berganti - ganti pasangan seksual <br>3. Menggunakan pengaman saat berhubungan seksual <br>4. Menghindari penggunaan narkoba, terutama jenis suntik.
            </h2>
        </div>
    </div>
</div>
@endsection
