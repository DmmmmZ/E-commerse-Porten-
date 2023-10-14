<div class="main">
    <section class="container">
        <h2>Add New Slide</h2>
        <div class="">
            <div class="btn_right_form">
                <a href="{{route('admin.home.slider')}}" class="btn">All Slides</a>
            </div>
            <div class="add-form">
                @if(Session::has('message'))
                <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                @endif
                <form wire:submit.prevent="addSlide">
                    <div class="form_add">
                        <label class="form-label">Title</label>
                        <input type="text" class="input_form" placeholder="Enter slide title" wire:model="title">
                        @error('title')
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form_add">
                        <label class="form-label">Sub title</label>
                        <input type="text" class="input_form" placeholder="Enter slide sub title" wire:model="sub_title">
                        @error('sub_title')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form_add">
                        <label class="form-label">Offer</label>
                        <input type="text" class="input_form" placeholder="Enter offer" wire:model="offer">
                        @error('offer')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form_add">
                        <label class="form-label">Link</label>
                        <input type="text" class="input_form" placeholder="Enter slide link" wire:model="link">
                        @error('link')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form_add">
                        <label class="form-label">Status</label>
                        <select class="input_form" wire:model="status">
                            <option value="1">Active</option>
                            <option value="0">InActive</option>
                        </select>
                        @error('status')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form_add">
                        <label class="form-label">Image</label>
                        <input type="file" class="input_form" wire:model="image">
                        @if($image)
                        <img src="{{$image->temporaryUrl()}}">
                        @endif
                        @error('image')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <button type="submit" class="btn_form">Submit</button>
                </form>
            </div>
        </div>
    </section>
</div>
