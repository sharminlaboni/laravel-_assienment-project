<x-masterdash>

    <div class="container">

        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"  style="text-align:center;"> order Details</h1>
        <a class="btn btn-success" href="{{route('order.index')}} "> List </a>

        </div>

        <table claas="table">
            <thead>
                <tr>

                    <th>SL#</th>
                    <th>Product</th></th>
                    <th>unit_price</th>
                    <th>unit_piece</th>
                    <th>delivery_date</th>



                </tr>
            </thead>
            <tbody>

                <tr>


                    <td>{{ $order->product}}</td>
                    <td>{{ $order->unit_price }}</td>
                    <td>{{ $order->unit_piece}}</td>
                    <td>{{ $order->delivery_date}}</td>





                </tr>

            </tbody>
        </table>

    </div>

</x-masterdash>




