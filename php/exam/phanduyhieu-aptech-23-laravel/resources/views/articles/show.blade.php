@extends('layout.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 d-flex justify-content-center">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th class="text-center">#</th>
                        <th class="text-center">title</th>
                        <th class="text-center">description</th>
                        <th class="text-center">content</th>
                        <th class="text-center">action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th class="text-center">{{$article->id}}</th>
                        <td class="text-center">{{$article->title}}</td>
                        <td class="text-center">{{$article->description}}</td>
                        <td class="text-center">{{$article->content}}</td>
                        <td class="d-flex justify-content-around align-items-center">
                            <form action="{{route('articles.destroy', $article->id)}}" method="post">
                                <input type="hidden" name="_method" value="delete">
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <button class="btn btn-outline-danger">
                                    <i class="fas fa-trash fa-lg"></i>
                                </button>
                            </form>
                            <form action="{{route('articles.edit', $article->id)}}" method="get">
                                <button class="btn btn-outline-warning">
                                    <i class="fas fa-pen fa-lg"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection