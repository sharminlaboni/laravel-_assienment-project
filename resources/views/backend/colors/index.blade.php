<x-masterdash>

    <div class="container">
        @if(session('message'))
        <span class="text-success">{{ session('message') }}</span>
        @endif
        <div class="btn-group me-2">
        <a href="{{ route('colors.pdf') }}">
            <button type="button" class="btn btn-sm btn-outline-secondary">PDF</button>
        </a>
            <a href="{{route('colors.trash')}}">
                <button type="button" class="btn btn-sm btn-outline-danger">Trash</button>
            </a>
        </div>


        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"  style="text-align:center;">Color List</h1>
        <a class="btn btn-success" href="{{route('colors.create')}} ">Add New Color </a>

       </div>




        <table class="table">
            <thead>
                <tr>
                    <th>SL#</th>
                    <th>title</th>
                    <th>color_code</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($colors as $color)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $color->title}}</td>
                    <td>{{ $color->color_code }}</td>


                    <td>
                    <a class="btn btn-sm btn-info" href="{{ route('colors.show', $color->id) }}">Show</a>
                    <a class="btn btn-sm btn-warning" href="{{ route('colors.edit', $color->id) }}">Edit</a>
                    <form action="{{ route('colors.destroy', $color->id) }}" method="post" style="display:inline">
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

