@extends('public.dashboard_v1.layout.LayoutDashboard')
@section('content')
    <div class="page-wrapper" style="height: auto">

        {{-- Start Form --}}
        <div class="col-sm-12 col-md-6 col-lg-6 mt-5" style="margin:0 auto">
            <div class="card ">
                <div class="card-body">
                    <h4 class="card-title">Add Main Services</h4>
                    <form method="post" action="{{ route('main-services.store') }}" class="mt-3 form-horizontal">
                        {{ csrf_field() }}
                        <div class="form-group col">
                            <div class="mb-2 mt-2">
                                <label for="inputHorizontalSuccess" class="col-sm-6 ">Services Name <sup style="color: #ff0000">*</sup></label>
                                <div class="col-sm-12">
                                    <input type="text" name="services_name" class="form-control" placeholder="Services Name">
                                </div>
                            </div>
                            @if ($errors->has('services_name'))
                                <div class="alert alert-danger">{{ $errors->first('services_name') }}</div>
                            @endif



                            <div class="mb-2 mt-2">
                                <label for="inputHorizontalSuccess" class="col-sm-6 ">Description</label>
                                <div class="col-sm-12">
                                    <textarea type="text" class="form-control" name="description"
                                           id="inputHorizontalSuccess"
                                              placeholder="write here.."></textarea>
                                    <div class="invalid-feedback">
                                        Sorry, that username's taken. Try another?
                                    </div>
                                </div>
                            </div>
                            @if ($errors->has('description'))
                                <div class="alert alert-danger">{{ $errors->first('description') }}</div>
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
        <div class="col-10" style="margin:0 auto">
            <div class="card">

                <div class="table-responsive">
                    <table class="table">
                        <thead class="thead-light">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Description</th>
                            <th scope="col">Update</th>
                            <th scope="col">Delete</th>
                        </tr>
                        </thead>
                        <tbody>

                        @if(!$MainServices->isEmpty())
                            @foreach($MainServices as $MainService)
                                <tr>
                                    <th scope="row">{{$MainService->main_service_id}}</th>
                                    <td>{{$MainService->main_service_name}}</td>
                                    <td>{{$MainService->main_service_desc}}</td>
                                    <td>
                                        <a href="/main-services/edit/{{$MainService->main_service_id}}"
                                           class="btn btn-sm waves-effect waves-light btn-rounded btn-warning"
                                        >Update
                                        </a>
                                    </td>
                                    <td>
                                        <a href="/main-services/delete/{{$MainService->main_service_id}}"
                                           class="btn btn-sm waves-effect waves-light btn-rounded btn-danger"><i data-feather="trash-2"
                                                                                                                 class="feather-icon"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr style="text-align: center; vertical-align: middle;">
                                <td colspan="5">No Data</td>
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
