@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-md-12 grid-margin">
        <div class="card">
            <div class="card-header">
                <h3>Edit Slider
                    <a href="{{ url('admin/sliders/')}}" class="btn btn-danger btn-sm text-white float-end">
                        Back
                    </a>
                </h3>
            </div>
            <div class="card-body">

                <form action="{{url('admin/sliders/'.$slider->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="">Title</label>
                        <input type="text" value="{{$slider->title}}" name="title" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="">Description</label>
                        <textarea name="description" class="form-control" rows="3">{{$slider->description}}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="">Image</label>
                        <input type="file" name="image" id="" class="form-control"> 
                        <img src="{{ asset($slider->image) }}" style="width:50px;height:50px">
                    </div>            
                    <div class="mb-3">
                        <label for="">Status</label>
                        <input type="checkbox" name="status" style="width:30px; height:30px;" {{$slider->status == '1' ? 'checked':''}}>Checked=Hidden,Unchecked=Visible
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
    </div>
</div>    


@endsection