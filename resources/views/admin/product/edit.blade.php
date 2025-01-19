@extends('admin.master')
@section('body')
    <!-- Basic Layout & Basic with Icons -->
    <div class="row">
        <!-- Basic Layout -->
        <div class="col-xxl">
            <div class="card mb-6">
                <div class="card-header d-flex align-items-center justify-content-between border-bottom">
                    <h5 class="mb-0">Add Product Form</h5> <small class="text-muted float-end">Default label</small>
                </div>
                <div class="card-body pt-5">
                    <p class="text-success text-center">{{session('message')}}</p>
                    <form action="{{route('product.update',['id' => $product->id])}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-4">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Category Name</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="category_id" onchange="getSubCategoryByCategory(this.value)">
                                    <option value=""> -- Select Product Category -- </option>
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}" @selected($category->id == $product->category_id)> {{$category->name}} </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Sub Category Name</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="sub_category_id" id="subCategory">
                                    <option value=""> -- Select Product Sub Category -- </option>
                                    @foreach($sub_categories as $sub_category)
                                        <option value="{{$sub_category->id}}" @selected($sub_category->id == $product->sub_category_id)>{{$sub_category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Brand Name</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="brand_id">
                                    <option value=""> -- Select Product Brand -- </option>
                                    @foreach($brands as $brand)
                                        <option value="{{$brand->id}}" @selected($brand->id == $product->brand_id)>{{$brand->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Unit Name</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="unit_id">
                                    <option value=""> -- Select Product Unit -- </option>
                                    @foreach($units as $unit)
                                        <option value="{{$unit->id}}" @selected($unit->id == $product->unit_id)> {{$unit->name}} </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Product Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control"  value=" {{$product->name}}" placeholder="Product Name" name="name"/>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Product Code</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control"  value="{{$product->code}}" placeholder="Product Code" name="code"/>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Product Price</label>
                            <div class="col-sm-10">
                                <div class="input-group">
                                    <input type="number" class="form-control" value="{{$product->regular_price}}" placeholder="Regular Price" name="regular_price"/>
                                    <input type="number" class="form-control" value="{{$product->selling_price}}" placeholder="Selling Price" name="selling_price"/>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Stock Amount</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" value="{{$product->stock}}" placeholder="Product Stock Amount" name="stock"/>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label class="col-sm-2" for="basic-default-company">Publication Status</label>
                            <div class="col-sm-10">
                                <label><input type="radio" name="status" value="1" {{$product->status==1?'checked':''}}/> Published</label>
                                <label><input type="radio" name="status" value="0" {{$product->status==0?'checked':''}}/> Unpublished</label>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label class="col-sm-2 col-form-label" for="basic-default-phone">Product Image</label>
                            <div class="col-sm-10">
                                <input type="file" name="image" class="form-control"/>
                                <img src="{{asset($product->image)}}" height="100" alt="img">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label class="col-sm-2 col-form-label" for="basic-default-phone">Product Other Image</label>
                            <div class="col-sm-10">
                                <input type="file" name="other_image[]" multiple class="form-control"/>
                                <div>
                                    @foreach($product->otherImage as $image)
                                        <img src="{{asset($image->image)}}" height="100" alt="img">
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label class="col-sm-2 col-form-label" for="basic-default-message">Short Description</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" name="short_description" placeholder="Short Description">{{$product->short_description}}</textarea>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label class="col-sm-2 col-form-label" for="basic-default-message">Long Description</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="summernote" name="long_description" placeholder="Long Description">{{$product->long_description}}</textarea>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label class="col-sm-2 col-form-label" for="basic-default-message">Meta Title</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" name="meta_title" placeholder="Meta Title">{{$product->meta_title}}</textarea>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label class="col-sm-2 col-form-label" for="basic-default-message">Meta Description</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" name="meta_description" placeholder="Meta Description">{{$product->meta_description}}</textarea>
                            </div>
                        </div>
                        <div class="row justify-content-end">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Update Product</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

