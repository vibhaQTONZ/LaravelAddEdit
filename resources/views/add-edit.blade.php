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
                                <a class="btn btn-success" href="{{'home'}}"> All User</a>
                            </div>
                        </div>
                    </div>
                    <form action="{{ isset($user->id) ?  @route('add-edit', $user->id) : @route('add-edit')}}" method="POST" role="form" enctype="multipart/form-data">
                        @csrf
                        <table class="table table-bordered">
                            <div class="col-lg-12 form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" name="name" value="@if(isset($user['name']))   {{ $user['name'] }}   @endif" id="name" placeholder="Enter Your Name">
                            </div>
                            <div class="col-lg-12 form-group">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" name="email" value="@if(isset($user['email']))   {{ $user['email'] }}   @endif" id="email" placeholder="Enter Your Email">
                            </div>
                            <div class="col-lg-12 form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" name="password" value="@if(isset($user['password']))   {{ $user['password'] }}   @endif" id="password" placeholder="Enter Your Password">
                            </div>
                            <div class="col-lg-12 form-group">
                                <label for="image">Choose File:</label>
                                <input type="file" class="form-control" name="image" id="image">
                            </div>
                            </tr>
                        </table>
                        <div class="col-lg-12 form-group">
                            <!-- <input type="hidden" name="id" value="{{{ isset($user->id) }}}">  -->
                            <button class="btn btn-success btn-block rounded">
                                {{ isset($user->id) ? 'Update User' : 'Add User' }}
                            </button>
                        </div>
                        <br>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection