<x-masterdash>
    <div class="container">
        @if(session('message'))
        <span class="text-success">{{ session('message') }}</span>
        @endif
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">

            <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group me-2">
                    <a href="{{ route('product.pdf') }}">
                    <button type="button" class="btn btn-sm btn-outline-secondary">PDF</button>
                    </a>

                    <button type="button" class="btn btn-sm btn-outline-secondary">Excel</button>
                    <a href="{{ route('product.trash') }}">
                        <button type="button" class="btn btn-sm btn-outline-danger">Trash</button>
                    </a>
                </div>



        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"  style="text-align:center;">Product List</h1>
        <a class="btn btn-success" href="{{route('product.create')}} ">Add New product </a>

       </div>




        <table class="table">
            <thead>
                <tr>
                    <th>SL#</th>
                    <th>title</th>
                    <th>catagory</th>
                    <th>image</th>

                    <th>description</th>
                      <th>Price</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $product->title }}</td>
                    <td>{{ $product->catagory?->name}}</td>
                    <td><img src="{{asset('storage/products/'.$product->image)}}" height="140" /></td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product?->price}}</td>

                    <td>
                        <a class="btn btn-success"href="{{route('product.show',$product->id) }}">Show</a>
                        <a class="btn btn-primary" href="{{route('product.edit',$product->id)}}"> Edit </a>
                        <form action="{{ route('product.view.destroy', $product->id) }}" method="post" style="display:inline">
                            @csrf
                            @method('delete')
                            <button class="btn btn-sm btn-danger" onclick="return confirm('Are you sure want to delete')">Delete</button>
                        </form>

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-masterdash>

