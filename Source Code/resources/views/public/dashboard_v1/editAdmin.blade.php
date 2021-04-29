@extends('public.dashboard_v1.layout.LayoutDashboard')
@section('content')
    <div class="page-wrapper" style="height: 100vh">
        <div class="col-sm-12 col-md-6 col-lg-6 mt-5" style="margin:0 auto">
            <div class="card ">
                <div class="card-body">
                    <h4 class="card-title">Edit admin</h4>
                    @foreach($admins as $admin)
                    <form method="post" action="/{{ Request::path() }}/updated" class="mt-3 form-horizontal">
                        {{ csrf_field() }}
                        <div class="form-group col">
                            <div class="mb-2 mt-2">
                                <label for="inputHorizontalSuccess" class="col-sm-6 ">First Name <sup style="color: #ff0000">*</sup></label>
                                <div class="col-sm-12">
                                    <input type="text" value="{{$admin->first_name}}" name="first_name" class="form-control" placeholder="First Name">
                                </div>
                            </div>
                            @if ($errors->has('first_name'))
                                <div class="alert alert-danger">{{ $errors->first('first_name') }}</div>
                            @endif


                            <div class="mb-2 mt-2">
                                <label for="inputHorizontalSuccess" class="col-sm-6 ">Last Name <sup style="color: #ff0000">*</sup></label>
                                <div class="col-sm-12">
                                    <input type="text" value="{{$admin->last_name}}" name="last_name" class="form-control" placeholder="Last Name">
                                </div>
                            </div>
                            @if ($errors->has('last_name'))
                                <div class="alert alert-danger">{{ $errors->first('last_name') }}</div>
                            @endif


                            <div class="mb-2 mt-2">
                                <label for="inputHorizontalSuccess" class="col-sm-6 ">Email <sup style="color: #ff0000">*</sup></label>
                                <div class="col-sm-12">
                                    <input type="email" class="form-control" name="email_address"
                                           id="inputHorizontalSuccess"
                                           value="{{$admin->email_address}}"
                                           placeholder="name@example.com">
                                    <div class="invalid-feedback">
                                        Sorry, that username's taken. Try another?
                                    </div>
                                </div>
                            </div>
                            @if ($errors->has('email_address'))
                                <div class="alert alert-danger">{{ $errors->first('email_address') }}</div>
                            @endif


                            <div class="mb-2 mt-2">
                                <label for="inputHorizontalSuccess" class="col-sm-6 ">Password <sup style="color: #ff0000">*</sup></label>
                                <div class="col-sm-12">
                                    <input type="password" class="form-control"  value="{{$admin->password}}"name="password"
                                           placeholder="Enter password">
                                </div>
                            </div>

                            @if ($errors->has('password'))
                                <div class="alert alert-danger">{{ $errors->first('password') }}</div>
                            @endif
                        </div>
                        <div style="display: flex; justify-content: center ; align-items: center; justify-content: space-between">
                            <a href="/{{$admin->role}}"
                               class="btn waves-effect waves-light btn-rounded btn-danger">Cancel
                            </a>

                            <button type="submit" name="submit"
                                    class="btn waves-effect waves-light btn-rounded btn-success">Edit
                            </button>

                        </div>
                    </form>
                    @endforeach
                </div>
            </div>
        </div>

    </div>
@endsection
