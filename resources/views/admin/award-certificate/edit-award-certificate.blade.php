@extends('layouts.admin')
@section('title')
Edit Award / Certificate | TMP Manufacturing Ltd
@endsection
@section('contents')


<!-- Page Heading -->
<div class="text-center">
    <h1 class="h3 mb-0 text-gray-800 text-center" >Award / Certificate</h1>
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
                <h6 class="m-0 font-weight-bold text-primary">Edit Award / Certificate Item</h6>
            </div>
            <div class="card-body">
                <form action="{{url('update-award-certificate/'.$award_certificate->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="type_id"> <b>Item Type <span class="text-danger">*</span></b> </label>
                        <select name="type_id" class="form-control @error('type_id') is-invalid @enderror" id="type_id" required>
                            <option value="{{$award_certificate->type_id}}">
                                @if($award_certificate->type_id == '1')
                                Certificate
                                @elseif($award_certificate->type_id == '2')
                                Award
                                @endif
                            </option>
                            <option value="">=============</option>
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
                        <input type="text" name="title" class="form-control" value="{{$award_certificate->title}}" required>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="description" class="form-label"><b>Description<span class="text-danger">*</span></b></label>
                        <textarea name="description" class="form-control description" id="description" cols="30" rows="5">{{$award_certificate->description}}</textarea>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="image"> <b>Image</b> <sup>[Size: To maintain the design, please use image of same
                                size
                                ]</sup></label>
                        <input type="file" name="image" class="form-control" accept="image/*">
                        <br>
                        <img src="{{asset('upload/award_certificate/'.$award_certificate->image)}}" alt="" height="150px" width="220px">
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
