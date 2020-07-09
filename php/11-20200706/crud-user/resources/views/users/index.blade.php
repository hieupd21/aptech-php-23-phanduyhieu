<div class="m-auto">
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>name</th>
                <th>email</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <th>{{ $user -> id }}</th>
                <td>{{ $user -> name}}</td>
                <td>{{ $user -> email }}</td>
                <td>
                    <form action="/users/{{$user-> id}}" method="get">
                        <button>show</button>
                    </form>
                    {{-- <a href="/users/{{$user -> id}}">show</a> --}}
                    <form action="users/{{$user-> id}}" method="post">
                        <input type="hidden" name="_method" value="delete">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button>delete</button>
                    </form>
                    <form action="users/{{$user-> id}}/edit" method="get">
                        <button>edit</button>
                    </form>
                </td>
            </tr>
            @endforeach
            <form action="/users/create" method="get">
                <button>create</button>
            </form>
        </tbody>
    </table>
</div>

<style>
    td,tr,th {
        border: 1px solid black;
    }
</style>