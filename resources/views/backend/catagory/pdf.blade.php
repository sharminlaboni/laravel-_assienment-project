<table>
    <thead>
        <tr>
            <th>SL#</th>
            <th>Title</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($catagories as $catagory)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $catagory->title }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
