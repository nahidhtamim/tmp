@extends('layouts.admin')
@section('title')
Edit Video | TMP Manufacturing Ltd
@endsection
@section('contents')

@if (session('status'))
<div class="alert alert-success">{{session('status')}}</div>
@endif

<div class="container-fluid pt-4 px-4">
    <h1>Edit Video</h1>
    <div class="row vh-60 bg-light rounded align-items-center justify-content-center mx-0">
        <div class="col-md-6 text-center p-4">
            <form action="{{url('update-video/'.$video->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="video" class="form-label"><b>Video</b></label>
                    <input type="file" name="video" class="form-control">
                    <br>
                    <video autoplay muted loop playsinline="" id="bg-video" width="100%" style="border-radius: 10%; box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;">
                        <source src="{{ asset('upload/video/'.$video->video)}}" type="video/mp4">
                    </video>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>
<!-- End -->


@endsection
