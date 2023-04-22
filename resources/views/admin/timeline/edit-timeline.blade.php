@extends('layouts.admin')
@section('title')
Edit Timeline | TMP Manufacturing Ltd
@endsection
@section('contents')


<!-- Page Heading -->
<div class="text-center">
    <h1 class="h3 mb-0 text-gray-800 text-center" >Timeline</h1>
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
                <h6 class="m-0 font-weight-bold text-primary">Edit Timeline Item</h6>
            </div>
            <div class="card-body">
                <form action="{{url('update-timeline/'.$timeline->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="serial"> <b>Serial</b> </label>
                        <input type="number" name="serial" class="form-control @error('serial') is-invalid @enderror" value="{{$timeline->serial}}" required>
                        <span class="text-danger">
                            @error('serial')
                                <p class="text-danger">{{$message}}</p> 
                            @enderror
                        </span>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="title"> <b>Title</b> </label>
                        <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{$timeline->title}}" required>
                        <span class="text-danger">
                            @error('title')
                                <p class="text-danger">{{$message}}</p> 
                            @enderror
                        </span>
                    </div>
                    <br>
                    
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="description" class="form-label"><b>Description One<span class="text-danger">*</span></b></label>
                            <textarea name="description" class="form-control description @error('description') is-invalid @enderror" id="description_one" cols="30" rows="5" required>
                                {{$timeline->description}}
                            </textarea>
                            <span class="text-danger">
                                @error('description')
                                    <p class="text-danger">{{$message}}</p> 
                                @enderror
                            </span>   
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
