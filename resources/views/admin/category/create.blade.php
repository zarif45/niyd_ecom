@extends('admin.master')
@section('body')
    <!-- Basic Layout & Basic with Icons -->
    <div class="row">
        <!-- Basic Layout -->
        <div class="col-xxl">
            <div class="card mb-6">
                <div class="card-header d-flex align-items-center justify-content-between border-bottom">
                    <h5 class="mb-0">Add Category Form</h5> <small class="text-muted float-end">Default label</small>
                </div>
                <div class="card-body pt-5">
                    <p class="text-center text-success">{{session('message')}}</p>
                    <form action="{{route('category.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-4">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Category Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="name" id="basic-default-name" placeholder="Category Name"/>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label class="col-sm-2 text-dark" for="basic-default-company">Publication Status</label>
                            <div class="col-sm-10">
                                <label> <input type="radio" name="status" checked value="1"/> Published </label>
                                <label> <input type="radio" name="status" value="0"/> Unpublished </label>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label class="col-sm-2 col-form-label" for="basic-default-phone">Category Image</label>
                            <div class="col-sm-10">
                                <input type="file" name="image" id="basic-default-phone" class="form-control"/>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label class="col-sm-2 col-form-label" for="basic-default-message">Category Description</label>
                            <div class="col-sm-10">
                                <textarea id="basic-default-message" class="form-control" name="description" placeholder="Category Description"></textarea>
                            </div>
                        </div>
                        <div class="row justify-content-end">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Create New Category</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
