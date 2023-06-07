@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-md-12 grid-margin">
        <div class="card">
            <div class="card-header">
                <h4>Edit Category
                    <a href="{{ url('admin/category')}}" class="btn btn-primary btn-sm text-white float-end">BACK</a>
                </h4>
            </div>
            <div class="card-body">
                <form action="{{ url('admin/category/'.$category->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf    
                    @method('PUT')

                    <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="">Name</label>
                        <input type="text" value="{{ $category->name }}" name="name" class="form-control">
                        @error('name') <small class="text-danger">{{$message}}</small> @enderror
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Description</label>
                        <textarea name="description" class="form-control" rows="3">{{ $category->description }}</textarea>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Image</label><br>
                        <input type="file" name="image" class="form-control">
                        <img src="{{ asset('/uploads/category/'.$category->image) }}" width="60px" height="60px" alt="">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Status</label><br>
                        <input type="checkbox" name="status" {{ $category->status == '1' ? 'checked':''}} >
                    </div>
                    <div class="col-md-6 mb-3">
                        <button type="submit" class="btn btn-primary float-end">Update</button>
                    </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection