<table>
    <tr>
        <th>id</th>
        <th>name</th>
        <th>age</th>
        <th>city</th>
        <th>created at</th>
    </tr>
    @foreach ($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->age }}</td>
            <td>{{ $user->city }}</td>
            <td>{{ $user->created_at }}</td>
        </tr>
    @endforeach
</table
