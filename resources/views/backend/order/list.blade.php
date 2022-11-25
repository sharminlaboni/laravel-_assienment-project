<x-masterdash>
    <div class="container">

        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"  style="text-align:center;"> order List</h1>
        <a class="btn btn-success" href="">Add New order </a>

       </div>


        @if(session('message'))
        <span class="text-success">{{ session('message') }}</span>
        @endif

        <table class="table">
            <thead>
                <tr>
                    <th>SL#</th>
                    <th>Product</th></th>
                    <th>unit_price</th>
                    <th>unit_piece</th>
                    <th>delivery_date</th>


                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($orders as $order)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $order->product}}</td>
                    <td>{{ $order->unit_price }}</td>
                    <td>{{ $order->unit_piece}}</td>
                    <td>{{ $order->delivery_date}}</td>


                    <td>
                        <a class="btn btn-success"href="{{route('order.show', $order->id)}} ">Show</a>
                        <a class="btn btn-primary" href=" "> Edit </a>
                        <a class="btn btn-danger"href="{{route('order.delete', $order->id)}}">Delete</a>

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-masterdash>

