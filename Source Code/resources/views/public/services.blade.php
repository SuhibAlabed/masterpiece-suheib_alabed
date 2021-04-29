@extends('public.layout.layout')
@section('content')
    <div class="page" style="background: #f1f2f6">
        <!-- Breadcrumbs-->
        <section class="section-40 section-lg-64 bg-light-05">
            <div class="breadcrumbs-wrap">
                <div class="container text-center">
                    <div class="wrap-sm-justify-horizontal">
                        <div class="text-md-left">
                            <h1 class="breadcrumbs-custom-title text-white">Services</h1>
                        </div>
                        <div class="offset-top-22 offset-md-top-0 text-md-right">
                            <ul class="breadcrumbs-custom">
                                <li><a class="text-white" href="index.html">Home</a></li>
                                <li class="text-white">Services</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Responsive-tabs-->

        <section class="section-60 section-sm-top-90 section-sm-bottom-110">
            <div class="container">
                <div class="row justify-content-md-end">
                    <div style="" class="col-sm-2 main_services">
                        <ul class="resp-tabs-list mr-5 " style="background: #f1f2f6;">
                            <li><a href="/services"></a></li>
                            <li><a href="/services">All</a></li>
                            <li>
                                <a style="font-weight: {{request()->getRequestUri()== '/services/Plumbing' ? 'bold' : ''}}"
                                   href="../../services/Plumbing">Plumbing</a></li>
                            <li>
                                <a style="font-weight: {{request()->getRequestUri()== '/services/Cleaning' ? 'bold' : ''}}"
                                   href="../../services/Cleaning">Cleaning</a></li>
                            <li>
                                <a style="font-weight: {{request()->getRequestUri()== '/services/Electricity' ? 'bold' : ''}}"
                                   href="../../services/Electricity">Electricity</a></li>
                            <li>
                                <a style="font-weight: {{request()->getRequestUri()== '/services/Roofing' ? 'bold' : ''}}"
                                   href="../../services/Roofing">Roofing</a></li>
                            <li>
                                <a style="font-weight: {{request()->getRequestUri()== '/services/Renovation' ? 'bold' : ''}}"
                                   href="../../services/Renovation">Renovation</a></li>
                            <li>
                                <a style="font-weight: {{request()->getRequestUri()== '/services/Painting' ? 'bold' : ''}}"
                                   href="../../services/Painting">Painting</a></li>

                        </ul>
                    </div>
                    <div class="col-sm-6">
                        <div
                            class="responsive-tabs wrapper responsive-tabs-default responsive-tabs-vertical responsive-tabs-vertical-1"
                            data-custom-hash="true">

                            <div class="container-fluid">
                                <!-- Tab 1 -->

                                <div class="tab main">
                                    <div class="box-custom-variant-1">
                                        {{--                                        @if($post->post_type == null)--}}
                                        {{--                                            <div class="box-header">--}}
                                        {{--                                                <h3>All</h3>--}}
                                        {{--                                            </div>--}}
                                        {{--                                        @else--}}

                                        <div class="box-header">
                                            <h3>{{substr(strrchr(request()->getRequestUri(), "/"), 1)}}</h3>
                                        </div>

                                        {{--                                        @endif--}}

                                        @if(substr(strrchr(request()->getRequestUri(), "/"), 1) != "services")
                                            @auth
                                                @if(\Illuminate\Support\Facades\Auth::user()->role == 'worker' && \Illuminate\Support\Facades\Auth::user()->approved == 1)
                                                    <form action="{{'/'. Request::path().'/post'}}" class="form-comment"
                                                          method="post"
                                                          enctype="multipart/form-data">
                                                        @csrf
                                                        <div class=" mt-5 pl-0 pr-0 pt-5 pb-5"
                                                             style="background: #000; color: #ddd; border-radius: 1rem !important;">
                                                            <div class=" mb-5 pl-5 pr-5"><input type="text"
                                                                                                placeholder="Title..."
                                                                                                name="title_post"
                                                                                                style="width: 100%; border: none; outline: none; border-radius: 1rem; padding: 1rem;"/>
                                                            </div>
                                                            <div class=" pl-5 pr-5"><textarea placeholder="Details..."
                                                                                              rows="2"
                                                                                              name="body_post"
                                                                                              style="width:100%;border-radius: 1rem; outline:none; border: none; padding:1rem"></textarea>
                                                            </div>
                                                            <div class="mt-4 pl-5 pr-5">
                                                                <label><strong>Image : </strong></label>
                                                                <div class="d-flex ">
                                                                    <input type="file" name="image" style="width: 35%"
                                                                           class="form-control mr-5"> <sub> <b>Recommendation
                                                                            Size: 1920 * 600 </b></sub>
                                                                </div>
                                                            </div>

                                                            <div class="mt-5 pl-5 pr-5">
                                                                <button
                                                                    style="padding:0.8rem; border-radius:1rem; width: 100%"
                                                                    id="post"
                                                                    type="submit"
                                                                    class="btn btn-primary">Post
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                @else
                                                    <div class="alert alert-warning mt-5 d-flex flex-column align-items-center"  role="alert">
                                                        <b>We're reviewing your account</b><br>
                                                        <span>This usually takes around <b>1 business day</b>, to complete.</span>
                                                    </div>
                                                @endif
                                            @endauth
                                        @endif
                                    </div>
                                    @foreach($posts as $post)
                                        <div class=" mt-5 pl-0 pr-0 pt-5 pb-5"
                                             style="background: #000; color: #ddd; border-radius: 1rem !important; box-shadow: rgba(17, 17, 26, 0.1) 0px 4px 16px, rgba(17, 17, 26, 0.1) 0px 8px 24px, rgba(17, 17, 26, 0.1) 0px 16px 56px;">
                                            <div class="d-flex align-items-center pl-5 pr-5">
                                                <div class="mr-3">
                                                    <img src={{asset("default.png")}} class="rounded-circle"
                                                         width="50rem">
                                                </div>
                                                <div class="d-flex flex-column">
                                                    <div><b>{{$post->first_name}}</b></div>
                                                    <i style="color: #a09e9e">1h</i>
                                                </div>
                                            </div>

                                            <div class="mt-5 pl-5 pr-5"><b>{{$post->post_title}}</b></div>
                                            <div class="mt-4 pl-5 pr-5"><p>{{$post->post_body}}</p></div>
                                            @if($post->post_img)
                                                <div class="mt-4 d-flex justify-content-center align-items-center"
                                                     style="height: 37.5rem; overflow-y: hidden">
                                                    <a href="/services/single_page_post/{{$post->post_id}}"
                                                       style="color:#F7941E"> <img
                                                            src={{asset('images/'.$post->post_img)}} width="1920px"></a>
                                                </div>
                                            @endif


                                            <ul class="d-flex align-content-center align-items-center p-2 "
                                                style="width: 100%; border-top: 1px #a09e9e solid;border-bottom: 1px #a09e9e solid; padding-left:4rem !important;">
{{--                                                <li style="width: 100%;" class="sortable">--}}
{{--                                                    <button--}}
{{--                                                        class="far fa-thumbs-up btn btn-primary fa-lg button-post like"--}}
{{--                                                        id="like_{{$post->post_id}}" name="like_{{$post->post_id}}"--}}
{{--                                                        value="{{$post->post_id}}"--}}
{{--                                                        style="width: 80%;border-radius: 1rem"></button>--}}
{{--                                                    --}}{{--                                                    <input class="btn btn-primary "  type="button" name="like_post"--}}
{{--                                                    --}}{{--                                                           value="&#xf164"/>--}}
{{--                                                </li>--}}

                                                <li style="width: 100%;">
                                                    <button class="far fa-comments btn btn-primary fa-lg button-post"
                                                            style="width: 80%;border-radius: 1rem;"></button>
                                                    {{--                                                    <input class="btn btn-primary "  type="button" name="like_post"--}}
                                                    {{--                                                           value="&#xf164"/>--}}
                                                </li>

                                                <li style="width: 100%;">
                                                    <button class="fas fa-phone btn btn-primary fa-lg button-post"
                                                            style="width: 80%;border-radius: 1rem"></button>
                                                    {{--                                                    <input class="btn btn-primary "  type="button" name="like_post"--}}
                                                    {{--                                                           value="&#xf164"/>--}}
                                                </li>
                                            </ul>
                                            @auth
                                                <div class="leave-comment-box">
                                                    <form action="/storeComment/{{$post->post_id}}/{{$post->post_type}}"
                                                          class="form-comment" method="post">
                                                        @csrf
                                                        <div
                                                            class="row d-flex justify-content-center align-items-center align-content-center mb-0 mt-5"
                                                            style="flex-wrap: wrap">
                                                            <div class="container">

                                                                <div
                                                                    class="row d-flex justify-content-center align-content-center align-items-center">
                                                                    {{--                                                                    <div class="col-lg-8">--}}
                                                                    {{--                                                                        <input style="padding:1rem;background: #fff" type="text" id="comment"--}}
                                                                    {{--                                                                               name="comment"--}}
                                                                    {{--                                                                               class="inputtext form-control" rows="2"--}}
                                                                    {{--                                                                               placeholder="Leave Comments...">--}}
                                                                    {{--                                                                    </div>--}}
                                                                    <div class=" col-lg-8 pl-2 pr-2"><input type="text"
                                                                                                            placeholder="Leave Comments..."
                                                                                                            name="comment"
                                                                                                            style="width: 100%; border: none; outline: none; border-radius: 1rem; padding: 1rem;"/>
                                                                    </div>
                                                                    <div class="col-lg-3">
                                                                        <button style="padding:1rem; border-radius:10px"
                                                                                id="comment"
                                                                                type="submit"
                                                                                class="btn btn-primary">Comment
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            @endauth
                                            <div class="comments-box p-3 pb-0  mb-0">
                                                <?php $count = 0 ?>
                                                @foreach($commentCount as $comment)
                                                    @if($comment->post_id === $post->post_id)
                                                        <?php   $count += 1 ?>
                                                    @endif
                                                @endforeach


                                                <h4 class="d-flex" style="color: #fff; font-size: small">Comments <span>({{$count++}})</span>
                                                </h4>
                                                @foreach($comments as $comment)
                                                    @if($comment->post_id == $post->post_id)
                                                        <div
                                                            class="media comment pt-4 pb-4 pr-2 pl-2 d-flex justify-content-center align-items-center"
                                                            style="border-radius: 1rem">
                                                            @if($post->profile_img)
                                                                {{--                                                                <img class="mr-3 rounded-circle" alt="80x80"--}}
                                                                {{--                                                                     src="{{asset('images/'.$post->profile_img)}}"--}}
                                                                {{--                                                                     style="width: 50px; height:50px;">--}}
                                                                <img class="mr-3 rounded-circle" alt="80x80"
                                                                     src="{{asset('default.png')}}"
                                                                     style="width: 50px; height:50px;">
                                                            @else
                                                                <img class="mr-3 rounded-circle" alt="80x80"
                                                                     src="{{asset('default.png')}}"
                                                                     style="width: 50px; height:50px;">
                                                            @endif
                                                            <div class="media-body ">
                                                                <h5 class=" mt-0 mb-1"><a
                                                                        style="color: #fff; font-size: medium"
                                                                        href="/profile/{{$comment->user_id}}">{{$comment->first_name}}</a><small
                                                                        class="date"></small>
                                                                </h5>

                                                                <div class="pl-4">
                                                                    <p style="color:#fff;">{{$comment->comment_text}}</p>
                                                                </div>
                                                            </div>
                                                            @auth
                                                                @if(\Illuminate\Support\Facades\Auth::user()->user_id === $comment->user_id)
                                                                    <div>
                                                                        <a href="/services/{{$comment->comment_type}}/delete/{{$comment->comment_id}}"><i
                                                                                style="color:red"
                                                                                class="fas fa-trash fa-lg"></i></a>
                                                                    </div>
                                                                @endif
                                                            @endauth
                                                        </div>
                                                        @break
                                                    @endif
                                                @endforeach
                                                @if($comment->post_id === $post->post_id)
                                                    @if($count > 1)
                                                        <p class="mt-1"><a
                                                                href="/services/single_page_post/{{$post->post_id}}"
                                                                style="color:#F7941E">Show more...</a></p>
                                                    @endif
                                                @endif
                                            </div>
                                        </div>

                                    @endforeach
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-3" style="">
                        <ul class=" sticky-top Advertisement pt-4 pb-3"
                            style="background: #ecebeb;border-radius: 1rem;  height: 65vh">
                            <div class="pl-5 pr-5 mb-3"><b>Sponsored</b></div>
                            @foreach($posts as $post)
                                @if($post->Sponsored_post)
                                    <li>
                                        <div class="p-3  d-flex align-items-center justify-content-around">
                                            <div style=" margin-right: 1rem">
                                                <div style="width: 13rem;">
                                                    <img src="{{asset('images/'.$post->post_img)}}" class="mr-5"
                                                         style="border-radius: 0.5rem; width: auto"/>
                                                </div>
                                            </div>
                                            <div><p>{{Str::limit($post->post_body,40)}}</p></div>
                                        </div>
                                    </li>
                                @endif

                            @endforeach
                        </ul>

                    </div>
                </div>
            </div>
        </section>
        <div>
            <script>
                $(window).scroll(function (e) {
                    var $el = $('.main_services');
                    var isPositionFixed = ($el.css('position') == 'fixed');
                    if ($(this).scrollTop() > 500 && !isPositionFixed) {
                        $el.css({'position': 'fixed', 'top': '10rem', 'left': '22.5rem'});
                    }
                    if ($(this).scrollTop() < 500 && isPositionFixed) {
                        $el.css({'position': 'static', 'top': '10rem', 'left': '22.5rem'});
                    }
                });

                $(window).scroll(function (e) {
                    var $el = $('.Advertisement');
                    var isPositionFixed = ($el.css('position') == 'fixed');
                    if ($(this).scrollTop() > 500 && !isPositionFixed) {
                        $el.css({'position': 'fixed', 'top': '10rem', 'width': '18.5%'});
                    }
                    if ($(this).scrollTop() < 500 && isPositionFixed) {
                        $el.css({'position': 'static', 'top': '10rem', 'width': '100%'});
                    }
                });


            </script>
@endsection


