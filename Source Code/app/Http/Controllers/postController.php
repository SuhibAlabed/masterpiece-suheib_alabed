<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Main_service;
use App\Service;
use App\Services_post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class postController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index($post_type = null)
    {
        $requestType = request()->getRequestUri();
        if ($requestType != "/services") {
            $posts = DB::table('services_posts')
                ->join('users', 'services_posts.user_id', '=', 'users.user_id')
                ->where('services_posts.post_type', '=', $post_type)
                ->where('services_posts.approved', '=', '1')
                ->orderBy('post_id', 'desc')
                ->get();
        } else {
            $posts = DB::table('services_posts')
                ->join('users', 'services_posts.user_id', '=', 'users.user_id')
                ->select('users.*', 'services_posts.*')
                ->where('services_posts.approved', '=', '1')
                ->orderBy('post_id', 'desc')
                ->get();
        }

        $comment = DB::table('comments')
            ->join('users', 'comments.user_id', '=', 'users.user_id')
            ->orderBy('comments.comment_id', 'desc')
            ->get();
        $commentCount = Comment::all();
//        dd($posts);
        return view('public.services')->with('posts', $posts)->with('comments', $comment)->with('commentCount', $commentCount);;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request, $post_type)
    {

        request()->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title_post' => 'required',
            'body_post' => 'required'
        ]);

        if (!empty(request()->image)) {
            $imageName = time() . '.' . request()->image->getClientOriginalExtension();
            request()->image->move(public_path('images'), $imageName);
        } else {
            $imageName = '';
        }

        $post = new Services_post();
        $post->post_title = request()->input('title_post');
        $post->post_body = request()->input('body_post');
        $post->post_img = $imageName;
        $post->post_type = $post_type;
//        $post->approved = 1;
        $post->user_id = Auth::user()->user_id;

        $post->save();

        $notification = array(
            'message' => 'Post created successfully!',
            'alert-type' => 'success'
        );
        return back()->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function show($post_type = null)
    {
        $requestType = request()->getRequestUri();



            $posts = DB::table('services_posts')
                ->join('users', 'services_posts.user_id', '=', 'users.user_id')
                ->select('users.*', 'services_posts.*')
                ->orderBy('post_id', 'desc')
                ->get();

            $comment = DB::table('comments')
                ->join('users', 'comments.user_id', '=', 'users.user_id')
                ->orderBy('comments.comment_id', 'desc')
                ->get();
            $commentCount = Comment::all();


            return view('public.dashboard_v1.managePosts')->with('posts', $posts)->with('comments', $comment)->with('commentCount', $commentCount);


//      dd($posts);
    }

    public function display($id)
    {
        $posts = DB::table('services_posts')
            ->join('users', 'services_posts.user_id', '=', 'users.user_id')
            ->select('users.*', 'services_posts.*')
            ->where('services_posts.post_id','=',$id)
            ->get();

        $comment = DB::table('comments')
            ->join('users', 'comments.user_id', '=', 'users.user_id')
            ->orderBy('comments.comment_id', 'desc')
            ->get();
        $commentCount = Comment::all();

        return view('public.single_page_post')->with('posts', $posts)->with('comments', $comment)->with('commentCount', $commentCount);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update($post_id)
    {
        $posts = Services_post::find($post_id);
        $posts->approved = true;
        $posts->save();

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($post_id)
    {
        $posts = Services_post::find($post_id);
        $posts->delete();

        return back();
    }
}
