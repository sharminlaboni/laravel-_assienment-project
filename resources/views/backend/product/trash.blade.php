<x-masterdash>
    <div class="container">
        @if(session('message'))
        <span class="text-success">{{ session('message') }}</span>
        @endif


        <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">PDF</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Excel</button>
            <a href="{{ route('product.index') }}">
                <button type="button" class="btn btn-sm btn-outline-info">List</button>
            </a>
        </div>


        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"  style="text-align:center;">Product List</h1>


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
                    <a class="btn btn-sm btn-info" href="{{ route('product.show', $product->id) }}">Show</a>
                    <a class="btn btn-sm btn-warning" href="{{ route('product.restore', $product->id) }}">Restore</a>
                    <form action="{{ route('product.delete', $product->id) }}" method="post" style="display:inline">
                        @csrf
                        @method('delete')
                        <button class="btn btn-sm btn-danger" onclick="return confirm('Are you sure want to delete')" title="Permanent Delete">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</x-master>
