@extends('layouts.base')


@section('content')
    @include('components.header')
    
    {{-- HEADLINE SECTION --}}
    <div class="container mt-5 pt-4">
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
    {{-- END OF HEADLINE SECTION --}}

    {{-- SOCIAL MEDIA SECTION --}}
    <div class="container my-4 mt-lg-0" id="sosmedSection">
        <div class="row justify-content-center fs-5 rounded-3 py-3">
            <h6 class="text-white text-center fs-light">Social Media:</h6>
            <div class="col-2 p-2 text-center">
                <a href="https://www.instagram.com/ifan.4" target="_blank" class="text-decoration-none link-light">
                    <div>
                        <i class="bi bi-instagram me-1"></i>
                        <span class="d-none d-md-inline">Instagram</span>
                    </div>
                </a>
            </div>
            <div class="col-2 p-2 text-center">
                <a href="https://www.linkedin.com/in/ifana-andriansyah-24ab58200" target="_blank" class="text-decoration-none link-light">
                    <div>
                        <i class="bi bi-linkedin me-1"></i>
                        <span class="d-none d-md-inline">Linkedin</span>
                    </div>
                </a>
            </div>
            <div class="col-2 p-2 text-center">
                <a href="https://www.youtube.com/channel/UCCcu1aEL1XVZYd0QHrmJ-EQ" target="_blank" class="text-decoration-none link-light w-100">
                    <div>
                        <i class="bi bi-youtube me-1"></i>
                        <span class="d-none d-md-inline">Youtube</span>
                    </div>
                </a>
            </div>
            <div class="col-2 p-2 text-center">
                <a href="https://github.com/ifan4" target="_blank" class="text-decoration-none link-light">
                    <div>
                        <i class="bi bi-github me-1"></i>
                        <span class="d-none d-md-inline">Github</span>
                    </div>
                </a>
            </div>
            <div class="col-2 p-2 text-center">
                <a href="https://gitlab.com/Ifant" target="_blank" class="text-decoration-none link-light">
                    <div>
                        <i class="bi bi-git me-1"></i>
                        <span class="d-none d-md-inline">Gitlab</span>
                    </div>
                </a>
            </div>
        
            
        </div>
    </div>
    {{-- END SOCIAL MEDIA SECTION --}}

    {{-- PROJECT EXPERIENCE SECTION --}}
    <div class="container-fluid bg-black-secondary py-5" id="project-section">
        <h4 class="subTitle">PROJECT EXPERIENCE</h4>
        <hr class="garisTitle mx-auto">
        <hr class="garisTitleMiddle mx-auto">
        <div class="container">
            <div class="row justify-content-center gy-5">
                <div class="col-lg-4">
                    <div class="card mx-auto" style="width: 18rem;">
                        <img src="{{ asset('assets/project-photo.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="btn bg-yellow-special text-white w-100">See Project</a>
                        </div>
                      </div>
                </div>
                <div class="col-lg-4">
                    <div class="card mx-auto" style="width: 18rem;">
                        <img src="{{ asset('assets/project-photo.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="btn bg-yellow-special text-white w-100">See Project</a>
                        </div>
                      </div>
                </div>
                <div class="col-lg-4">
                    <div class="card mx-auto" style="width: 18rem;">
                        <img src="{{ asset('assets/project-photo.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="btn bg-yellow-special text-white w-100">See Project</a>
                        </div>
                      </div>
                </div>
                <div class="col-lg-4">
                    <div class="card mx-auto" style="width: 18rem;">
                        <img src="{{ asset('assets/project-photo.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="btn bg-yellow-special text-white w-100">See Project</a>
                        </div>
                      </div>
                </div>
                <div class="col-lg-4">
                    <div class="card mx-auto" style="width: 18rem;">
                        <img src="{{ asset('assets/project-photo.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="btn bg-yellow-special text-white w-100">See Project</a>
                        </div>
                      </div>
                </div>
                <div class="col-lg-4">
                    <div class="card mx-auto" style="width: 18rem;">
                        <img src="{{ asset('assets/project-photo.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="btn bg-yellow-special text-white w-100">See Project</a>
                        </div>
                      </div>
                </div>
            </div>
            <div class="text-center mt-4">
                <button type="button" class="btn bg-yellow-special text-white shadow">See More</button>
            </div>
        </div>
    </div>
    {{-- END OF PROJECT EXPERIENCE SECTION --}}


    @include('components.footer')
@endsection