@extends('public.layout.layout')
@section('content')
    <div class="container-fluid" style="height: 150vh; width: 100vw">
        <div class="d-flex flex-column justify-content-center align-items-center m-0">

            <div class=" d-flex flex-column justify-content-center align-items-center align-content-center p-5  "
                 style="background: #efefef;color:#000; width: 100vw">
                <div>
                    <img src={{asset("default.png")}} class="rounded-circle"
                         width="150rem">
                </div>
                <div>
                    <p style="font-size: 1.5em">{{$user->first_name}} {{$user->last_name}}</p>
                </div>
            </div>
            <div class="d-flex justify-content-around flex-row flex-row-reverse p-5"
                 style="background: #efefef;color:#000; width: 100vw">
                @if(\Illuminate\Support\Facades\Auth::user()->approved == 1)
                    <div class="Location d-flex flex-column justify-content-center align-items-center">
                        <b>Location <i class="fas fa-map-marker"></i></b>
                        <span>{{$user->location}}</span>
                    </div>
                    <div class="badges d-flex flex-column justify-content-center align-items-center" style="color:#000">
                        <b>Badges <i class="fas fa-certificate"></i></b>
                        <span>{{$user->badges}} </span>
                    </div>
                    <div class="rate d-flex flex-column justify-content-center align-items-center">
                        <b>Rate <i class="fas fa-star"></i></b>
                        <span>{{$user->rate}}% </span>
                    </div>
                    <div class="numberOfCustomer d-flex flex-column justify-content-center align-items-center">
                        <b>Number of Customer <i class="fas fa-users"></i></b>
                        <span>{{$user->number_customers}}</span>
                    </div>
                @else
                    <div class="alert alert-warning mt-5 d-flex flex-column align-items-center"  role="alert">
                        <b>We're reviewing your account</b><br>
                        <span>This usually takes around <b>1 business day</b>, to complete.</span>
                    </div>
                @endif
            </div>

            <div class="d-flex flex-row flex-wrap mt-5 pl-5 pr-5 justify-content-center " style="width: 100vw;">

                @if($posts)
                    @foreach($posts as $post)
                        <div class="card m-5" style="width: 25rem; box-shadow: rgba(0, 0, 0, 0.08) 0px 4px 12px;">
                            @if($post->post_img)
                                <div style="overflow-y: hidden; height: 15rem">
                                    <img src="{{asset('images/'.$post->post_img)}}" class="card-img-top" alt="...">
                                </div>
                            @else
                                <div style="overflow-y: hidden; height: 15rem">
                                    <img src="{{asset("default.png")}}" class="card-img-top" alt="...">
                                </div>
                            @endif
                            <div class="card-body">
                                <h5 class="card-title">{{$post->post_title}}</h5>
                                <p class="card-text">{{Str::limit($post->post_body,100)}}</p>
                            </div>
                            <div class="d-flex flex-row justify-content-between align-items-center p-3"
                                 style="border-top: 1px #ddd solid">
                                @if(!$post->approved)
                                    <div style="color: darkred">In Processing...</div>
                                @else
                                    <div style="color: lightseagreen">Approved</div>
                                @endif
                                <div>
                                    <a href="../services/single_page_post/{{$post->post_id}}"><i
                                            class="fas fa-eye fa-lg"></i></a>
                                </div>
                            </div>

                        </div>
                    @endforeach
                @else
                    <div class="d-flex justify-content-center align-items-center" style="width: 100vw; font-size: 2em">
                        <b>You Don't have any services</b>
                    </div>
                @endif
            </div>
        </div>

    </div>
@endsection
