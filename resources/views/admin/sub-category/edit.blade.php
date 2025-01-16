@extends('admin.master')
@section('body')
    <!-- Basic Layout & Basic with Icons -->
    <div class="row">
        <!-- Basic Layout -->
        <div class="col-xxl">
            <div class="card mb-6">
                <div class="card-header d-flex align-items-center justify-content-between border-bottom">
                    <h5 class="mb-0">Add Sub Category Form</h5> <small class="text-muted float-end">Default label</small>
                </div>
                <div class="card-body pt-5">
                    <p class="text-success">{{session('message')}}</p>
                    <form action="{{route('sub-category.update', ['id' => $sub_category->id])}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-4">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Category Name</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="category_id">
                                    <option value=""> -- Select Category -- </option>
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}" @selected($category->id == $sub_category->category_id)> {{$category->name}} </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label class="col-sm-2 col-form-label" for="">Sub Category Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" value="{{$sub_category->name}}" id="" placeholder="Sub Category Name" name="name"/>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label class="col-sm-2 text-dark" for="basic-default-company">Publication Status</label>
                            <div class="col-sm-10">
                                <label> <input type="radio" name="status" {{$sub_category->status == 1 ? 'checked' : ''}}  value="1"/> Published </label>
                                <label> <input type="radio" name="status" {{$sub_category->status == 0 ? 'checked' : ''}} value="0"/> Unpublished </label>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label class="col-sm-2 col-form-label" for="basic-default-phone">Sub Category Image</label>
                            <div class="col-sm-10">
                                <input type="file" id="basic-default-phone" name="image" class="form-control phone-mask"/>
                                <img src="{{asset($sub_category->image)}}" alt="" height="100"/>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label class="col-sm-2 col-form-label" for="basic-default-message">Sub Category Description</label>
                            <div class="col-sm-10">
                                <textarea id="basic-default-message" class="form-control" placeholder="Sub Category Description" name="description">{{$sub_category->description}}</textarea>
                            </div>
                        </div>
                        <div class="row justify-content-end">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Update Sub Category Info</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
