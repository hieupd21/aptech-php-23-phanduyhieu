<h1>Create user</h1>
<form action="/users" method="post">
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
    <button>submit</button>
</form>
<form action="/users" method="get">
    <button>back</button>
</form>