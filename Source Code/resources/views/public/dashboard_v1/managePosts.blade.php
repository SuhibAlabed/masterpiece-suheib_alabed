@extends('public.dashboard_v1.layout.LayoutDashboard')
@section('content')
    <div class="page-wrapper" style="height: auto">


        {{-- Start Table --}}
        <div class="col-11" style="margin:0 auto">
            <div class="card">

                <div class="table-responsive">
                    <table class="table">
                        <thead class="thead-light">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">title</th>
                            <th scope="col">body</th>
                            <th scope="col">Services</th>
                            <th scope="col">Status</th>
                            <th scope="col">Delete</th>
                            <th scope="col">View</th>
                        </tr>
                        </thead>
                        <tbody>

                        @if(!$posts->isEmpty())
                            @foreach($posts as $post)
                                <tr>
                                    <th style="text-align: center; vertical-align: middle" scope="row">{{$post->post_id}}</th>
                                    <td style="text-align: center; vertical-align: middle">{{$post->post_title}}</td>
                                    <td style="text-align: center; vertical-align: middle">{{Str::limit($post->post_body,100)}}</td>
                                    <td style="text-align: center; vertical-align: middle">{{$post->post_type}}</td>
                                    @if($post->approved)
                                        <td style="text-align: center; vertical-align: middle">
                                            <a href="post/edit/{{$post->post_id}}" style="font-size: 0.8em"
                                               class="btn btn-sm waves-effect waves-light btn-rounded btn-dark disabled"
                                            >Approved
                                            </a>
                                        </td>
                                    @else
                                        <td style="text-align: center; vertical-align: middle;">
                                            <a href="post/Approved/{{$post->post_id}}" style="font-size: 0.8em"
                                               class="btn btn-sm waves-effect waves-light btn-rounded btn-success"
                                            >Approve
                                            </a>
                                        </td>
                                    @endif
                                    <td style="text-align: center; vertical-align: middle;">
                                        <a href="post/delete/{{$post->post_id}}"
                                           class="btn btn-sm  waves-effect waves-light btn-rounded btn-danger"><i data-feather="trash-2"
                                                                                                                  class="feather-icon"></i></a>

                                    </td>
                                    <td style="text-align: center; vertical-align: middle;">
                                        <a href="services/single_page_post/{{$post->post_id}}"
                                           class="btn btn-sm waves-effect waves-light btn-rounded btn-primary" ><i data-feather="eye"
                                                                                                                   class="feather-icon"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr style="text-align: center; vertical-align: middle;">
                                <td colspan="10">No Data</td>
                            </tr>
                        @endif


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        {{-- End Table --}}
    </div>
@endsection
