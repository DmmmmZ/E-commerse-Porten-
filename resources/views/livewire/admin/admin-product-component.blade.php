<div class="main">
    <section class="container">
        <h2>All Products</h2>
        <div class="row">
        </div>
        <div class="">
            <div class="card-header">
            </div>
            <div>
                <div class="btn_right_form">
                    <a href="{{route('admin.product.add')}}" class="btn">Add New Product</a>
                    {{-- <a href="{{route('admin.category.add')}}" class="btn">Add New Category</a> --}}
                </div>
                <table class="admin__categories">
                    <thead>
                        @if(Session::has('message'))
                        <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                        @endif
                        <tr>
                            <th>#</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Stock</th>
                            <th>Price</th>
                            <th>Category</th>
                            <th>Date</th>
                            <th>Adction</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $i = ($products->currentPage()-1)*$products->perPage();
                        @endphp
                        @foreach ($products as $product)
                        <tr>
                            <td>{{++$i}}</td>
                            <td><img src="{{ asset('assets/img/products') }}/{{ $product->image }}" alt="{{$product->name}}"></td>
                            <td>{{$product->name}}</td>
                            <td>{{$product->stock_status}}</td>
                            <td>{{$product->regular_price}}</td>
                            <td>{{$product->category->name}}</td>
                            <td>{{$product->created_at}}</td>
                            <td>
                                <a href="{{route('admin.product.edit',['product_id'=>$product->id])}}" class="edit"><i class="fa-regular fa-pen-to-square"></i></a>
                                <a href="#" class="danger" style="margin-left: 20px" onclick="deleteProduct({{$product->id}})"><i class="fa-solid fa-trash-can"></i></a>
                            </td> 
                        </tr>
                            
                        @endforeach
                    </tbody>
                </table>
                {{$products->links()}}
            </div>
        </div>
    </section>
</div>
@push('scripts')
<script>
    function deleteProduct(id){
        @this.set('product_id',id);
        @this.call('deleteProduct');
        $('.danger').modal('hide');
    }
</script>
@endpush 