@extends('admin.adminmaster')
@section('content')

<div class="container">

    <div class="row">
        <div class="col-md-6 mx-auto">
            <div class="card" style="margin-top: 3rem;">
                <a href="/photo-list" class="btn btn-secondary">Go Back to The Photo List </a>
                <div class="card-header">Add Photo Form</div>
                <div class="card-body">
                   <form action="/addphoto" method="POST" enctype="multipart/form-data">
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
                            <label class="col-md-4 col-form-label">Name</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="name" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label">Image</label>
                            <div class="col-md-8">
                                <input type="file" class="form-control" name="image" />
                            </div>
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