@extends('admin.adminmaster')
@section('content')

<div class="container">

    <div class="row">
        <div class="col-md-6 mx-auto">
            <div class="card" style="margin-top: 3rem;">
                <a href="/press" class="btn btn-secondary">Go Back to The Event List </a>
                <div class="card-header">Update Event Form</div>
                <div class="card-body">

                    <form action="/update" method="POST" enctype="multipart/form-data">
                        @csrf


                        <div style="background-color:green;">
                            @if(Session::get('success'))
                            <div style="color:black; margin: 1rem; ">
                                {{Session::get('success')}}
                            </div>
                            @endif

                            @if(Session::get('Fail'))
                            <div style="color: red;">
                                {{Session::get('Fail')}}
                            </div>
                            @endif
                        </div>
                        <div class="form-group row">
                            <div class="col-md-8">
                                <input type="hidden" class="form-control" name="id" value="{{$data->id}}" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label">Level</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="level" value="{{$data->level}}" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label">Descriptipn</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="description" value="{{$data->description}}" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label">Image</label>
                            <div class="col-md-8">
                                <input type="file" class="form-control" name="image" value="{{$data->image}}" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label"></label>
                            <div class="col-md-8">
                                <input type="submit" class="btn btn-success" value="Save" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection