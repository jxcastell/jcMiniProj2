@extends('layouts.default')

@section('content')
    <div class="card mt-3 pl-2 pr-2">

        <div class="card-title">

            <h1>Log in page!</h1>

        </div><!-- end card-title -->

        <div class="card-body">

            <form>
                <div class="form-group row">
                    <label for="userName" class="col-sm-2 col-form-label">UserName</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="userName" placeholder="userName">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                    </div>
                </div>


                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Sign in</button>
                    </div>
                </div>
            </form>

        </div> <!-- end card-body -->
    </div> <!-- end card -->
@endsection