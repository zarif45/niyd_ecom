@extends('admin.master')
@section('body')
    <!-- Basic Layout & Basic with Icons -->
    <div class="row">
        <!-- Basic Layout -->
        <div class="col-xxl">
            <div class="card mb-6">
                <div class="card-header d-flex align-items-center justify-content-between border-bottom">
                    <h5 class="mb-0">Edit Category Form</h5> <small class="text-muted float-end">Default label</small>
                </div>
                <div class="card-body pt-5">
                    <p class="text-center text-success">{{session('message')}}</p>
                    <form action="{{route('category.update', ['id' => $category->id])}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-4">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Category Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" value="{{$category->name}}" name="name" id="basic-default-name" placeholder="Category Name"/>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label class="col-sm-2 text-dark" for="basic-default-company">Publication Status</label>
                            <div class="col-sm-10">
                                <label> <input type="radio" name="status" {{$category->status == 1 ? 'checked' : ''}} value="1"/> Published </label>
                                <label> <input type="radio" name="status" {{$category->status == 0 ? 'checked' : ''}} value="0"/> Unpublished </label>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label class="col-sm-2 col-form-label" for="basic-default-phone">Category Image</label>
                            <div class="col-sm-10">
                                <input type="file" name="image" id="basic-default-phone" class="form-control"/>
                                <img src="{{asset($category->image)}}" alt="" height="100"/>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label class="col-sm-2 col-form-label" for="basic-default-message">Category Description</label>
                            <div class="col-sm-10">
                                <textarea id="basic-default-message" class="form-control" name="description" placeholder="Category Description">{{$category->description}}</textarea>
                            </div>
                        </div>
                        <div class="row justify-content-end">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Update Category Info</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
