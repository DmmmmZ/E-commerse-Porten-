<div class="main">
    <section class="container">
        <h2>All Slides</h2>
        <div class="row">
        </div>
        <div class="">
            <div class="card-header">
            </div>
            <div>
                <div class="btn_right_form">
                    <a href="{{route('admin.home.slide.add')}}" class="btn">Add New Slide</a>
                </div>
                <table class="admin__categories">
                    <thead>
                        @if(Session::has('message'))
                        <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                        @endif
                        <tr>
                            <th>#</th>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Sub Title</th>
                            <th>Offer</th>
                            <th>Link</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $i = 1;
                        @endphp
                        @foreach ($slides as $slide)
                        <tr>
                            <td>{{$i++}}</td>
                            <td><img src="{{asset('assets/img/slider')}}/{{$slide->image}}"></td>
                            <td>{{$slide->title}}</td>
                            <td>{{$slide->sub_title}}</td>
                            <td>{{$slide->offer}}</td>
                            <td>{{$slide->link}}</td>
                            <td>{{$slide->status == 1 ? 'Active':'Inactive'}}</td>
                            <td>
                                <a href="{{route('admin.home.slide.edit',['slide_id'=>$slide->id])}}" class="edit"><i class="fa-regular fa-pen-to-square"></i></a>
                                <a href="#" class="danger"  onclick="deleteSlide({{$slide->id}})"><i class="fa-solid fa-trash-can"></i></a>
                            </td>
                        </tr>
                            
                        @endforeach
                    </tbody>
                </table>
                {{-- {{$categories->links()}} --}}
            </div>
        </div>
    </section>
</div>
@push('scripts')
<script>
    function deleteSlide(id){
        @this.set('slide_id',id);
        @this.call('deleteSlide');
        $('.danger').modal('hide');
    }
</script>
@endpush 
