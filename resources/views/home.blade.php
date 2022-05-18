@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h2>User <b>Management</b></h2>
                </div>

                <!-- <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('You are logged in!') }}  -->
                <!-- / .main-navbar -->
                <div class="main-content-container container-fluid px-4">
                    <div class="row" style="margin-bottom: 10px; margin-top:10px">
                        <div class="col-lg-12 margin-tb">

                            <div class="col-sm-5">
                                <a class="btn btn-success" href="{{'add-edit-form'}}"> Create New User</a>
                            </div>
                        </div>
                    </div>
                    <table class="table table-bordered">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Profile</th>
                            <th width="280px">Action</th>
                        </tr>
                        @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                <img src="{{asset('/uploads/'.$user->image)}}" class="rounded-circle" width="50px">
                            </td>
                            <td>
                                <a class="btn btn-primary" href="{{'edit-form/' .$user->id}}">Edit</a>
                                <a class="btn btn-danger" href="{{'delete/' .$user->id}}">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection