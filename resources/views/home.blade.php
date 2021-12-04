@extends('layouts.base')


@section('content')
    @include('components.header')
    
    {{-- HEADLINE SECTION --}}
    <div class="container mt-5 pt-4" id="headline-section">
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
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row justify-content-center gy-5">
                            <div class="col-lg-4">
                                <div class="card mx-auto" style="width: 18rem;">
                                    <img src="{{ asset('assets/surveiasia-port.jpg') }}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                    <h5 class="card-title">Surveyasia.com</h5>
                                    <p class="card-text">Bekerja sebagai frontend engineer pada development website surveyasia yakni situs untuk memudahkan dalam melakukan survey.</p>
                                    <a href="http://demo.surveyasia.id/" target="_blank" class="btn bg-yellow-special text-white w-100">See Project</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card mx-auto" style="width: 18rem;">
                                    <img src="{{ asset('assets/blanjaloka-port.jpg') }}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                    <h5 class="card-title">Blanjaloka.id</h5>
                                    <p class="card-text">Bekerja sebagai frontend engineer pada development website blanjaloka yakni situs e-commerce yang dapat memudahkan belanja pada pasar tradisional.</p>
                                    <a href="https://blanjaloka.id/" target="_blank" class="btn bg-yellow-special text-white w-100">See Project</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card mx-auto" style="width: 18rem;">
                                    <img src="{{ asset('assets/rh-decoration-port.jpg') }}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                    <h5 class="card-title">RH Decoration Website</h5>
                                    <p class="card-text">Bekerja sebagai fullstack developer pada  website RH Decoration.</p>
                                    <a href="#" class="btn bg-yellow-special text-white w-100">See Project</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row justify-content-center gy-5">
                            <div class="col-lg-4">
                                <div class="card mx-auto" style="width: 18rem;">
                                    <img src="{{ asset('assets/sistem-pembelajaran-port.jpg') }}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                    <h5 class="card-title">Sistem Pembelajaran</h5>
                                    <p class="card-text">Bekerja sebagai fullstack developer pada development website yang memudahkan dalam pembelajaran.</p>
                                    <a href="https://github.com/ifan4/sistemAkademik" target="_blank" class="btn bg-yellow-special text-white w-100">See Project</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card mx-auto" style="width: 18rem;">
                                    <img src="{{ asset('assets/netNote-port.jpg') }}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                    <h5 class="card-title">netNote</h5>
                                    <p class="card-text">Aplikasi Mobile Menyimpan notes dan juga to-do-list untuk memudahkan dalam dokumentasi tulisan.</p>
                                    <a href="https://gitlab.com/Ifant/notesapp" target="_blank" class="btn bg-yellow-special text-white w-100">See Project</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card mx-auto" style="width: 18rem;">
                                    <img src="{{ asset('assets/sistem-absensi-port.jpg') }}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                    <h5 class="card-title">Sistem Absensi</h5>
                                    <p class="card-text">Bekerja sebagai fullstack developer pada website yang memudahkan dalam melakukan absensi.</p>
                                    <a href="https://github.com/ifan4/web-absensiMhs" target="_blank" class="btn bg-yellow-special text-white w-100">See Project</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="bungkusPrev" aria-hidden="true">
                        <i class="carousel-control-prev-icon"></i>
                    </span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="bungkusNext" aria-hidden="true">
                        <i class="carousel-control-next-icon"></i>
                    </span>
                    <span class="visually-hidden">Next</span>
                </button>
                </div>
                <div class="text-center mt-5">
                    <button type="button" class="btn bg-yellow-special text-white px-4">See More</button>
                </div>

        </div>

    </div>
    {{-- END OF PROJECT EXPERIENCE SECTION --}}

    {{-- SKILL DATA  --}}
        <?php
        $skills = [
        [
            "C/C++" => 89,
            "Python" => 75,
            "Java" => 87,
            "Javascript" => 89,
            "PHP" => 84],
        [
            "ReactNtv" => 87,
            "ReactJS" => 80,
            "Bootstrap" => 85,
            "Codeigniter" => 78,
            "Laravel" => 75],
        [
            "Git" => 80,
            "Gitlab" => 83,
            "VSCode" => 85,
            "Figma" => 85,
            "Firebase" => 80,
            "Photoshop" => 89,
            "Premiere" => 86,
            "AE" => 81,
            "Indesign" => 77,
            "Fl Std" => 80
        ]
        ];
        ?>
    {{-- END OF SKILL DATA  --}}

    {{-- SKILLS SECTION --}}
    <div class="container py-5" id="skills-section">

        <h4 class="subTitle">SKILLS</h4>
        <hr class="garisTitle mx-auto">
        <hr class="garisTitleMiddle mx-auto">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <h6 class="mt-3 fs-5 text-white">Programming Language</h6>
    
                @foreach ($skills[0] as $namaSkill => $value)
                <div class="backgroundSkill row mb-3 mx-auto">
                    <div class="namaSkill col-4 col-md-3 fw-bold">{{ $namaSkill }}</div>
                    <div class="col-8 col-md-9 nopadding">
                        <div class="persentaseCol d-flex align-items-center justify-content-center" style="width: {{ $value }}%;">
                        <p class="nopadding" style="color:rgba(255, 255, 255, 0.70); font-size: 13px;"> <span class="pt-5"> {{ $value }}% </span> </p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
    
            <div class="col-lg-6">
                <h6 class="mt-3 fs-5 text-white">Framework/Library</h6>
                @foreach ($skills[1] as $namaSkill => $value)
                <div class="backgroundSkill row mb-3 mx-auto">
                    <div class="namaSkill col-4 col-md-3 fw-bold">{{ $namaSkill }}</div>
                    <div class="col-8 col-md-9 nopadding">
                        <div class="persentaseCol d-flex align-items-center justify-content-center" style="width: {{ $value }}%;">
                        <p class="nopadding" style="color:rgba(255, 255, 255, 0.70); font-size: 13px;"> <span class="pt-5"> {{ $value }}% </span> </p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
    
            <div class="col-lg-6">
                <h6 class="mt-3 fs-5 text-white">Tools</h6>
                @foreach ($skills[2] as $namaSkill => $value)
                <div class="backgroundSkill row mb-3 mx-auto">
                    <div class="namaSkill col-4 col-md-3 fw-bold">{{ $namaSkill }}</div>
                    <div class="col-8 col-md-9 nopadding">
                        <div class="persentaseCol d-flex align-items-center justify-content-center" style="width: {{ $value }}%;">
                        <p class="nopadding" style="color:rgba(255, 255, 255, 0.70); font-size: 13px;"> <span class="pt-5"> {{ $value }}% </span> </p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>




    </div>
    {{-- END OF SKILLS SECTION --}}

    {{-- PARTNERTS SECTION --}}
    <div class="container-fluid bg-black-secondary py-5" id="partners-section">
        <div class="container">
            <h4 class="subTitle">Partners</h4>
            <hr class="garisTitle mx-auto">
            <hr class="garisTitleMiddle mx-auto">

            <div class="row justify-content-evenly gy-3 justify-content-center mt-4">
                <div class="col-6 col-lg-3">
                    <div class="bg-partner">
                        <div>
                            <img src="{{ asset('assets/hdr-logo.png') }}" alt="" class="img-partner">
                            <span class="d-block lh-1">HDR Production</span>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="bg-partner">
                        <div>
                            <img src="{{ asset('assets/ifn-informatika-logo.png') }}" alt="" class="img-partner rounded">
                            <span class="d-block lh-1">Ifan Cipta Informatika</span>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="bg-partner">
                        <div>
                            <img src="{{ asset('assets/rh-logo.png') }}" alt="" class="img-partner">
                            <span class="d-block lh-1">RH Decoration</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- END OF PARTNERTS SECTION --}}

    {{-- EXP & EDU DATA --}}
        <?php
            $expData = [
            [
                "jobTitle" => "Frontend Programmer",
                "companyName" => "PT. Citi Asia International",
                "time" => "Agu 2021 - present",
                "img" => "citiasia-logo.png",
                "desc" => ""
            ],
            [
                "jobTitle" => "Software Developer",
                "companyName" => "Freelance",
                "time" => "Agu 2019 - present",
                "img" => "ifn-logo.png",
                "desc" => ""
            ],
            [
                "jobTitle" => "Teaching Asistant",
                "companyName" => "SMAN 2 KOTA SERANG",
                "time" => "Mei 2021 - present",
                "img" => "smanda-logo.png",
                "desc" => ""
            ],
            [
                "jobTitle" => "Content Designer",
                "companyName" => "Freelancee",
                "time" => "Nov 2019 - present",
                "img" => "ifn-logo.png",
                "desc" => ""
            ]
            ];

            $eduData = [
            [
                "name" => "Universitas Pendidikan Indonesia",
                "programStudy" => "Bachelor's degree,  Computer Science Education",
                "time" => "2019 - present",
                "img" => "upi-logo.png",
                "desc" => ["Anggota unit kegiatan mahasiswa KALAM (kajian islam mahasiswa),  2019 - 2020.", "Anggota organisasi eksternal Himpunan Mahasiswa Islam (HMI),  2019 - sekarang.", "Anggota competitive programming community,  2020 - sekarang."]
            ],
            [
                "name" => "SMAN 2 KOTA SERANG",
                "programStudy" => "Science",
                "time" => "2016 - 2019",
                "img" => "smanda-logo.png",
                "desc" => ["Wakil ketua ekstrakulikuler radio.", "koordinator keyboard pada ekstrakulikuler musik.", "Tim olimpiade informatika SMANDA."]
            ]
            ];

        ?>
    {{-- END OF EXP & EDU DATA --}}


    {{-- ABOUT ME SECTION --}}
    <div class="container py-5" id="about-section">
        <h4 class="subTitle">About Me</h4>
        <hr class="garisTitle mx-auto">
        <hr class="garisTitleMiddle mx-auto">
        
        <div class="row gy-3">
            <div class="col-lg-12">
                <div class="bg-black-secondary p-4 border-r-sip">
                    <p class="text-white" style="text-align: justify">Dilahirkan dengan nama Ifana Andriansyah tetapi memiliki panggilan yang cukup banyak, antara lain ifan, epen, pandul, dan masih banyak lagi yang tidak mungkin disebutkan satu persatu disini. Merupakan anak bontot dari dua bersaudara. Dilahirkan pada 25 Mei tahun 2000 membuat saya dapat dijuluki manusia millenial, meskipun ga millenial-millenial banget si hehe. Saya Memiliki passion dalam bidang mobile app dan website development khususnya di bagian front end dengan pengalaman kurang lebih dua tahun. Serta memiliki keahlian juga dalam melakukan design graphic dan animation. Selain itu saya memiliki sidejob sebagai musisi abal-abal yang terkadang mengharuskan nge-gigs di cafe maupun wedding party. Tetapi tetap software engineer adalah darah daging yang telah menempel di tubuh saya semenjak saya masih dibuaian ibu (lebay.com). Selanjutnya saya adalah seorang freelance software developer dan graphic designer. And I'm availabe to work as a software engineer!
                    </p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="bg-black-secondary p-4 border-r-sip text-white position-relative">
                    <h6 class="fs-5">Experience</h6>
                    @foreach ($expData as $data)
                    <div class="d-flex py-2">
                        <div class="bungkus-img-exp">
                            <img src="assets/{{ $data['img'] }}" alt="" class="img-fluid">
                        </div>
                        <div class="contents lh-3">
                            <span class="d-block fw-bold">{{ $data['jobTitle'] }} </span>
                            <span class="d-block fw-light">{{ $data['companyName'] }}</span>
                            <span class="d-block fw-lighter">{{ $data['time'] }}</span>
                        </div>
                    </div>
                    <hr class="line-exp">
                    @endforeach

                </div>
            </div>

            <div class="col-lg-6">
                <div class="bg-black-secondary p-4 border-r-sip text-white position-relative">
                
                    <h6 class="fs-5">Education</h6>
                    @foreach ($eduData as $data)
                    <div class="d-flex py-2">
                        <div class="bungkus-img-exp">
                            <img src="assets/{{ $data['img'] }}" alt="" class="img-fluid">
                        </div>
                        <div class="contents lh-3">
                            <span class="d-block fw-bold">{{ $data['name'] }} </span>
                            <span class="d-block fw-light">{{ $data['programStudy'] }}</span>
                            <span class="d-block fw-lighter">{{ $data['time'] }}</span>
                            <ul>
                                @foreach ($data["desc"] as $item)
                                    <li class="fw-light">{{ $item }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <hr class="line-exp">
                    @endforeach
                </div>
            </div>
        </div>

    </div>
    
    {{-- END OF ABOUT ME SECTION --}}

    @include('components.footer')
@endsection