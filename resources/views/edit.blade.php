@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            @if(session()->has('changed'))
                <div class="container alert">
                    <p class="alert alert-success"
                       style="text-align: center;font-size: 25px">{{session()->get('changed')}}</p>
                </div>
            @endif
            <div class="col-md-8">
                <div>
                    <div class="card-header d-flex justify-content-around">
                        <h6>Edit</h6>
                        <form action="{{ url('delete_me/' . $user->id) }}" method="post">
                            @csrf
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-danger">
                                        Delete
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="card-body">

                        <form method="POST" action="{{ url('edit') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control " name="name"
                                           value="{{ $user->name }}" required="" autocomplete="name" autofocus="">

                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail
                                    Address</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control " name="email"
                                           value="{{ $user->email }}" required="" autocomplete="email">

                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="fileToUpload" class="col-md-4 col-form-label text-md-right">Profile
                                    photo</label>

                                <div class="col-md-6">
                                    <input type="file" name="image" id="image" multiple>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-lg-12" style="justify-content: center; display: flex">
                                    <div class="card p-0">
                                        <div class="card-image">
                                            @if(!empty($user['image']))
                                                <img
                                                    src="{{asset('/uploads/' . $user['image'])}}"
                                                    alt="" style="height: 100%;">
                                            @else
                                                <img
                                                    src="{{asset('/uploads/default.png')}}"
                                                    alt="" style="height: 100%;">
                                            @endif
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-info">
                                        Change
                                    </button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
