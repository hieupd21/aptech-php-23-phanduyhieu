<h1>EDIT USER {{$user->id}}</h1>
<form action="/users/{{$user->id}}" method="post">
    <input type="hidden" name="_method" value="patch">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <div>
        <label>Name</label>
        <input type="text" name="name" value="{{$user->name}}">
    </div>
    <div>
        <label>email</label>
        <input type="email" name="email" value="{{$user->email}}">
    </div>
    <div>
        <label>password</label>
        <input type="password" name="password" value="{{$user->password}}">
    </div>
    <button>edit</button>
</form>
<form action="/users" method="get">
    <button>back</button>
</form>