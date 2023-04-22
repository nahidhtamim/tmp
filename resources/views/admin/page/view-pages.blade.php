@extends('layouts.admin')
@section('title')
Pages | TMP Manufacturing Ltd
@endsection
@section('contents')


<!-- Start -->

<div class="container-fluid pt-4 px-4">
    <div class="row vh-20 bg-light rounded align-items-center justify-content-center mx-0">
        <div class="d-flex align-items-center justify-content-between my-4">
            <h3 class="mb-0">Pages </h6>
            <a href="" class="btn btn-primary" data-bs-toggle="modal"
            data-bs-target="#pageModal">Add New</a>
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
                            <th scope="col">Serial</th>
                            <th scope="col">Name</th>
                            <th scope="col">Descriptions</th>
                            <th scope="col">Image</th>
                            <th scope="col">Gallery</th>
                            <th scope="col">Slug</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pages as $page)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$page->serial}}</td>
                            <td>{{$page->name}}</td>
                            <td>
                                Paragraph 1: {!! substr($page->description_one, 0, 80)."......" !!} <br>
                                Paragraph 2: {!! substr($page->description_two, 0, 80)."......" !!}
                            </td>
                            <td><img class="" src="{{asset('upload/page/'.$page->image)}}"
                                alt="" style="width: 150px"></td>
                            <td>
                                <a href="{{ url('view-page-gallery/'.$page->id) }}" class="btn btn-success"><i
                                    class="fa fa-eye"></i> </a>
                            </td>
                            <td>{{$page->slug}}</td>
                            <td>
                                @if ($page->status == 0)
                                <b class="text-danger">Inactive</b>
                                <a href="{{url('make-page-active/'.$page->id)}}" class="btn btn-success btn-sm"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Mark Active">
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                </a>
                                @else
                                <b class="text-success">Active</b>
                                <a href="{{url('make-page-deactive/'.$page->id)}}" class="btn btn-warning btn-sm"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Mark Inactive">
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                </a>
                                @endif
                            </td>
                            <td>
                                <div class="btn-group">
                                    <a href="{{ url('/edit-page/'.$page->id) }}" class="btn btn-warning"><i
                                            class="fa fa-pen"></i> </a></a>
                                    <a href="{{ url('/delete-page/'.$page->id) }}" class="btn btn-danger"
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

<div class="modal fade" id="pageModal" tabindex="-1" aria-labelledby="pageModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content bg-light">
            <div class="modal-header">
                <h5 class="modal-title" id="pageModalLabel">Add Item</h5>
                <button type="button" class="btn-close btn-light" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{url('add-page')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="serial"> <b>Serial <span class="text-danger">*</span></b> </label>
                                <input type="number" name="serial" class="form-control" placeholder="Enter a serial" required>
                            </div>
                            <br>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="name"> <b>Name<span class="text-danger">*</span></b> </label>
                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Enter Name" required>
                                <span class="text-danger">
                                    @error('name')
                                        <p class="text-danger">{{$message}}</p> 
                                    @enderror
                                </span>
                            </div>
                            <br>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="description_one" class="form-label"><b>Description One<span class="text-danger">*</span></b></label>
                                <textarea name="description_one" class="form-control description description_one @error('description_one') is-invalid @enderror" id="description_one" cols="30" rows="5" required>Write a description</textarea>
                                <span class="text-danger">
                                    @error('description_one')
                                        <p class="text-danger">{{$message}}</p> 
                                    @enderror
                                </span>   
                            </div>
                            <br>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="description_two" class="form-label"><b>Description Two</b></label>
                                <textarea name="description_two" class="form-control description description_two" id="description_two" cols="30" rows="5">Write a description</textarea>  
                            </div>
                            <br>
                        </div>
                        <div class="col-lg-12">
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
                        </div>
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label for="status" class="form-label"><b>Status</b></label>
                                <input type="checkbox" name="status" class="">
                            </div>
                        </div>
                    </div>
                    <div class="form-group text-right">
                        <input type="submit" value="Save" class="btn btn-success">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection