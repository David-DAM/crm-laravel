@extends('generals.base')
@section('title')Usuarios | Lista @endsection
@section('body')
    <div class="col-12">
        <div class="row">
            <table>
                <thead>
                    <th>Role</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Email</th>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{$user->role}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->lastname}}</td>
                            <td>{{$user->email}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection