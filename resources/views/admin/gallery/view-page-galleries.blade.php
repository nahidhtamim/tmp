@extends('layouts.admin')
@section('title')
Gallery Images | TMP Manufacturing Ltd
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
            <h3 class="mb-0">Gallery Images - {{$page->name}}</h6>
            <a href="" class="btn btn-primary" data-bs-toggle="modal"
            data-bs-target="#imageModal">Add Item</a>
        </div>
    </div>
</div>
<!-- End -->

<div class="container-fluid pt-4 px-4"  style="overflow: hidden !important;">
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

            <div class="row" style="overflow: hidden !important;">
                @foreach ($gallery_images as $gallery)
                <div class="col-lg-2 col-md-3 col-sm-6 m-auto img-container" style="border-radius: 10% !important; overflow: hidden !important;">
                    <img class="card-img-top image" src="{{asset('upload/images/'.$gallery->image_info->image)}}"
                    alt="" width="100%" style="border-radius: 10% !important;">
                    <div class="middle">
                        @if ($gallery->status == 0)
                        <p class="alert alert-danger">Inactive</p>
                        @else
                        <p class="alert alert-success">Active</p>
                        @endif
                        <div class="btn-group">
                            @if ($gallery->status == 0)
                            <a href="{{url('make-gallery-image-active/'.$gallery->id)}}" class="btn btn-success"
                                data-bs-toggle="tooltip" data-bs-placement="top" title="Mark Active">
                                <i class="fa fa-check" aria-hidden="true"></i>
                            </a>
                             @else
                            <a href="{{url('make-gallery-image-deactive/'.$gallery->id)}}" class="btn btn-warning"
                                data-bs-toggle="tooltip" data-bs-placement="top" title="Mark Inactive">
                                <i class="fa fa-times" aria-hidden="true"></i>
                            </a>
                            @endif
                            <a href="{{ url('/delete-gallery-image/'.$gallery->id) }}" class="btn btn-danger"
                                onclick="return confirm('Are you sure to delete?')"><i
                                    class="fa fa-trash"></i></a>
                        </div>
                        {{-- <div class="text">John Doe</div> --}}
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>


<!-- Add Modal -->

<div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content bg-light">
            <div class="modal-header">
                <h5 class="modal-title" id="imageModalLabel">Add Item</h5>
                <button type="button" class="btn-close btn-light" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12">
                        <select name="page_gallery_image_cat_id" class="form-select @error('cat_id') is-invalid @enderror" id="page_gallery_image_cat_id"
                            required>
                            <option value="">Select Category</option>
                            @foreach ($categories as $cat)
                            <option value="{{$cat->id}}">{{$cat->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-12">
                        <form action="{{url('add-gallery')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <ul id="page_gallery_images">
                                @foreach($image_database as $item)
                                    <input type="hidden" name="page_id[]" value="{{$page->id}}">
                                    <input type="hidden" name="blog_id[]" value="0">
                                    <input type="hidden" name="service_id[]" value="0">
                                    <li>
                                        <input type="checkbox" name="image_id[]" value="{{$item->id}}" id="myCheckbox{{$item->id}}" />
                                        <label for="myCheckbox{{$item->id}}"><img src="{{asset('upload/images/'.$item->image)}}" /></label>
                                    </li>
                                @endforeach
                            </ul>
                            <br>
                            <div class="form-group">
                                <input type="submit" value="Save" class="btn btn-success w-100">
                            </div>
                        </form>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>


<style>
    #imageModal ul {
        list-style-type: none;
    }

    #imageModal li {
        display: inline-block;
    }

    #imageModal input[type="checkbox"][id^="myCheckbox"] {
        display: none;
    }

    #imageModal label {
        border: 1px solid #fff;
        padding: 10px;
        display: block;
        position: relative;
        margin: 10px;
        cursor: pointer;
    }

    #imageModal label:before {
        background-color: white;
        color: white;
        content: " ";
        display: block;
        border-radius: 50%;
        border: 1px solid grey;
        position: absolute;
        top: -5px;
        left: -5px;
        width: 25px;
        height: 25px;
        text-align: center;
        line-height: 28px;
        transition-duration: 0.4s;
        transform: scale(0);
    }

    #imageModal label img {
        height: 100px;
        width: 100px;
        transition-duration: 0.2s;
        transform-origin: 50% 50%;
    }

    #imageModal :checked + label {
        border-color: #ddd;
    }

    #imageModal :checked + label:before {
        content: "✓";
        background-color: grey;
        transform: scale(1);
    }

    #imageModal :checked + label img {
        transform: scale(0.9);
        /* box-shadow: 0 0 5px #333; */
        z-index: -1;
    }
</style>

@endsection
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#page_gallery_image_cat_id').on('change', function (e) {
            var id = e.target.value;
            $.get('{{ url('getCategoryImage')}}/' + id,
                function (data) {
                    console.log(id);
                    console.log(data);
                    $('#page_gallery_images').empty();
                    $.each(data, function (index, element) {
                        $('#page_gallery_images').append("<input type='hidden' name='page_id[]' value='{{$page->id}}'><input type='hidden' name='blog_id[]' value='0'><input type='hidden' name='service_id[]' value='0'> <li><input type='checkbox' name='image_id[]' value='"+element.id+"' id='myCheckbox"+element.id+"' /><label for='myCheckbox"+element.id+"'><img src='/upload/images/"+element.image+"' /></label></li>");
                    });
                });
        });
    });
</script>