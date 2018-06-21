@extends('layouts.default')

@section('content')

    <div class="card mt-3 pl-2 pr-2">

        <div class="card-title">

            <h1>Sign-up page!</h1>

        </div><!-- end card-title -->

        <div class="card-body">
            <form>
                <div class="row">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="First name">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Last name">
                    </div>
                </div>

                <div class="form-group row mt-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword1" class="col-sm-2 col-form-label">Enter Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="passwordConfirm" class="col-sm-2 col-form-label">Confirm Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="passwordConfirm" placeholder="passwordConfirm">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Sign up</button>
                    </div>
                </div>
            </form>
        </div> <!-- end card-body -->
    </div> <!-- end card -->
@endsection