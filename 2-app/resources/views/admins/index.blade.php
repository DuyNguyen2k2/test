@extends('admins/master')

@section('content')

@if($message = Session::get('success'))

<div class="alert alert-success">
    {{ $message }}
</div>

@endif

<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col col-md-6"><b>Employee Data</b></div>
            <div class="col col-md-6">
                <a href="" class="btn btn-success btn-sm float-end">Add</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <tr>
                <th>id</th>
                <th>Name</th>
                <th>Position</th>
                <th>Salary</th>
                <th>Department</th>
            </tr>
            @if(count($data) > 0)
            
                @foreach($data as $row)

                    <tr>
                        <td>{{ $row->id}}</td>
                        <td>{{ $row->name }}</td>
                        <td>{{ $row->position }}</td>
                        <td>{{ $row->salary }}</td>
                        <td>{{ $row->department }}</td>
                        <td>
                            <form method="post" action="">
                                @csrf
                                @method('DELETE')
                                <a href="" class="btn btn-primary btn-sm">View</a>
                                <a href="" class="btn btn-warning btn-sm">Edit</a>
                                <input type="submit" class="btn btn-danger btn-sm" value="Delete" />
                            </form>

                        </td>
                    </tr>

                @endforeach

            @else
                <tr>
                    <td colspan="5" class="text-center">No Data Found</td>
                </tr>
            @endif
        </table>  
    </div>
</div>

@endsection