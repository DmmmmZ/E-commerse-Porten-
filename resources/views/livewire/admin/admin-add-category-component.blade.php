<div class="main">
    <section class="container">
        <h2>Add New Category</h2>
        <div class="">
            <div class="btn_right_form">
                <a href="{{route('admin.categories')}}" class="btn">All Categories</a>
            </div>
            <div class="add-form">
                @if(Session::has('message'))
                <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                @endif
                <form wire:submit.prevent="storeCategory">
                    <div class="form_add">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" class="input_form" placeholder="Enter category name" wire:model="name" wire:keyup="genereteSlug">
                        @error('name')
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form_add">
                        <label for="slug" class="form-label">Slug</label>
                        <input type="text" name="slug" class="input_form" placeholder="Enter category slug" wire:model="slug">
                        @error('slug')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <button type="submit" class="btn_form">Submit</button>
                </form>
            </div>
        </div>
    </section>
</div>

