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
                            <th>Category</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($sub_categories as $sub_category)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{ isset($sub_category->category->name) ? $sub_category->category->name : '' }}</td>
                            <td>{{$sub_category->name}}</td>
                            <td>{{$sub_category->description}}</td>
                            <td><img src="{{asset($sub_category->image)}}" alt="" height="50"/></td>
                            <td>{{$sub_category->status}}</td>
                            <td>
                                <a href="{{route('sub-category.edit', ['id' => $sub_category->id])}}" class="btn btn-success btn-sm">
                                    Edit
                                </a>
                                <a href="{{route('sub-category.delete', ['id' => $sub_category->id])}}" class="btn btn-danger btn-sm">
                                    Delete
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
@endsection
