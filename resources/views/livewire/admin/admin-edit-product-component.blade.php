<div class="main">
    <section class="container">
        <h2>Edit Product</h2>
        <div class="">
            <div class="btn_right_form">
                <a href="{{route('admin.products')}}" class="btn">All Products</a>
            </div>
            <div class="add-form">
                @if(Session::has('message'))
                <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                @endif
                <form wire:submit.prevent="updateProduct">
                    <div class="form_add">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" class="input_form" placeholder="Enter product name" wire:model="name" wire:keyup="genereteSlug">
                        @error('name')
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form_add">
                        <label for="slug" class="form-label">Slug</label>
                        <input type="text" name="slug" class="input_form" placeholder="Enter product slug" wire:model="slug">
                        @error('slug')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form_add">
                        <label for="short_description" class="form-label">Short Description</label>
                        <textarea name="short_description" class="input_form" placeholder="Enter Short Description" wire:model="short_description"></textarea>
                        @error('short_description')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form_add">
                        <label for="description" class="form-label">Description</label>
                        <textarea name="description" class="input_form" placeholder="Enter Description" wire:model="description"></textarea>
                        @error('description')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form_add">
                        <label for="regular_price" class="form-label">Regular Price</label>
                        <input type="text" name="regular_price" class="input_form" placeholder="Enter regular price" wire:model="regular_price">
                        @error('regular_price')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form_add">
                        <label for="sale_price" class="form-label">Sale Price</label>
                        <input type="text" name="sale_price" class="input_form" placeholder="Enter sale price" wire:model="sale_price">
                        @error('sale_price')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form_add">
                        <label for="sku" class="form-label">SKU</label>
                        <input type="text" name="sku" class="input_form" placeholder="Enter sku" wire:model="sku">
                        @error('sku')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form_add">
                        <label for="stock_status" class="form-label" wire:model="stock_status">Stock Status</label>
                        <select class="input_form" name="stock_status">
                            <option value="instock">InStock</option>
                            <option value="outofstock">Out ot Stock</option>
                        </select>
                        @error('stock_status')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form_add">
                        <label for="featured" class="form-label" wire:model="featured">Featured</label>
                        <select class="input_form" name="featured">
                            <option value="0">No</option>
                            <option value="1">Yes</option>
                        </select>
                        @error('featured')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form_add">
                        <label for="quantity" class="form-label">Quantity</label>
                        <input type="text" name="quantity" class="input_form" placeholder="Enter Quantity" wire:model="quantity">
                        @error('quantity')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form_add">
                        <label for="newimage" class="form-label">Image</label>
                        <input type="file" name="newimage" class="input_form" wire:model="newimage">
                        @if($newimage)
                        <img src="{{$newimage->temporaryUrl()}}"> 
                        @else
                        <img src="{{asset('assets/img/products')}}/{{$image}}"> 
                        @endif
                        @error('newimage')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form_add">
                        <label for="category_id" class="form-label">Category</label>
                        <select class="input_form" name="category_id" wire:model="category_id">
                            <option value="">Select Category</option>
                            @foreach ($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>                                
                            @endforeach
                        </select>
                        @error('category_id')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>

                    <button type="submit" class="btn_form">Update</button>
                </form>
            </div>
        </div>
    </section>
</div>