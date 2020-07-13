<form action="/users/create" method="get">
    <button>create</button>
</form>
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
        @foreach ($users as $value)
        <tr>
            <th>{{$value->id}}</th>
            <td>{{$value->name}}</td>
            <td>{{$value->email}}</td>
            <td>{{$value->password}}</td>
            <td>
                <form action="/users/{{$value->id}}" method="get">
                    <button>show</button>
                </form>
                <form action="/users/{{$value->id}}/edit" method="get">
                    <button>edit</button>
                </form>
                <form action="/users/{{$value->id}}" method="post">
                    <input type="hidden" name="_method" value="delete">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <button>delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<style>
    th,
    tr,
    td {
        border: 1px solid palevioletred;
    }
</style>