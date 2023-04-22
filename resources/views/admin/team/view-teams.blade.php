@extends('layouts.admin')
@section('title')
Team | TMP Manufacturing Ltd
@endsection
@section('contents')

<!-- Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row vh-20 bg-light rounded align-items-center justify-content-center mx-0">
        <div class="d-flex align-items-center justify-content-between my-4">
            <h3 class="mb-0">Team</h6>
            <a href="" class="" data-bs-toggle="modal"
            data-bs-target="#teamModal">Add New</a>
        </div>
    </div>
</div>
<!-- End -->

<div class="container-fluid pt-4 px-4">
    <div class="row bg-light rounded mx-0">
        @if(session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
        @elseif(session('warning'))
        <div class="alert alert-danger" role="alert">
            {{ session('warning') }}
        </div>
        @endif
        @foreach ($teams as $team)
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card bg-dark text-center m-1">
                    <h5 class="card-title text-light pt-3"> <b>{{$team->name}}</b> </h5>
                    <img class="card-img-top" src="{{asset('upload/teams/'.$team->image)}}"
                        alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text text-light">Designation: {{$team->designation}}</p>
                        <p class="card-text text-light">Email: {{$team->email}}</p>
                        <p class="card-text text-light">Linkedin: {{$team->linkedin}}</p>
                        <p class="card-text text-light">Twitter: {{$team->twitter}}</p>
                        <p class="card-text text-light">Facebook: {{$team->facebook}}</p>
                        <p class="card-text text-light">Instagram: {{$team->instagram}}</p>
                        @if ($team->status == 0)
                        <p class="card-text text-danger">Inactive</p>
                        @else
                        <p class="card-text text-success">Active</p>
                        @endif

                        <div class="btn-group" role="group" aria-label="Basic example">
                            @if ($team->status == 0)
                            <button type="button" class="btn btn-success">
                                <a href="{{url('make-team-active/'.$team->id)}}" class="text-white"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Mark Popular">
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                </a>
                            </button>
                            @else
                            <button type="button" class="btn btn-warning">
                                <a href="{{url('make-team-deactive/'.$team->id)}}" class="text-dark"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Mark Inactive">
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                </a>
                            </button>
                            @endif
                            <button type="button" class="btn btn-info"> <a class="text-dark"
                                    href="{{ url('/edit-team/'.$team->id) }}">
                                    <i class="fa fa-pen"></i> </a></button>
                            <button type="button" class="btn btn-danger"> <a class="text-white"
                                    href="{{ url('/delete-team/'.$team->id) }}"
                                    onclick="return confirm('Are you sure to delete?')"> <i class="fa fa-trash"></i>
                                </a> </button>
                        </div>
                    </div>
                </div>
            </div>

            @endforeach
    </div>
</div>


<!-- Add Eco System Modal -->
<div class="modal fade" id="teamModal" tabindex="-1" aria-labelledby="teamModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content bg-light">
        <div class="modal-header">
        <h5 class="modal-title" id="teamModalLabel">Add Team Item</h5>
        <button type="button" class="btn-close btn-light" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{url('add-team')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label"><b>Name <span class="text-danger">*</span></b></label>
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Enter a title" required>
                    <span class="text-danger">
                        @error('name')
                            <p class="text-danger">{{$message}}</p> 
                        @enderror
                    </span>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label"><b>Email <span class="text-danger">*</span></b></label>
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Enter a Email" required>
                    <span class="text-danger">
                        @error('email')
                            <p class="text-danger">{{$message}}</p> 
                        @enderror
                    </span>
                </div>
                <div class="mb-3">
                    <label for="linkedin" class="form-label"><b>Linkedin</b></label>
                    <input type="text" name="linkedin" class="form-control" placeholder="Enter a linkedin">
                </div>
                <div class="mb-3">
                    <label for="twitter" class="form-label"><b>Twitter</b></label>
                    <input type="text" name="twitter" class="form-control" placeholder="Enter a twitter">
                </div>
                <div class="mb-3">
                    <label for="facebook" class="form-label"><b>Facebook</b></label>
                    <input type="text" name="facebook" class="form-control" placeholder="Enter a facebook">
                </div>
                <div class="mb-3">
                    <label for="instagram" class="form-label"><b>Instagram</b></label>
                    <input type="text" name="instagram" class="form-control" placeholder="Enter a instagram">
                </div>
                <div class="mb-3">
                    <label for="designation" class="form-label"><b>Designation <span class="text-danger">*</span></b></label>
                    <input type="text" name="designation" class="form-control @error('designation') is-invalid @enderror" placeholder="Enter designation" required>
                    <span class="text-danger">
                        @error('designation')
                            <p class="text-danger">{{$message}}</p> 
                        @enderror
                    </span>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label"><b>Image (Square) <span class="text-danger">*</span></b> <sup>[Size: To maintain the design, please use image of same size]</sup></label>
                    <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" required>
                    <span class="text-danger">
                        @error('image')
                            <p class="text-danger">{{$message}}</p> 
                        @enderror
                    </span>
                </div>
                <div class="mb-3">
                    <label for="status" class="form-label"><b>Status</b></label>
                    <input type="checkbox" name="status" class="">
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
    </div>
</div>    


@endsection