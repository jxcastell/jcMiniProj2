@extends('layouts.default')

@section('content')

    <div class="card mt-3 pl-2 pr-2">
        <div class="card-title">

            <h1>View Message page!</h1>

        </div><!-- end card-title -->

        <div class="card-body">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">Message</th>
                    <th scope="col">Delete Option</th>
                </tr>
                </thead>
                <tbody>
                <tr>

                    <td class="w-75">Sample Massage number 1</td>
                    <td class="w-25 border border-danger">
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </td>

                </tr>
                <tr>

                    <td class="w-75">Sample Massage number 2</td>
                    <td class="w-25 border border-danger">
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </td>

                </tr>
                <tr>

                    <td class="w-75">Sample Massage number 3</td>
                    <td class="w-25 border border-danger">
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </td>

                </tr>
                </tbody>
            </table>
        </div> <!-- end card-body -->
    </div> <!-- end card -->
@endsection