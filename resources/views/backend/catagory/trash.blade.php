<x-masterdash>
    <div class="container">
        @if(session('message'))
        <span class="text-success">{{ session('message') }}</span>
        @endif


        <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">PDF</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Excel</button>
            <a href="{{ route('catagories.index') }}">
                <button type="button" class="btn btn-sm btn-outline-info">List</button>
            </a>
        </div>


        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"  style="text-align:center;">Catagory List</h1>


       </div>




        <table class="table">
            <thead>
                <tr>
                    <th>SL#</th>
                    <th>name</th>
                    <th>image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($catagories as $catagory)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $catagory->name }}</td>
                    <td><img src="{{asset('storage/categories/' .$catagory->image)}}"/></td>

                    <td>
                        <a class="btn btn-success"href="{{ route('catagories.show', $catagory->id) }}">Show</a>
                        <a class="btn btn-primary" href="{{ route('catagories.restore', $catagory->id) }}"> restore </a>
                        <form action="{{ route('catagories.delete', $catagory->id) }}" method="post" style="display:inline">
                            @csrf
                            @method('delete')
                            <button class="btn btn-sm btn-danger">Delete</button>
                        </form>

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-masterdash>

