@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-md-12 grid-margin">
        <div class="card">
            <div class="card-header">
                <h3>Edit User
                    <a href="{{ url('admin/user/')}}" class="btn btn-danger btn-sm text-white float-end">
                        Back
                    </a>
                </h3>
            </div>
            <div class="card-body">

                <form action="{{url('admin/user/'.$user->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="">Name</label>
                        <input type="text" value="{{$user->uname}}" name="title" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="">Email</label>
                        <input typr="email" name="email" class="form-control"  value="{{$user->email}}">
                    </div>          
                    
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
    </div>
</div>    


@endsection