<table class="table">
    <thead>
    <tr>
        @foreach ($rows['headers'] as $header)
            <th scope="col"> {{$header}} </th>
        @endforeach
    </tr>
    </thead>
    <tbody>
    @foreach ($rows['values'] as $rows)
        <tr>
            @foreach($rows as $value)
                <td>{{ $value }}</td>
            @endforeach
            <td>Edit</td>
            <td>Delete</td>
        </tr>
    @endforeach
    </tbody>
</table>