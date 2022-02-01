@extends('admin.layouts.base')

@section('css')
    <link rel="stylesheet" href="/css/admin/home.css">
@endsection

@section('content')
<div class="container" id="admin-home">
        @if (session('messageLogin'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('messageLogin') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="row gy-3">
            <div class="col-lg-2 col-6">
                <a href="#" class="text-decoration-none link-dark">
                    <div class="card-var d-flex align-items-center p-3 h-100">
                        <i class="bi bi-pencil-square me-3"></i>
                        <div>
                            <h5 class="titleCard">Posts</h5>
                            <h6 class="fw-bold">155</h6>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-2 col-6">
                <a href="#" class="text-decoration-none link-dark">
                    <div class="card-var d-flex align-items-center p-3 h-100">
                        <i class="bi bi-chat-left-text me-3"></i>
                        <div>
                            <h5 class="titleCard">Feedback</h5>
                            <h6 class="fw-bold">{{ $totalFeedback }}</h6>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-2 col-6">
                <a href="#" class="text-decoration-none link-dark">
                    <div class="card-var d-flex align-items-center p-3 h-100">
                        <i class="bi bi-journal-code me-3"></i>
                        <div>
                            <h5 class="titleCard">Projects</h5>
                            <h6 class="fw-bold">155</h6>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-2 col-6">
                <a href="#" class="text-decoration-none link-dark">
                    <div class="card-var d-flex align-items-center p-3 h-100">
                        <i class="bi bi-wrench me-3"></i>
                        <div>
                            <h5 class="titleCard">Skills</h5>
                            <h6 class="fw-bold">155</h6>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-2 col-6">
                <a href="#" class="text-decoration-none link-dark">
                    <div class="card-var d-flex align-items-center p-3 h-100">
                        <i class="bi bi-diagram-2 me-3"></i>
                        <div>
                            <h5 class="titleCard">Partners</h5>
                            <h6 class="fw-bold">155</h6>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-2 col-6">
                <a href="#" class="text-decoration-none link-dark">
                    <div class="card-var d-flex align-items-center p-3 h-100">
                        <i class="bi bi-building me-3"></i>
                        <div>
                            <h5 class="titleCard">Works Experience</h5>
                            <h6 class="fw-bold">155</h6>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-2 col-6">
                <a href="#" class="text-decoration-none link-dark">
                    <div class="card-var d-flex align-items-center p-3 h-100">
                        <i class="bi bi-mortarboard me-3"></i>
                        <div>
                            <h5 class="titleCard">Education</h5>
                            <h6 class="fw-bold">155</h6>
                        </div>
                    </div>
                </a>
            </div>
            
        </div>
    </div>
@endsection