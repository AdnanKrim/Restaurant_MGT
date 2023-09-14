@extends('admin.adminmaster')
@section('content')

<div class="row">
            <div class="col-lg-6 bg-white mx-auto mt-5">
                <h4 class="text-success">{{ Session::get('message') }}</h4>
                <div class="card bg-white center">
                    <h4 class="card-header">All Photos</h4>

                    <div class="card-body bg-white">

                        <div class="bg-white">
                            <form action="/brand-search" method="GET">
                                <div class="form-group row">
                                    <label class="col-md-6">
                                        <input type="text" class="form-control bg-white" name="query" value="Search"/>
                                    </label>
                                    <div class="col-md-6 ml-0">
                                    <span class="float-right col-md-6"><a href="/photo-form" class="btn btn-success float-right">+Add</a></span>
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
                                            <th>Name</th>
                                            <th>Image</th>
                                            <th>Action</th>
                                        </tr>
                                </thead>
                                <tbody>
                                @foreach ($photos as $photo)


                                        <tr>
                                            <th scope="row">{{$loop->iteration}}</th>
                                            <td>{{$photo->name}}</td>
                                            <td><img src="{{asset('images/upload/'.$photo->image)}}" width="70px" height="70px" alt="image"></td>
                                            <td>
                                        <a href="/photo-edit/{{$photo['id']}}" class="btn btn-success btn-sm">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a href="/photo-delete/{{$photo['id']}}" class="btn btn-danger btn-sm">
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