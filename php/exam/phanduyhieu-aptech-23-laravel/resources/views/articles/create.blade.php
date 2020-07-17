@extends('layout.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>CREATE ARTICLES</h1>
            <form action="{{route('articles.store')}}" method="post">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <div>
                    <label>Title</label>
                    <input type="text" name="title">
                </div>
                <div>
                    <label>Slug</label>
                    <input type="text" name="slug">
                </div>
                <div>
                    <label>Description</label>
                    <input type="text" name="description">
                </div>
                <div>
                    <label>Content</label>
                    <input type="text" name="content">
                </div>
                <button class="btn btn-outline-primary" type="submit">save</button>
            </form>
        </div>
    </div>
</div>
@endsection
