@extends('layout.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>EDIT ARTICLE</h1>
            <form action="{{route('articles.update', $article->id)}}" method="post">
                <input type="hidden" name="_method" value="patch">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <div>
                    <label>title</label>
                    <input type="text" name="title" value="{{$article->title}}">
                </div>
                <div>
                    <label>slug</label>
                    <input type="text" name="slug" value="{{$article->slug}}">
                </div>
                <div>
                    <label>description</label>
                    <input type="text" name="description" value="{{$article->description}}">
                </div>
                <div>
                    <label>content</label>
                    <input type="text" name="content" value="{{$article->content}}">
                </div>
                <button class="btn btn-outline-primary" type="submit">save</button>
            </form>
        </div>
    </div>
</div>
@endsection