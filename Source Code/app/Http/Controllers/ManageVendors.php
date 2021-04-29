<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;

class ManageVendors extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        $vendors = User::all()->where('role','worker');
        return view('public.dashboard_v1.manageVendors',compact('vendors'));
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        request()->validate([
            'first_name' => 'required|min:3|max:15',
            'last_name'  => 'required|min:3|max:15',
            'email_address'      => 'required|unique:users|email',
            'password'   => 'required|unique:users|min:6',
        ]);

        $admin = new User;
        $admin->first_name       = $request->input('first_name');
        $admin->last_name       = $request->input('last_name');
        $admin->email_address	 = $request->input('email_address');
        $admin->password         = Hash::make($request->input('password'));
        $admin->role             = "worker";
        $admin->save();
        $notification = array(
            'message' => 'Post created successfully!',
            'alert-type' => 'success'
        );
        return back()->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function edit($id)
    {
        $vendor = User::find($id);
        $vendor->approved = true;
        $vendor->save();

        return back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'first_name' => 'required|min:3|max:15',
            'last_name'  => 'required|min:3|max:15',
            'email_address'      => 'required|unique:users|email',
            'password'   => 'required|min:6',
        ]);

        $admin = User::find($id);
        $admin->first_name       = $request->input('first_name');
        $admin->last_name       = $request->input('last_name');
        $admin->email_address	 = $request->input('email_address');
        $admin->password         = Hash::make($request->input('password'));
        $admin->role             = "worker";
        $admin->save();

        return redirect('worker');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vendor = User::find($id);
        $vendor->delete();
        return back();
    }
}
