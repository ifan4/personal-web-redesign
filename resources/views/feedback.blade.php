@extends('layouts.base')

@section('content')
    @include('components.header')

    <div id="title-feedback" class="mt-5 pt-5">
        @if (session()->has('status'))
            <div class="container alert alert-success alert-dismissible fade show" role="alert">
                {{ session('status') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <h4 class="subTitle">Send Message or Feedback</h4>
        <hr class="garisTitle mx-auto">
        <hr class="garisTitleMiddle mx-auto">
    </div>

    <div class="container mt-lg-5 pt-lg-3" id="feedback-section">
        <div class="row align-items-center">
            <div class="col-lg-4">
                <h1 class="text-white">WE WANT YOUR <span id="highlight">FEEDBACK</span> </h1>
                <p class="text-white">Right now there is no us, I'm running the show alone. So every feedback you provide, any suggestions you have and any new idea you like to share - please don't hesitate, write to me immediately.</p>
                <p class="text-white">
                    I'm a social animal. Animal because I've some degree of randomness in my behaviour. Social because I love to hear and share with people.
                </p>
            </div>
            <div class="offset-lg-2 col-lg-6">
                <form action="feedback/store" method="post" class="my-auto">
                    <div class="row mb-2">
                        <div class="col">
                            @csrf
                            <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Name" aria-label="name" name="name" value="{{ old('name') }}">
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col">
                            <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" aria-label="Email" name="email" value="{{ old('email') }}">
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        </div>
                        <div class="row">
                            <div class="col-12 mb-2">
                                <textarea class="form-control @error('feedback') is-invalid @enderror" placeholder="send your feedback here" name="feedback" id="isi" cols="20" rows="5">{{ old('feedback') }}</textarea>
                                @error('feedback')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn bg-yellow-special text-white fw-bold w-100" role="button" id="submit-feedback">Send</button>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>

    @include('components.footer')
@endsection