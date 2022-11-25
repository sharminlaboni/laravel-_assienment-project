<table>
    <thead>
        <tr>
            <th>SL#</th>
            <th>Title</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($colors as $color)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $color->title }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
