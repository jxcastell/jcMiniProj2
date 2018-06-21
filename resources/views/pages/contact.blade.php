@extends('layouts.default')

@section('content')

    <div class="card mt-3 pl-2 pr-2">

        <div class="card-title">

            <h1>contact page!</h1>
            <p class="lead">Please contact site owner.</p>
        </div><!-- end card-title -->

        <div class="card-body">

            <form action="/contact" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input name="email" type="email" class="form-control" id="email" placeholder="name@example.com">
                </div>

                <div class="form-group">
                    <label for="body">Message</label>
                    <textarea name="body" class="form-control" id="body" rows="3"></textarea>

                </div>
                <button class="btn btn-primary" type="submit">Button</button>
            </form>
        </div> <!-- end card-body -->
    </div> <!-- end card -->
@endsection