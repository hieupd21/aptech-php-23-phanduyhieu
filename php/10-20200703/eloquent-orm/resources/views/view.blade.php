<table class="table">
    <thead>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>email</th>
            <th>password</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $value)
        <tr>
            <th>{{ $value->id }}</th>
            <td>{{ $value->name }}</td>
            <td>{{ $value->email }}</td>
            <td>{{ $value->password }}</td> 
        </tr>
        @endforeach
    </tbody>
</table>