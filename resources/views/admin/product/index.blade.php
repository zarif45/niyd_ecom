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
                            <th>code</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $product)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$product->name}}</td>
                            <td>{{$product->code}}</td>
                            <td><img src="{{asset($product->image)}}" alt="" height="50"></td>
                            <td>{{$product->status ==1 ? 'Published' : 'Unpublished'}}</td>
                            <td>
                                <a href="{{route('product.detail',['id' => $product->id])}}" class="btn btn-info btn-sm">detail</a>
                                <a href="{{route('product.edit',['id' => $product->id])}}" class="btn btn-success btn-sm">edit</a>
                                <a href="{{route('product.delete',['id' => $product->id])}}" onclick=" return confirm('Are you sure to delete this!')" class="btn btn-danger btn-sm">Delete</a>
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
