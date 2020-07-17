<div class="container">
    <div class="row">
        <div class="col-4 py-2">
            <form action="{{route('users.index')}}" method="get">
                <button class="btn btn-outline-success">Manager User</button>
            </form>
        </div>
        <div class="col-8 py-2 text-right">
            <form action="{{route('users.create')}}" method="get">
                <button class="btn btn-outline-info">create</button>
            </form>
        </div>
    </div>
</div>