<x-masterdash>

    <div class="container">

        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"  style="text-align:center;"> Product Details</h1>
        <a class="btn btn-success" href="{{route('product.index')}} "> List </a>

        </div>

        <table claas="table">
            <thead>
                <tr>

                    <th>title</th>
                    <th>catagory</th>
                    <th>description</th>
                    <th>Active</th>


                    <th>image</th>
                    <th>color</th>
                    <th>price</th>



                </tr>
            </thead>
            <tbody>

                <tr>

                    <td>{{  $product->title }}</td>

                    <td>{{ $product->catagory->name  }}</td>

                    <td><p>{{ $product->description }}</p></td>

                    <td><p> {{ $product->is_active ? 'Yes' : 'No' }}</p></td>



                    <td><img src="{{ asset('storage/products/'.$product->image) }}" /></td>
                    <td> <p>Colors:
                        <ol>
                        @foreach($product->color as $color)
                            <li>{{ $color->title }}</li>
                        @endforeach
                        </ol>
                    </p>
                </td>
                <td>{{ $product?->price}}</td>



                </tr>

            </tbody>
        </table>

    </div>

</x-masterdash>




