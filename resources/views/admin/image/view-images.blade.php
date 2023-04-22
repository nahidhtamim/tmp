@extends('layouts.admin')
@section('title')
Images | TMP Manufacturing Ltd
@endsection
@section('contents')

<style>
    .img-container {
        position: relative;
    }

    .image {
        opacity: 1;
        width: 100%;
        transition: .5s ease;
        backface-visibility: hidden;
        border-radius: 10px;
        padding: 10px;
    }

    .middle {
        transition: .5s ease;
        opacity: 0;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        text-align: center;
    }

    .img-container:hover .image {
        opacity: 0.3;
    }

    .img-container:hover .middle {
        opacity: 1;
    }

    .text {
        background-color: #04AA6D;
        color: white;
        font-size: 16px;
        padding: 16px 32px;
    }
</style>
<!-- Start -->

<div class="container-fluid pt-4 px-4">
    <div class="row vh-20 bg-light rounded align-items-center justify-content-center mx-0">
        <div class="d-flex align-items-center justify-content-between my-4">
            <h3 class="mb-0">Images </h6>
                <a href="" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#categoryModal">Add
                    Category</a>
                <a href="" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#imageModal">Add Image</a>
        </div>
    </div>
</div>
<!-- End -->

<div class="container-fluid pt-4 px-4" style="overflow: hidden !important;">
    <div class="bg-light text-center rounded p-4">
        @if(session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
        @elseif(session('warning'))
        <div class="alert alert-danger" role="alert">
            {{ session('warning') }}
        </div>
        @endif
        <div class="row">
            <div class="col-lg-4 col-md-12 mx-auto mb-3">
                <div class="table-responsive">
                    <h5 class="text-center">Image Category List</h5>
                    <table class="table text-start align-middle table-bordered table-hover mb-0">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Serial</th>
                                <th scope="col">Name</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($image_categories as $cat)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$cat->serial}}</td>
                                <td>{{$cat->name}}</td>
                                <td>
                                    @if ($cat->status == 0)
                                    <b class="text-danger">Inactive</b>
                                    <a href="{{url('make-image-category-active/'.$cat->id)}}"
                                        class="btn btn-success btn-sm" data-bs-toggle="tooltip" data-bs-placement="top"
                                        title="Mark Active">
                                        <i class="fa fa-check" aria-hidden="true"></i>
                                    </a>
                                    @else
                                    <b class="text-success">Active</b>
                                    <a href="{{url('make-image-category-deactive/'.$cat->id)}}"
                                        class="btn btn-warning btn-sm" data-bs-toggle="tooltip" data-bs-placement="top"
                                        title="Mark Inactive">
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                    </a>
                                    @endif
                                </td>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{ url('/edit-image-category/'.$cat->id) }}" class="btn btn-warning"><i
                                                class="fa fa-pen"></i> </a></a>
                                        {{-- <a href="{{ url('/delete-image-category/'.$cat->id) }}" class="btn btn-danger"
                                            onclick="return confirm('<div class='alert alert-danger'>Are you sure to delete?</div>')"><i
                                                class="fa fa-trash"></i></a> --}}
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="row">
                    <div class="col-12">
                        <select name="cat_id" class="form-select @error('cat_id') is-invalid @enderror" id="cat_id"
                            required>
                            <option value="">Select Category</option>
                            @foreach ($categories as $cat)
                            <option value="{{$cat->id}}">{{$cat->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="row images" id="image_database" style="100%">
                        @foreach ($images as $image)
                        <div class="col-lg-2 col-md-3 col-sm-6 m-auto img-container"
                            style="border-radius: 10% !important; overflow: hidden !important;">
                            <img class="card-img-top image" src="{{asset('upload/images/'.$image->image)}}" alt=""
                                width="100%" style="border-radius: 10% !important;">
                            <div class="middle">
                                {{-- @if ($image->status == 0)
                                <p class="alert alert-danger">Inactive</p>
                                @else
                                <p class="alert alert-success">Active</p>
                                @endif --}}
                                <div class="btn-group">
                                    {{-- @if ($image->status == 0)
                                    <a href="{{url('make-image-active/'.$image->id)}}" class="btn btn-success"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="Mark Active">
                                        <i class="fa fa-check" aria-hidden="true"></i>
                                    </a>
                                    @else
                                    <a href="{{url('make-image-deactive/'.$image->id)}}" class="btn btn-warning"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="Mark Inactive">
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                    </a>
                                    @endif --}}
                                    <a href="{{ url('/edit-image/'.$image->id) }}" class="btn btn-info"><i
                                            class="fa fa-pen"></i> </a></a>
                                    <a href="{{ url('/delete-image/'.$image->id) }}" class="btn btn-danger"
                                        onclick="return confirm('Are you sure to delete?')"><i
                                            class="fa fa-trash"></i></a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Add Category Modal -->

    <div class="modal fade" id="categoryModal" tabindex="-1" aria-labelledby="categoryModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content bg-light">
                <div class="modal-header">
                    <h5 class="modal-title" id="categoryModalLabel">Add Item</h5>
                    <button type="button" class="btn-close btn-light" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{url('add-image-category')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="serial"> <b>Serial <span class="text-danger">*</span></b> </label>
                            <input type="number" name="serial" class="form-control" placeholder="Enter a serial"
                                required>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="name"> <b>Name <span class="text-danger">*</span></b> </label>
                            <input type="text" name="name" class="form-control" placeholder="Enter a name" required>
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

    <!-- Add Image Modal -->

    <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content bg-light">
                <div class="modal-header">
                    <h5 class="modal-title" id="imageModalLabel">Add Item</h5>
                    <button type="button" class="btn-close btn-light" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{url('add-image')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body" id="images_card">
                            <div id="image_field0">
                                <div class="form-row row border border-1 py-2">
                                    <div class="form-group col-12 mb-3">
                                        <label for="cat_id"> <b>Image Category <span class="text-danger">*</span></b>
                                        </label>
                                        <select name="cat_id" class="form-select @error('cat_id') is-invalid @enderror"
                                            id="category_id" required>
                                            @foreach ($categories as $cat)
                                            <option value="{{$cat->id}}">{{$cat->name}}</option>
                                            @endforeach
                                        </select>
                                        <span class="text-danger">
                                            @error('cat_id')
                                            <p class="text-danger">{{$message}}</p>
                                            @enderror
                                        </span>
                                    </div>
                                    <div class="form-group col-12 mb-3">
                                        <label for="question">Images <span class="text-danger">*</span>
                                            <small>Multiple Images Can Be Uploaded</small>
                                        </label>
                                        <input type="file" name="images[]" id="inputImage" multiple
                                            class="form-control @error('images') is-invalid @enderror">
                                        <span class="text-danger">
                                            @error('images')
                                            <p class="text-danger">{{$message}}</p>
                                            @enderror
                                        </span>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" value="Save" class="btn btn-success w-100">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection