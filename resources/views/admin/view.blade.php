@extends('layouts.app')

@section('content')

    <div class="container" style="padding: 10px">
        <div class="row ftco-animate fadeInUp ftco-animated">
            <div class="col-md-12">
                <div class="carousel-testimony owl-carousel ftco-owl owl-loaded owl-drag">

                    <section class="team section">
                        <div class="container">
                            <div class="row">
                                <div class="team-item" style="display: flex; justify-content: space-around">
                                    <figure>
                                        <div class="form-group row">
                                            <div class="col-lg-12"
                                                 style="justify-content: center; display: flex">
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
                                    </figure>

                                    <div class="card-columns" style="padding: 20px">
                                        <figcaption>
                                            <div class="info">
                                                <h3>{{ $user->name }}</h3>
                                                <h6>Email: {{ $user->email }}</h6>
                                            </div>
                                            <div class="info">
                                                <h6>Role: {{ $role->name }}</h6>
                                            </div>
                                        </figcaption>
                                        @if($user->role_id !== 2)
                                            @if(!empty($date))
                                                <label for="date" class="m-b-10 f-w-600">Work days</label>
                                                <select name="date" id="date">
                                                    @foreach($date as $time)
                                                        <option value="{{ $time }}">{{ $time }}</option>
                                                    @endforeach
                                                </select>
                                            @else
                                                <h6 style="color: darkred">this user is not worked</h6>
                                            @endif
                                            <div style="display: flex">
                                                <div class="col-sm-8" style="padding: 10px">
                                                    <form method="post" action="{{ url('delete/' . $user->id) }}">
                                                        @csrf
                                                        <button class="btn btn-danger" type="submit">Delete this User
                                                        </button>
                                                    </form>
                                                </div>
                                                @endif
                                                <div class="col-sm-8" style="padding: 10px">
                                                    <form method="post" action="{{ url('changeRole/' . $user->id) }}">
                                                        @csrf
                                                        <button class="btn btn-info" type="submit">Change Role
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>

@endsection
