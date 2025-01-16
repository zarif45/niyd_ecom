@extends('admin.master')

@section('body')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-datatable table-responsive pt-0">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>SL</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Code</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($units as $unit)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$unit->name}}</td>
                            <td>{{$unit->description}}</td>
                            <td>{{$unit->code}}</td>
                            <td>{{$unit->status == 1 ? 'Published' : 'Unpublished'}}</td>
                            <td>
                                <a href="{{route('unit.edit', ['id' => $unit->id])}}" class="btn btn-success btn-sm">Edit</a>
                                <a href="{{route('unit.delete', ['id' => $unit->id])}}" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
