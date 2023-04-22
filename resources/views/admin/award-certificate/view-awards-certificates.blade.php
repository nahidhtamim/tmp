@extends('layouts.admin')
@section('title')
Awards Certificates | TMP Manufacturing Ltd
@endsection
@section('contents')


<!-- Start -->

<div class="container-fluid pt-4 px-4">
    <div class="row vh-20 bg-light rounded align-items-center justify-content-center mx-0">
        <div class="d-flex align-items-center justify-content-between my-4">
            <h3 class="mb-0">Awards Certificates </h6>
            <a href="" class="btn btn-primary" data-bs-toggle="modal"
            data-bs-target="#equipmentModal">Add New</a>
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
                            <th scope="col">Type</th>
                            <th scope="col">Title</th>
                            <th scope="col">Image</th>
                            <th scope="col">Description</th>
                            <th scope="col">Featured <br> <small class="text-danger">[Mark Featured To Show in Footer]</small> </th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($awards_certificates as $item)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>
                                @if($item->type_id == '1')
                                Certificate
                                @elseif($item->type_id == '2')
                                Award
                                @endif
                            </td>
                            <td>{{$item->title}}</td>
                            <td><img class="card-img-top" src="{{asset('upload/award_certificate/'.$item->image)}}"
                                alt="{{$item->title}}" style="width: 150px"></td>
                            <td>{!! substr($item->description, 0, 80)."......" !!}</td>
                            <td>
                                @if ($item->featured == 0)
                                <b class="text-danger">Not Featured</b>
                                <a href="{{url('make-award-certificate-featured/'.$item->id)}}" class="btn btn-success btn-sm"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Mark Featured">
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                </a>
                                @else
                                <b class="text-success">Featured</b>
                                <a href="{{url('make-award-certificate-not-featured/'.$item->id)}}" class="btn btn-warning btn-sm"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Mark Not Featured">
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                </a>
                                @endif
                            </td>
                            <td>
                                @if ($item->status == 0)
                                <b class="text-danger">Inactive</b>
                                <a href="{{url('make-award-certificate-active/'.$item->id)}}" class="btn btn-success btn-sm"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Mark Active">
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                </a>
                                @else
                                <b class="text-success">Active</b>
                                <a href="{{url('make-award-certificate-deactive/'.$item->id)}}" class="btn btn-warning btn-sm"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Mark Inactive">
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                </a>
                                @endif
                            </td>
                            <td>
                                <div class="btn-group">
                                    <a href="{{ url('/edit-award-certificate/'.$item->id) }}" class="btn btn-warning"><i
                                            class="fa fa-pen"></i> </a></a>
                                    <a href="{{ url('/delete-award-certificate/'.$item->id) }}" class="btn btn-danger"
                                        onclick="return confirm('Are you sure to delete?')"><i
                                            class="fa fa-trash"></i></a>
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

<div class="modal fade" id="equipmentModal" tabindex="-1" aria-labelledby="equipmentModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content bg-light">
            <div class="modal-header">
                <h5 class="modal-title" id="equipmentModalLabel">Add Item</h5>
                <button type="button" class="btn-close btn-light" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{url('add-award-certificate')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="type_id"> <b>Item Type <span class="text-danger">*</span></b> </label>
                        <select name="type_id" class="form-control @error('type_id') is-invalid @enderror" id="type_id" required>
                            <option value="1">Certificate</option>
                            <option value="2">Award</option>
                        </select>
                        <span class="text-danger">
                            @error('type_id')
                                <p class="text-danger">{{$message}}</p> 
                            @enderror
                        </span>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="title"> <b>Title <span class="text-danger">*</span></b> </label>
                        <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" placeholder="Enter a title" required>
                        <span class="text-danger">
                            @error('title')
                                <p class="text-danger">{{$message}}</p> 
                            @enderror
                        </span>
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
                    <div class="form-group">
                        <label for="description" class="form-label"><b>Description</b></label>
                        <textarea name="description" class="form-control description" id="description" cols="30" rows="5" placeholder="Write a description" required></textarea>
                    </div>
                    <br>
                    <div class="col-lg-12">
                        <div class="mb-3">
                            <label for="featured" class="form-label"><b>Feature</b></label>
                            <input type="checkbox" name="featured" class="">
                        </div>
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