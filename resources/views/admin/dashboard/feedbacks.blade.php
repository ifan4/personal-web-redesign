@extends('admin.layouts.base')

@section('css')
    <link rel="stylesheet" href="/css/admin/feedbacks.css">
@endsection

@section('content')
    <div class="container mb-3" id="feedbacks">
        <h1>Feedbacks</h1>
        <div class="row gy-3">
            @foreach ($feedbacks as $feedback)
                <div class="col-lg-6">
                    <div class="card">
                        <h5 class="card-header">{{ $feedback->name }}</h5>
                        <div class="card-body">
                        <h6 class="card-title">Email: <cite title="{{ $feedback->email }}">{{ $feedback->email }}</cite></h6>
                        <p class="card-text">{{ $feedback->feedback }}</p>
                        <button class="btn btn-dark position-absolute bottom-0 mb-3" data-bs-toggle="modal" data-bs-target="#detailFeedback" data="{{ $feedback }}" onclick="bringData({{ $feedback }})">See Details</button>
                        </div>
                    </div>
                </div>
            @endforeach
            {{ $feedbacks->links() }}
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="detailFeedback" tabindex="-1" aria-labelledby="detailFeedbackSample" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Feedback</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <h5 class="card-header">{{ $feedback->name }}</h5>
                    <div class="card-body">
                    <h6 class="card-title">Email: <cite title="{{ $feedback->email }}">{{ $feedback->email }}</cite></h6>
                    <p class="card-text">{{ $feedback->feedback }}</p>
                </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
        </div>
    </div>
    

    <script>
        function bringData(params) {
            console.log("Data:" + params);
        }
    </script>


@endsection