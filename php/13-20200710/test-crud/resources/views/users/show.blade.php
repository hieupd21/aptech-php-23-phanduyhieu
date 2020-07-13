<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>name</th>
            <th>email</th>
            <th>password</th>
            <th>action</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th>{{$user->id}}</th>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->password}}</td>
            <td>

            </td>
        </tr>
    </tbody>
</table>
<form action="/users" method="get">
    <button>back</button>
</form>

<style>
    th,
    tr,
    td {
        border: 1px solid orange;
    }
</style>