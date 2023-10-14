<div class="main">
    <section class="container">
        <h2>All Categories</h2>
        <div class="row">
        </div>
        <div class="">
            <div class="card-header">
            </div>
            <div>
                <div class="btn_right_form">
                    <a href="{{route('admin.category.add')}}" class="btn">Add New Category</a>
                </div>
                <table class="admin__categories">
                    <thead>
                        @if(Session::has('message'))
                        <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                        @endif
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Slug</th>
                            <th>Adction</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $i = ($categories->currentPage()-1)*$categories->perPage();
                        @endphp
                        @foreach ($categories as $category)
                        <tr>
                            <td>{{++$i}}</td>
                            <td>{{$category->name}}</td>
                            <td>{{$category->slug}}</td>
                            <td>
                                <a href="{{route('admin.category.edit',['category_id'=>$category->id])}}" class="edit"><i class="fa-regular fa-pen-to-square"></i></a>
                                <a href="#" class="danger" style="margin-left: 20px" onclick="deleteCategory({{$category->id}})"><i class="fa-solid fa-trash-can"></i></a>
                            </td>
                        </tr>
                            
                        @endforeach
                    </tbody>
                </table>
                {{$categories->links()}}
            </div>
        </div>
    </section>
</div>
@push('scripts')
<script>
    function deleteCategory(id){
        @this.set('category_id',id);
        @this.call('deleteCategory');
        $('.danger').modal('hide');
    }
</script>
@endpush 