@extends('generals.base')
@section('title')Usuarios | Lista @endsection
@section('body')
    @if (session('success')==true)
        <div class="alert alert-primary alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                <span class="sr-only">Close</span>
            </button>
            <strong>{{session('message')}}</strong>
        </div>
    @endif
    <div class="col-12 m-3">
        <div class="row">
            <table class="table table-hover">
                <thead class="thead-dark">
                    <th scope="col">Role</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellidos</th>
                    <th scope="col">Email</th>
                    <th scope="col">Acciones</th>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{$user->roles->name}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->lastname}}</td>
                            <td>{{$user->email}}</td>
                            <form method="POST" action="{{ route('web.users.destroy',$user->id) }}">
                                @method('DELETE')
                                @csrf
                                <td><button type="submit" class="btn btn-danger">Eliminar</button></td>
                            </form>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection