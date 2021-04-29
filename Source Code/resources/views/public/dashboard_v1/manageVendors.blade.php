@extends('public.dashboard_v1.layout.LayoutDashboard')
@section('content')
    <div class="page-wrapper" style="height: auto">

        {{-- Start Form --}}
        <div class="col-sm-12 col-md-6 col-lg-6 mt-5" style="margin:0 auto">
            <div class="card ">
                <div class="card-body">
                    <h4 class="card-title">Add Vendors</h4>
                    <form method="post" action="{{ route('worker.store') }}" class="mt-3 form-horizontal">
                        {{ csrf_field() }}
                        <div class="form-group col">
                            <div class="mb-2 mt-2">
                                <label for="inputHorizontalSuccess" class="col-sm-6 ">First Name <sup style="color: #ff0000">*</sup></label>
                                <div class="col-sm-12">
                                    <input type="text" name="first_name" class="form-control" placeholder="First Name">
                                </div>
                            </div>
                            @if ($errors->has('first_name'))
                                <div class="alert alert-danger">{{ $errors->first('first_name') }}</div>
                            @endif


                            <div class="mb-2 mt-2">
                                <label for="inputHorizontalSuccess" class="col-sm-6 ">Last Name <sup style="color: #ff0000">*</sup></label>
                                <div class="col-sm-12">
                                    <input type="text" name="last_name" class="form-control" placeholder="Last Name">
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
                                    <input type="password" class="form-control" name="password"
                                           placeholder="Enter password">
                                </div>
                            </div>

                            @if ($errors->has('password'))
                                <div class="alert alert-danger">{{ $errors->first('password') }}</div>
                            @endif
                        </div>
                        <div style="display: flex; justify-content: center ; align-items: center">
                            <button type="submit" name="submit"
                                    class="btn waves-effect waves-light btn-rounded btn-success">Add
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        {{-- End Form --}}


        {{-- Start Table --}}
        <div class="col-11" style="margin:0 auto">
            <div class="card">

                <div class="table-responsive">
                    <table class="table">
                        <thead class="thead-light">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Rate</th>
                            <th scope="col">Points</th>
                            <th scope="col">Badges</th>
                            <th scope="col">Status</th>
                            <th scope="col">Update</th>
                            <th scope="col">Delete</th>
                            <th scope="col">Message</th>
                        </tr>
                        </thead>
                        <tbody>

                        @if(!$vendors->isEmpty())
                            @foreach($vendors as $vendor)
                                <tr>
                                    <th scope="row">{{$vendor->user_id}}</th>
                                    <td>{{$vendor->first_name}} {{$vendor->last_name}}</td>
                                    <td>{{$vendor->email_address}}</td>
                                    <td>{{$vendor->rate}}%</td>
                                    <td>{{$vendor->points}}</td>
                                    <td>{{$vendor->badges}}</td>
                                    @if($vendor->approved)
                                        <td style="text-align: center; vertical-align: middle">
                                            <a href="{{$vendor->role}}/edit/{{$vendor->user_id}}" style="font-size: 0.8em"
                                               class="btn btn-sm waves-effect waves-light btn-rounded btn-dark disabled"
                                               >Approved
                                            </a>
                                        </td>
                                    @else
                                        <td style="text-align: center; vertical-align: middle;">
                                            <a href="{{$vendor->role}}/Approved/{{$vendor->user_id}}" style="font-size: 0.8em"
                                               class="btn btn-sm waves-effect waves-light btn-rounded btn-success"
                                            >Approve
                                            </a>
                                        </td>
                                    @endif
                                    <td style="text-align: center; vertical-align: middle;">
                                        <a href="{{$vendor->role}}/edit/{{$vendor->user_id}}" style="font-size: 0.8em"
                                           class="btn btn-sm waves-effect waves-light btn-rounded btn-warning"
                                        >Update
                                        </a>
                                    </td>
                                    <td style="text-align: center; vertical-align: middle;">
                                        <a href="{{$vendor->role}}/delete/{{$vendor->user_id}}"
                                           class="btn btn-sm  waves-effect waves-light btn-rounded btn-danger"><i data-feather="trash-2"
                                                                                                          class="feather-icon"></i></a>

                                    </td>
                                    <td style="text-align: center; vertical-align: middle;">
                                        <a href=""
                                           class="btn btn-sm waves-effect waves-light btn-rounded btn-primary" ><i data-feather="message-circle"
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
