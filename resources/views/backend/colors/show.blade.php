<x-masterdash>

    <div class="container">

        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"  style="text-align:center;">Color Details</h1>
        <a class="btn btn-success" href="{{route('colors.index')}} "> List </a>

        </div>

        <table claas="table">
            <thead>
                <tr>

                    <th>title</th>
                    <th>color_code</th>

                </tr>
            </thead>
            <tbody>

                <tr>


                    <td>{{ $color->title }}</td>
                    <td><div style="background-color: {{$color->color_code}}">{{ $color->color_code }}</div></td>


                </tr>

            </tbody>
        </table>

    </div>

</x-masterdash>




