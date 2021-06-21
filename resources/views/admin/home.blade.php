@extends('layouts.app')

@section('content')

    <div class="container" style="padding: 10px">
        <div class="flex">
            <div class="d-flex flex-column">
                <h5>Searching</h5>
                <form method="get" action="{{ url('/home')}}" class="form-inline md-form mr-auto mb-6"
                      style="justify-content: space-between; width: 327px">
                        <input style="padding: 11px 22px;" id="datepicker" name="date" value="{{request('date')}}"
                               placeholder="select date"/>
                    <input class="form-control mr-sm-2" style="margin-top: 10px; width: 250px" name="name"
                           value="{{request('name')}}" type="text" placeholder="Name..." aria-label="Search">
                    <div class="flex-column" style="margin-top: 10px">
                        <button class="btn btn-info aqua-gradient btn-rounded btn-sm my-0" type="submit">Search
                        </button>
                    </div>

                </form>
            </div>
        </div>
        <div class="row justify-content-center mb-5">
            <div class="col-md-7 text-center heading-section ftco-animate fadeInUp ftco-animated">
                <h1>Welcome admin</h1>
            </div>
            <div class="col-md-7 text-center heading-section ftco-animate fadeInUp ftco-animated">
                <h2 class="section-title">Our Team Section</h2>
            </div>
        </div>
        @if(session()->has('user_del'))
            <div class="container alert">
                <p class="alert alert-success"
                   style="text-align: center;font-size: 25px">{{session()->get('user_del')}}</p>
            </div>
        @endif
        @if(session()->has('user_admin'))
            <div class="container alert">
                <p class="alert alert-success"
                   style="text-align: center;font-size: 25px">{{session()->get('user_admin')}}</p>
            </div>
        @endif
        <div class="row ftco-animate fadeInUp ftco-animated">
            <div class="col-md-12">
                <div class="carousel-testimony owl-carousel ftco-owl owl-loaded owl-drag">

                    <section class="team section">
                        <div class="container">
                            <div class="row">

                                @foreach($users as $user)
                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                        <div class="team-item">
                                            <figure>
                                                <div class="col-lg-12">
                                                    <div class="card p-0">
                                                        <div class="card-image">
                                                            <a href="{{ url('view', $user->id) }}">
                                                                @if(isset($user->image))
                                                                    <img
                                                                        src="{{asset('/uploads/' . $user->image)}}"
                                                                        alt="" style="height: 100%">
                                                                @else
                                                                    <img
                                                                        src="{{asset('/uploads/default.png')}}"
                                                                        alt="" style="height: 100%">
                                                                @endif <a
                                                                    class="card-content d-flex flex-column align-items-center">
                                                                    <h4 class="pt-2">{{ $user->name }}</h4>
                                                                    <h5>{{ $user->email }}</h5>
                                                                </a>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </figure>
                                        </div>
                                    </div>
                                @endforeach
                                <div style="display:flex; justify-content: center">
                                    {{ $users->links('vendor.pagination.bootstrap-4') }}
                                </div>
                            </div>
                        </div>
                        <a href="{{ url('view') }}"></a>
                    </section>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('script')
    <script>
        $(function () {
            $('#datepicker').datepicker({
                uiLibrary: 'bootstrap4',
                format: 'yyyy-mm-dd'
            });
        })
    </script>
@endpush
