@extends('layouts.admin')
@section('title')
Solutions | TMP Manufacturing Ltd
@endsection
@section('contents')


<!-- Start -->

<div class="container-fluid pt-4 px-4">
    <div class="row vh-20 bg-light rounded align-items-center justify-content-center mx-0">
        <div class="d-flex align-items-center justify-content-between my-4">
            <h3 class="mb-0">Solutions </h6>
            <a href="" class="btn btn-primary" data-bs-toggle="modal"
            data-bs-target="#solutionModal">Add New</a>
        </div>
    </div>
</div>
<!-- End -->

<div class="container-fluid pt-4 px-4">
    <div class="bg-light text-center rounded p-4">
        <div class="table-responsive">
            @if(session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
            @elseif(session('warning'))
            <div class="alert alert-danger" role="alert">
                {{ session('warning') }}
            </div>
            @endif
            <div class="table-responsive">
                <table class="table text-start align-middle table-bordered table-hover mb-0">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Image</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($solutions as $solution)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$solution->title}}</td>
                            <td><img class="card-img-top" src="{{asset('upload/solution/'.$solution->image)}}"
                                alt="{{$solution->title}}" style="width: 150px"></td>
                            <td>
                                @if ($solution->status == 0)
                                <b class="text-danger">Inactive</b>
                                <a href="{{url('make-solution-active/'.$solution->id)}}" class="btn btn-success btn-sm"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Mark Active">
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                </a>
                                @else
                                <b class="text-success">Active</b>
                                <a href="{{url('make-solution-deactive/'.$solution->id)}}" class="btn btn-warning btn-sm"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Mark Inactive">
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                </a>
                                @endif
                            </td>    
                            <td>
                                <div class="btn-group">
                                    <a href="{{ url('/edit-solution/'.$solution->id) }}" class="btn btn-warning"><i
                                            class="fa fa-pen"></i> </a></a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<!-- Add Eco System Modal -->

<div class="modal fade" id="solutionModal" tabindex="-1" aria-labelledby="solutionModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content bg-light">
            <div class="modal-header">
                <h5 class="modal-title" id="solutionModalLabel">Add Item</h5>
                <button type="button" class="btn-close btn-light" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{url('add-solution')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="title"> <b>Title <span class="text-danger">*</span></b> </label>
                        <input type="text" name="title" class="form-control" placeholder="Enter a title" required>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="image"> <b>Image <span class="text-danger">*</span></b> <sup>[Size: To maintain the design, please use image of same
                                size
                                ]</sup></label>
                        <input type="file" name="image" class="form-control @error('image') is-invalid @enderror"  accept="image/*" required>
                        <span class="text-danger">
                            @error('image')
                                <p class="text-danger">{{$message}}</p> 
                            @enderror
                        </span>
                    </div>
                    <br>
                    <div class="col-lg-12">
                        <div class="mb-3">
                            <label for="status" class="form-label"><b>Status</b></label>
                            <input type="checkbox" name="status" class="">
                        </div>
                    </div>
                    <br>
                    <div class="form-group text-right">
                        <input type="submit" value="Save" class="btn btn-success">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection