@extends('dashboard.dashboard_master')
@section('page_title')
    List Category
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">Search Here</div>
                    <div class="card-body">
                        <form action="" method="GET">
                            <select name="category_id" class="form-control">
                                <option value="">--Select One--</option>
                                @foreach ( $categories as $category)

                                <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                @endforeach

                            </select><br>
                            <input name="sub_category_name" type="text" class="form-control" placeholder="search subcategory">
                           <br> <button type="submit" class="btn btn-success">Search</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card p-2">
                    <div class="card-header">
                        List Product
                    </div>
                    @if (session('success'))
                    <div class="alert alert-info">
                        {{ session('success') }}
                    </div>
                    @endif
                    <table class="table table-striped table-inverse table-border">
                        <thead class="thead-inverse">
                         <h3>Product list : {{ $products->count()}}</h3>
                            <tr>
                                <th>Product Name</th>
                                <th>Category Name</th>
                                <th>Sub Category Name</th>
                                <th>Product photo</th>
                                <th>Product regular price</th>
                                <th>Product Sku</th>
                                {{-- <th>Product Barcode</th> --}}
                                <th>Product QR code</th>
                                <th>Action</th>

                            </tr>
                            </thead>
                            <tbody>
                                @forelse ($products as $product)
                                <tr>
                                    <td>{{$product->product_name}}</td>
                                    <td>
                                        {{ $product->relationwithcategory->category_name }}
                                        {{-- {{App\Models\category::find($product->category_id)->category_name}} --}}
                                    </td>
                                    <td>
                                        {{ $product->relationwithsubcategory->subcategory_name }}

                                        {{-- {{App\Models\subcategory::find($product->subcategory_id)->subcategory_name}} --}}
                                    </td>

                                    <td>
                            <img class="w-100" src="{{ asset('uploads/product_thumbnail_photo') }}/{{ $product->product_thumbnail_photo}}" alt="not found">

                                    </td>
                                    <td>{{ $product->product_regular_price }}</td>
                                    <td>{{ $product->product_sku }}</td>

                                    {{-- <td>{!! DNS1D::getBarcodeSVG( $product->product_sku , 'C39') !!}</td> --}}
                                    <td>{!! DNS2D::getBarcodeHTML($product->product_sku, 'QRCODE',3,3,'red') !!}</td>

                                        {{-- <td>
                                            <a class="btn btn-info btn-sm" href="{{ route('product.edit',$product->id ) }}">Edit</a>
                                        </td> --}}

                                    {{-- <td> <a class="btn btn-success" href="{{ route('category.show',$category->id ) }}">show details</a></td>
                                    <td> <a class="btn btn-info" href="{{ route('category.edit',$category->id ) }}">Edit</a></td> --}}
                                  <td>
                                        <form action="{{ route('product.destroy',$product->id ) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                                        </form>
                                   </td>
                                   <td>
                                   <a class="btn btn-info btn-sm" href="{{ route ('product.add.inventory',$product->id)}}">Add Inventory</a>
                                </td>
                                <td>
                                    <a class="btn btn-primary btn-sm" href="{{ route ('product.add.gallery',$product->id)}}">Add Gallery</a>
                                </td>
                                   {{-- <td> <form action="{{ route('category.harddelete',$category->id ) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit">Hard Delete</button>
                                </form>
                               </td> --}}



                                </tr>
                                @empty

                                @endforelse

                            </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>


@endsection
