<h1>CREATE USER</h1>
<form action="{{route('users.store')}}" method="post">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <div>
        <label>name</label>
        <input type="text" name="name">
    </div>
    <div>
        <label>email</label>
        <input type="email" name="email">
    </div>
    <div>
        <label>password</label>
        <input type="password" name="password">
    </div>
    <button type="submit">save</button>
</form>
<form action="{{route('users.index')}}" method="get">
    <button type="submit">back</button>
</form>