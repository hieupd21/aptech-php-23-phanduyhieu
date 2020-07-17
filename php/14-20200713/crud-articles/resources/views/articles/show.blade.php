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
        <tr>
            <th>{{$article->id}}</th>
            <td>{{$article->name}}</td>
            <td>{{$article->title}}</td>
            <td>{{$article->content}}</td>
            <td>
                <form action="{{route('articles.destroy', $article->id)}}" method="post">
                    <input type="hidden" name="_method" value="delete">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <button>delete</button>
                </form>
                <form action="{{route('articles.edit', $article->id)}}" method="get">
                    <button>edit</button>
                </form>
            </td>
        </tr>
    </tbody>
</table>

<style>
    td,tr,th {
        border: 1px solid slateblue;
    }
</style>