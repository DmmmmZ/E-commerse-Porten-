<div class="main">
    <div class="grid-container">
        @php
            $i = 1;
        @endphp
        @foreach ($products as $product)
            <div class="post-{{ $i++ }}">
                <img src="{{ asset('assets/img/products') }}/{{ $product->image }}" alt="{{ $product->name }}">
            </div>
        @endforeach
        {{--<div class="post-1">
            <img src="{{asset('assets/img/product/1-1.jpg')}}" alt="">
        </div> 
        <div class="post-2">
            <img src="{{asset('assets/img/product/1-2.jpg')}}" alt="">
        </div>
        <div class="post-3">
            <img src="{{asset('assets/img/product/1-3.jpg')}}" alt="">
        </div>
        <div class="post-4">
            <img src="{{asset('assets/img/product/1-4.jpg')}}" alt="">
        </div>
        <div class="post-5">
            <img src="{{asset('assets/img/product/1-5.jpg')}}" alt="">
        </div>
        <div class="post-6">
            <img src="{{asset('assets/img/product/1-6.jpg')}}" alt="">
        </div>
        <div class="post-7">
            <img src="{{asset('assets/img/product/1-7.jpg')}}" alt="">
        </div>
        <div class="post-8">
            <img src="{{asset('assets/img/product/1-8.jpg')}}" alt="">
        </div>
        <div class="post-9">
            <img src="{{asset('assets/img/product/1-9.jpg')}}" alt="">
        </div>
        <div class="post-10">
            <img src="{{asset('assets/img/product/1-10.jpg')}}" alt="">
        </div>
        <div class="post-11">
            <img src="{{asset('assets/img/product/1-11.jpg')}}" alt="">
        </div>
        <div class="post-12">
            <img src="{{asset('assets/img/product/1-12.jpg')}}" alt="">
        </div>
        <div class="post-13">
            <img src="{{asset('assets/img/product/1-13.jpg')}}" alt="">
        </div>
        <div class="post-14">
            <img src="{{asset('assets/img/product/1-14.jpg')}}" alt="">
        </div>
        <div class="post-15">
            <img src="{{asset('assets/img/product/1-15.jpg')}}" alt="">
        </div>
        <div class="post-16">
            <img src="{{asset('assets/img/product/1-16.jpg')}}" alt="">
        </div>
        <div class="post-17">
            <img src="{{asset('assets/img/product/1-17.jpg')}}" alt="">
        </div>
        <div class="post-18">
            <img src="{{asset('assets/img/product/1-18.jpg')}}" alt="">
        </div> --}}
    </div>
</div>
