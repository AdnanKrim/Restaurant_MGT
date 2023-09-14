@extends('admin.adminmaster')
@section('content')

<div class="row">
            <div class="col-lg-6 bg-white mx-auto mt-5">
                <h4 class="text-success">{{ Session::get('message') }}</h4>
                <div class="card bg-white center">
                    <h4 class="card-header">All Viewer</h4>

                    <div class="card-body bg-white">

                        <div class="bg-white">
                            <form action="/brand-search" method="GET">
                                <div class="form-group row">
                                    <label class="col-md-6">
                                        <input type="text" class="form-control bg-white" name="query" value="Search"/>
                                    </label>
                                    <div class="col-md-6 ml-0">
                                        <button type="submit" class="btn"><i class="fa fa-search"></i></button>
                                    </div>
                    
                                </div>
                            </form>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered mb-0">
                                <thead class="bg-orange">
                                <tr>
                                            <th>#</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Email</th>
                                            <th>Action</th>
                                        </tr>
                                </thead>
                                <tbody>
                                @foreach ($signs as $sign)


                                        <tr>
                                            <th scope="row">{{$loop->iteration}}</th>
                                            <td>{{$sign->firstname}}</td>
                                            <td>{{$sign->lastname}}</td>
                                            <td>{{$sign->email}}</td>
                                            <td>
                                                <a href="" class="btn btn-success btn-sm">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a href="" class="btn btn-danger btn-sm">
                                                    <i class="fa fa-trash"></i>
                                                </a>

                                            </td>
                                        </tr>
                                        @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection