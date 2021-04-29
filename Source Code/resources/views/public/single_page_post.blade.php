@extends('public.layout.layout')

@section('content')
    <div class="container-fluid p-0 d-flex flex-row justify-content-center align-items-center" style="">
        <div class="row p-0">
            @foreach($posts as $post)
                @if($post->post_id )
                    <div class="col-lg-8 p-0 align-items-center"  style="height: 100vh; overflow-y: hidden"><img src="{{asset('/images/'.$post->post_img)}}" alt="" width="1920px" style="height: 100%; width: 100vw"/></div>
                    <div class="col-lg-4" style="background: #000; width: 100%" class="">
                        <div class="mt-5 pl-5 pr-5" style="color: #fff"><b>{{$post->post_title}}</b></div>
                        <div class="mt-4 pl-5 pr-5"><p>{{$post->post_body}}</p></div>
                        <ul class="d-flex align-content-center align-items-center p-2 "
                            style="width: 100%; border-top: 1px #a09e9e solid;border-bottom: 1px #a09e9e solid; padding-left:4rem !important;">

                            <li style="width: 100%;">
                                <button class="far fa-comments btn btn-primary fa-lg button-post"
                                        style="width: 80%;border-radius: 1rem;"></button>

                            </li>

                            <li style="width: 100%;">
                                <button class="fas fa-phone btn btn-primary fa-lg button-post"
                                        style="width: 80%;border-radius: 1rem"></button>
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
                        <div class="comments-box p-3 pb-0  mb-0"style="overflow-y: auto; height: 45rem">
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

                @endif
            @endforeach
        </div>
    </div>
@endsection
