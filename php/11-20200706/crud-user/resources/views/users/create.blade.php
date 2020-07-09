<h1>Create Form</h1>
<form action="/users" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div>
        <label>Name</label>
        <input type="text" name="name">
    </div>
    <div>
        <label>Email</label>
        <input type="email" name="email">
    </div>
    <div>
        <label>Password</label>
        <input type="password" name="password">
    </div>
    <button>submit</button>
</form>