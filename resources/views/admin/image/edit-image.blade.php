@extends('layouts.admin')
@section('title')
Edit Image | TMP Manufacturing Ltd
@endsection
@section('contents')


<!-- Page Heading -->
<div class="text-center">
    <h1 class="h3 mb-0 text-gray-800 text-center" >Image</h1>
</div>
<hr>
@if (session('status'))
<div class="alert alert-success">{{session('status')}}</div>
@endif
<!-- Content Row -->
<div class="row">
    <div class="col-md-8 m-auto">
        <!-- DataTales Example -->
        <div class="card bg-light shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Edit Image Item</h6>
            </div>
            <div class="card-body">
                <form action="{{url('update-image/'.$image->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group col-12 mb-3">
                        <label for="cat_id"> <b>Image Category <span class="text-danger">*</span></b>
                        </label>
                        <select name="cat_id" class="form-select @error('cat_id') is-invalid @enderror"
                            id="category_id" required>
                            <option value="{{$image->cat_id}}">{{$image->cat_info->name}}</option>
                            <option value="">=============================</option>
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
                    <div class="form-group">
                        <label for="image"> <b>Image</b> <sup>[Size: To maintain the design, please use image of same
                                size
                                ]</sup></label>
                        <input type="file" name="image" class="form-control" accept="image/*">
                        <br>
                        <img src="{{asset('upload/images/'.$image->image)}}" alt="" height="150px" width="220px">
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
