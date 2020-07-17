<form action="{{route('articles.create')}}" method="get">
    <button>create</button>
</form>
<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>name</th>
            <th>title</th>
            <th>content</th>
            <th>action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($articles as $value)
        <tr>
            <th>{{$value->id}}</th>
            <td>{{$value->name}}</td>
            <td>{{$value->title}}</td>
            <td>{{$value->content}}</td>
            <td>
                <form action="{{route('articles.show', $value->id)}}" method="get">
                    <button>show</button>
                </form>
                <form action="{{route('articles.destroy', $value->id)}}" method="post">
                    <input type="hidden" name="_method" value="delete">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <button>delete</button>
                </form>
                <form action="{{route('articles.edit', $value->id)}}" method="get">
                    <button>edit</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<style>
    td,
    tr,
    th {
        border: 1px solid deeppink;
    }
</style>