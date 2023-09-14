@extends('admin.adminmaster')
@section('content')
<div class="row">
            <div class="col-lg-6 bg-white mx-auto mt-5">
                <h4 class="text-success">{{ Session::get('message') }}</h4>
                <div class="card bg-white center">
                    <h4 class="card-header">All Press Events</h4>

                    <div class="card-body bg-white">

                        <div class="bg-white">
                            <form action="/brand-search" method="GET">
                                <div class="form-group row">
                                    <label class="col-md-6">
                                        <input type="text" class="form-control bg-white" name="query" value="Search"/>
                                    </label>
                                    <div class="col-md-6 ml-0">
                                        <span class="float-right col-md-6"><a href="/pressform" class="btn btn-success float-right">+Add</a></span>
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
                                    <th scope="col">Level</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Functonality</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($data as $event)
                                <tr>
                                    <th scope="row">{{$loop->iteration}}</th>
                                    <td>{{$event->level}}</td>
                                    <td>{{$event->description}}</td>
                                    <td><img src="{{asset('images/upload/'.$event->image)}}" width="70px" height="70px" alt="image"></td>
                                    <td>
                                        <a href="/edit/{{$event['id']}}" class="btn btn-success btn-sm">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a href="/delete/{{$event['id']}}" class="btn btn-danger btn-sm">
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