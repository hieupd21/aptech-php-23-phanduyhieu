@extends('layout.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <form action="{{route('articles.create')}}" method="get">
                <button class="btn btn-outline-primary mb-2">create</button>
            </form>
        </div>
        <div class="col-12">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th>#</th>
                        <th>title</th>
                        <th>description</th>
                        <th>action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($articles as $value)
                    <tr>
                        <th>{{$value->id}}</th>
                        <td>{{$value->title}}</td>
                        <td>{{$value->description}}</td>
                        <td class="d-flex justify-content-around align-items-center">
                            <form action="{{route('articles.show', $value->id)}}" method="get">
                                <button class="btn btn-outline-primary">
                                    <i class="far fa-eye fa-lg"></i>
                                </button>
                            </form>
                            <form action="{{route('articles.destroy', $value->id)}}" method="post">
                                <input type="hidden" name="_method" value="delete">
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <button class="btn btn-outline-danger">
                                    <i class="fas fa-trash fa-lg"></i>
                                </button>
                            </form>
                            <form action="{{route('articles.edit', $value->id)}}" method="get">
                                <button class="btn btn-outline-warning">
                                    <i class="fas fa-pen fa-lg"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection