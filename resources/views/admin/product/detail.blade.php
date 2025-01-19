@extends('admin.master')

@section('body')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-datatable table-responsive pt-0">
                    <table class="table table-bordered table-hover">
                        <tr>
                            <th>Product Id </th>
                            <td>{{$product->id}}</td>
                        </tr>
                        <tr>
                            <th>Product Name  </th>
                            <td>{{$product->name}}</td>
                        </tr>
                        <tr>
                            <th>Product code </th>
                            <td>{{$product->code}}</td>
                        </tr>
                        <tr>
                            <th>Product Category </th>
                            <td>{{isset($product->category->name) ? $product->category->name : ''}}</td>
                        </tr>
                        <tr>
                            <th>Product Sub Category </th>
                            <td>{{isset($product->subCategory->name ) ? $product->subCategory->name  : ''}}</td>
                        </tr>
                        <tr>
                            <th>Product Brand </th>
                            <td>{{isset($product->brand->name ) ? $product->brand->name  : ''}}</td>
                        </tr>
                        <tr>
                            <th>Product Unit</th>
                            <td>{{isset($product->unit->name ) ? $product->unit->name : ' '}}</td>
                        </tr>
                        <tr>
                            <th>Product Regular price </th>
                            <td>{{$product->regular_price }}</td>
                        </tr>
                        <tr>
                            <th>Product Selling price</th>
                            <td>{{$product->selling_price }}</td>
                        </tr>
                        <tr>
                            <th>Product Stock Amount </th>
                            <td>{{$product->stock }}</td>
                        </tr>
                        <tr>
                            <th>Product Short Description </th>
                            <td>{{$product->short_description  }}</td>
                        </tr>
                        <tr>
                            <th>Product Long Description </th>
                            <td>{!! $product->long_description !!}</td>
                        </tr>
                        <tr>
                            <th>Product Image </th>
                            <td><img src="{{asset($product->image) }}" alt="" height="100"/></td>
                        </tr>
                        <tr>
                            <th>Product  Other Image </th>
                            <td>
                                @foreach($product->otherImage as $otherImage)
                                    <img src="{{asset($otherImage->image) }}" alt="" height="100">
                                @endforeach
                            </td>
                        </tr>
                        <tr>
                            <th>Product Meta Title </th>
                            <td>{{$product->meta_title }}</td>
                        </tr>
                        <tr>
                            <th>Product Meta Description </th>
                            <td>{{$product->meta_description }}</td>
                        </tr>
                        <tr>
                            <th>Product Total View   </th>
                            <td>{{$product->hit_count }}</td>
                        </tr>
                        <tr>
                            <th>Product Total Sale </th>
                            <td>123</td>
                        </tr>
                        <tr>
                            <th>Product Featured Status</th>
                            <td>123</td>
                        </tr>

                    </table>

                </div>
            </div>
        </div>
    </div>
@endsection

