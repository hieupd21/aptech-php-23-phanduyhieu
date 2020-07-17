<form action="{{route('articles.index')}}" method="get">
    <button>Home</button>
</form>
<form action="{{route('articles.update',$article->id)}}" method="post">
    <input type="hidden" name="_method" value="patch">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <div>
        <label>Name</label>
        <input type="text" name="name" value="{{$article->name}}">
    </div>
    <div>
        <label>Title</label>
        <input type="text" name="title" value="{{$article->title}}">
    </div>
    <div>
        <label for="description">Content</label>
        <textarea rows="5" cols="50" id="content" name="content" value="{{$article->content}}"></textarea>
    </div>
    <div>
        <label for="categories">Categories:</label>
        <select name="category" id="categories">
            @foreach($categories as $category)
            <option>{{$category}}</option>
            @endforeach
        </select>
    </div>
    <button>Save</button>
</form>

<script src="https://cdn.ckeditor.com/ckeditor5/20.0.0/classic/ckeditor.js"></script>
<script>
    ClassicEditor
            .create( document.querySelector( '#content' ) )
            .catch( error => {
                console.error( error );
            } );
</script>