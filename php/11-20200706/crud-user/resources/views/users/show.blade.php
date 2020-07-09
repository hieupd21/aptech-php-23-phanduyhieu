<div class="m-auto">
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>name</th>
                <th>email</th>
                <th>password</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>{{ $user -> id}}</th>
                <td>{{ $user -> name}}</td>
                <td>{{ $user -> email }}</td>
                <td>{{ $user -> password}}</td>
            </tr>
        </tbody>
    </table>
    <a href="/users">Back</a>
</div>

<style>
    td,tr,th {
        border: 1px solid black;
    }
</style>