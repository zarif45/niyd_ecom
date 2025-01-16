@extends('admin.master')
@section('body')
    <!-- Basic Layout & Basic with Icons -->
    <div class="row">
        <!-- Basic Layout -->
        <div class="col-xxl">
            <div class="card mb-6">
                <div class="card-header d-flex align-items-center justify-content-between border-bottom">
                    <h5 class="mb-0">Edit Unit Form</h5> <small class="text-muted float-end">Default label</small>
                </div>
                <div class="card-body pt-5">
                    <p class="text-success text-center">{{session('message')}}</p>
                    <form action="{{route('unit.update', ['id' => $unit->id])}}" method="POST">
                        @csrf
                        <div class="row mb-4">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Unit Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" value="{{$unit->name}}" placeholder="Unit Name" name="name"/>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Unit Code</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" value="{{$unit->code}}" placeholder="Unit Code" name="code"/>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label class="col-sm-2 col-form-label">Publication Status</label>
                            <div class="col-sm-10">
                                <label><input type="radio" name="status" value="1" {{$unit->status == 1 ? 'checked' : '' }}/> Published </label>
                                <label><input type="radio" name="status" value="0" {{$unit->status == 0 ? 'checked' : '' }}/> Unpublished </label>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label class="col-sm-2 col-form-label" for="basic-default-message">Unit Description</label>
                            <div class="col-sm-10">
                                <textarea id="basic-default-message" class="form-control" name="description" placeholder="Unit Description">{{$unit->description}}</textarea>
                            </div>
                        </div>
                        <div class="row justify-content-end">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Update Unit Info</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
