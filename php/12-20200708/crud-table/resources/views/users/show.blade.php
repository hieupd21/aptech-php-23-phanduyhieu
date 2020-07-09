<table class="table">
    <thead>
        <tr>
            <th>id</th>
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
            <td style="display: flex">
                <form action="/users/{{$user->id}}" method="post">
                    <input type="hidden" name="_method" value="delete">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <button>delete</button>
                </form>
                <form action="/users/{{$user->id}}/edit" method="get">
                    <button>edit</button>
                </form>
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
        border: 1px solid red;
        word-break: break-all;
    }
</style>