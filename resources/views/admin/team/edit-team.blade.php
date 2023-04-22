@extends('layouts.admin')
@section('title')
Edit Team | TMP Manufacturing Ltd
@endsection
@section('contents')

@if (session('status'))
<div class="alert alert-success">{{session('status')}}</div>
@endif

<div class="container-fluid pt-4 px-4">
    <h1>Edit Team</h1>
    <div class="row vh-60 bg-light rounded align-items-center justify-content-center mx-0">
        <div class="col-md-6 text-center p-4">
            <form action="{{url('update-team/'.$team->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label"><b>Name <span class="text-danger">*</span></b></label>
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{$team->name}}" required>
                    <span class="text-danger">
                        @error('name')
                            <p class="text-danger">{{$message}}</p> 
                        @enderror
                    </span>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label"><b>Email <span class="text-danger">*</span></b></label>
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"  value="{{$team->email}}" required>
                    <span class="text-danger">
                        @error('email')
                            <p class="text-danger">{{$message}}</p> 
                        @enderror
                    </span>
                </div>
                <div class="mb-3">
                    <label for="linkedin" class="form-label"><b>Linkedin</b></label>
                    <input type="text" name="linkedin" class="form-control" value="{{$team->linkedin}}">
                </div>
                <div class="mb-3">
                    <label for="twitter" class="form-label"><b>Twitter</b></label>
                    <input type="text" name="twitter" class="form-control" value="{{$team->twitter}}">
                </div>
                <div class="mb-3">
                    <label for="facebook" class="form-label"><b>Facebook</b></label>
                    <input type="text" name="facebook" class="form-control" value="{{$team->facebook}}">
                </div>
                <div class="mb-3">
                    <label for="instagram" class="form-label"><b>Instagram</b></label>
                    <input type="text" name="instagram" class="form-control" value="{{$team->instagram}}">
                </div>
                <div class="mb-3">
                    <label for="designation" class="form-label"><b>Designation <span class="text-danger">*</span></b></label>
                    <input type="text" name="designation" class="form-control @error('designation') is-invalid @enderror" value="{{$team->designation}}" required>
                    <span class="text-danger">
                        @error('designation')
                            <p class="text-danger">{{$message}}</p> 
                        @enderror
                    </span>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label"><b>Image</b> <sup>[Size: To maintain the design, please use image of same size]</sup></label>
                    <input type="file" name="image" class="form-control">
                    <br>
                    <img src="{{asset('upload/teams/'.$team->image)}}" alt="" height="150px" width="220px">
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>
<!-- End -->


@endsection
