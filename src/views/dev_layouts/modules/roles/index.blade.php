@extends("crudbooster::dev_layouts.layout")
@section("content")


    <p>
        <a href="{{ action('DeveloperRolesController@getAdd') }}" class="btn btn-primary">Add Role</a>
    </p>

    <div class="box box-default">
        <div class="box-header">
            <h1 class="box-title">Show Data</h1>
        </div>
        <div class="box-body">
            <table class="table table-bordered datatable">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($result as $row)
                    <tr>
                        <td>{{ $row->name }}</td>
                        <td>
                            <a href="{{ action('DeveloperRolesController@getEdit',['id'=>$row->id]) }}" class="btn btn-warning btn-sm">Edit</a>
                            <a href="{{ action('DeveloperRolesController@getDelete',['id'=>$row->id]) }}" onclick="if(!confirm('Are you sure want to delete?')) return false" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>


@endsection