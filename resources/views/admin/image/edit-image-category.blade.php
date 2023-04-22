@extends('layouts.admin')
@section('title')
Edit Image Category | TMP Manufacturing Ltd
@endsection
@section('contents')


<!-- Page Heading -->
<div class="text-center">
    <h1 class="h3 mb-0 text-gray-800 text-center" >Image Category</h1>
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
                <h6 class="m-0 font-weight-bold text-primary">Edit Image Category Item</h6>
            </div>
            <div class="card-body">
                <form action="{{url('update-image-category/'.$category->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="serial"> <b>Serial <span class="text-danger">*</span></b> </label>
                        <input type="number" name="serial" class="form-control" value="{{$category->serial}}" required>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="name"> <b>Name <span class="text-danger">*</span></b> </label>
                        <input type="text" name="name" class="form-control" value="{{$category->name}}" required>
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
