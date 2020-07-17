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
                        <th class="text-center">password</th>
                        <th class="text-center">action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th class="text-center">{{$user->id}}</th>
                        <td class="text-center">{{$user->name}}</td>
                        <td class="text-center">{{$user->email}}</td>
                        <td class="text-center">{{$user->password}}</td>
                        <td class="d-flex justify-content-around align-items-center">
                            <form action="{{route('users.destroy', $user->id)}}" method="post">
                                <input type="hidden" name="_method" value="delete">
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <button class="btn btn-outline-danger">
                                    <i class="fas fa-trash fa-lg"></i>
                                </button>
                            </form>
                            <form action="{{route('users.edit', $user->id)}}" method="get">
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