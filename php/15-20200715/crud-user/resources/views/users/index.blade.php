@extends('layout.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 d-flex justify-content-center">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th class="text-center">#</th>
                        <th class="text-center">name</th>
                        <th class="text-center">email</th>
                        <th class="text-center">action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $value)
                    <tr>
                        <th class="text-center">{{$value->id}}</th>
                        <td class="text-center">{{$value->name}}</td>
                        <td class="text-center">{{$value->email}}</td>
                        <td class="d-flex justify-content-around align-items-center">
                            <form action="{{route('users.show', $value->id)}}" method="get">
                                <button class="btn btn-outline-primary">
                                    <i class="far fa-eye fa-lg"></i>
                                </button>
                            </form>
                            <form action="{{route('users.destroy', $value->id)}}" method="post">
                                <input type="hidden" name="_method" value="delete">
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <button class="btn btn-outline-danger">
                                    <i class="fas fa-trash fa-lg"></i>
                                </button>
                            </form>
                            <form action="{{route('users.edit', $value->id)}}" method="get">
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