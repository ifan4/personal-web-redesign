@extends('layouts.base')


@section('content')
    @include('components.header')

    <div class="container">
        <div class="row align-items-center justify-content-center">

            <div class="col-lg-5 d-flex justify-content-center" id="images-headline">
                <img src="{{ asset('assets/ifn-photo-left.svg') }}" alt="" class="d-md-none">
                <img src="{{ asset('assets/ifn-photo.svg') }}" alt="" class="mb-4 mx-2 mx-lg-0">
                <img src="{{ asset('assets/ifn-photo-right.svg') }}" alt="" class="d-md-none">
            </div>
         
            <div class="col-lg-7 text-white text-md-start text-center">
                <div class="headline-name fs-1 fw-bold lh-1 mb-1 mb-lg-3">
                    <span> Hi! I’m </span> 
                    <br>
                    <span style="color: #FCA61F"> Ifana Andriansyah </span>
                </div>
                <p class="identity-headline fw-light mb-3 mb-md-4">Front End Engineer intern at PT. Citi Asia International, Part Time Informatics Teacher at Sman 2 Kota Serang, Freelance Software Engineer & Student At Universitas Pendidikan Indonesia.</p>

                <p class="hello-desc fs-4">
                    Selamat datang di website pribadi Ifana Andriansyah, disini anda akan mendapatkan informasi portofolio milik Ifana Andriansyah dengan mudah dan friendly.
                </p>
                <button type="button" class="bg-yellow-special btn text-white fw-bold rounded-pill">Download CV</button>
            </div>
        </div>
    </div>

    @include('components.footer')
@endsection