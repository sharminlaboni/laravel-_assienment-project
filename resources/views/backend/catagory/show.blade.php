<x-masterdash>

    <div class="container">

        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"  style="text-align:center;">Catagory Details</h1>
        <a class="btn btn-success" href="{{route('catagories.index')}} "> List </a>

        </div>

        <table claas="table">
            <thead>
                <tr>

                    <th>name</th>
                    <th>image</th>

                </tr>
            </thead>
            <tbody>

                <tr>


                    <td>{{ $catagory->name }}</td>
                    <td><img src="{{asset('storage/categories/' .$catagory->image)}}"/></td>


                </tr>

            </tbody>
        </table>

    </div>

</x-masterdash>




