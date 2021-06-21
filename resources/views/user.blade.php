@extends('layouts.app')

@section('content')
    <!------ Include the above in your HEAD tag ---------->

    <div class="page-content page-container" id="page-content">
        <h1 style="padding: 10px 200px">Welcome <span style="color: darkblue">{{ $user_name }}</span></h1>

        <div class="container emp-profile">
            <div class="padding">
                <div class="row container d-flex justify-content-center"
                     style="margin: 0 auto !important; padding: 10px">
                    {{--<div class="col-md-4 card user-card-full" style="padding: 0px">--}}
                    {{--<div class="profile-img">--}}
                    {{--@if(!empty($user['image']))--}}
                    {{--<img--}}
                    {{--src="{{asset('/uploads/' . $user['image'])}}"--}}
                    {{--alt="" style="height: 100%">--}}
                    {{--@else--}}
                    {{--<img--}}
                    {{--src="{{asset('/uploads/default.png')}}"--}}
                    {{--alt="" style="height: 100%">--}}
                    {{--@endif--}}

                    {{--</div>--}}
                    {{--</div>--}}

                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="team-item">
                            <figure>
                                <div class="col-lg-12">
                                    <div class="card p-0">
                                        <div class="card-image">
                                            @if(!empty($user['image']))
                                                <img
                                                    src="{{asset('/uploads/' . $user['image'])}}"
                                                    alt="" style="height: 100%">
                                            @else
                                                <img
                                                    src="{{asset('/uploads/default.png')}}"
                                                    alt="" style="height: 100%">
                                            @endif

                                        </div>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>

                    <div class="col-xl-6 col-md-12">
                        <div class="card user-card-full" style="padding: 29px;">

                            <div class="col-sm-12">
                                <div class="card-block">
                                    <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Information</h6>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <p class="m-b-10 f-w-600">Email</p>
                                            <h6 class="text-muted f-w-400">{{ $user_email }}</h6>
                                        </div>
                                        <div class="col-sm-12">
                                            <p class="m-b-10 f-w-600">Name</p>
                                            <h6 class="text-muted f-w-400">{{ $user_name }}</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="card-block">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            @if(!empty($date))
                                                <label for="date" class="m-b-10 f-w-600">Work days</label>
                                                <select name="date" id="date">
                                                    @foreach($date as $time)
                                                        <option value="{{ $time }}">{{ $time }}</option>
                                                    @endforeach
                                                </select>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
