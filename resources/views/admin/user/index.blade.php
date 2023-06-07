@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-md-12">
        @if(session('message'))
            <div class="alert alert-success">{{ session('message') }}</div>
        @endif
        <div class="card">
            <div class="card-header">
                <h3>Users List
                    
                </h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($user as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->uname }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    <a href="{{url('admin/user/'.$user->id.'/edit')}}" class="btn btn-success">Edit</a>
                                    <a href="{{url('admin/user/'.$user->id.'/delete')}}" onclick="return confirm('Are you sure you want to delete this slider>');" class="btn btn-danger">
                                        Delete
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>    


@endsection