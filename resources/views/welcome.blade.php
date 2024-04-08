@extends('template')
@section('content')
<div class="container-fluid p-0 mb-5">
        <div class=" header-carousel position-relative">
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="{{asset('assets/images/HIV5.jpg')}}">                
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .7);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-12">
                                <h5 class="text-primary text-uppercase mb-3 animated slideInDown">Penyakit HIV</h5>
                                <h1 class="display-3 text-white animated slideInDown">Pengertian HIV dan AIDS</h1>
                                <p class="fs-5 text-white mb-4 pb-2">HIV (human immunodeficiency virus) adalah virus yang merusak sistem kekebalan tubuh dengan menginfeksi dan menghancurkan sel CD4. Jika makin banyak sel CD4 yang hancur, daya tahan tubuh akan makin melemah sehingga rentan diserang berbagai penyakit.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
    <!-- Home End -->

    <!-- Text Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="{{asset('assets/images/HIV1.png')}}" alt="" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-primary pe-3"></h6>
                    <h1 class="mb-4"></h1>
                    <p class="mb-4">Saat ini, masih banyak masyarakat yang tidak mengerti apa itu HIV, termasuk penularannya. HIV dapat ditularkan melalui pertukaran berbagai cairan tubuh dari orang yang terinfeksi, seperti darah, ASI (Air Susu Ibu), cairan vagina, cairan sperma, ataupun jarum suntik bekas ODHIV. HIV itu juga dapat ditularkan dari seorang ibu ke anaknya selama kehamilan dan persalinan. Orang tidak dapat terinfeksi melalui kontak sehari-hari seperti mencium, berpelukan, berjabat tangan, atau berbagi benda pribadi, makanan, atau air.</p>
                    <img class="img-fluid position-absolute w-30 h-30" src="{{asset('assets/images/HIV3.jpeg')}}" alt="" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection