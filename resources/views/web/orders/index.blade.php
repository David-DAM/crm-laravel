@extends('generals.base')
@section('title')Pedidos | Lista @endsection
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
    <div class="col-6 m-3">
        <div class="row">
            <a type="button" class="btn btn-primary" href="{{ route('web.orders.create') }}">Crear</a>
        </div>
    </div>

    <div class="col-12 m-3">
        <div class="row">
            <table class="table table-hover ">
                <thead class="thead-dark">
                    <th scope="col">Estado</th>
                    <th scope="col">Usuario</th>
                    <th scope="col">Total</th>
                    <th scope="col">Dirección</th>
                    <th scope="col">Acciones</th>
                </thead>
                <tbody>
                    @foreach ($orders as $order)
                        <tr>
                            <td>{{$order->status}}</td>
                            <td>{{$order->user->fullname}}</td>
                            <td>{{$order->shoppingCart->total_price."€"}}</td>
                            <td>{{$order->address->full_direction}}</td>
                            <td>
                                <table>
                                    <tr>
                                        <td>
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editModal">Editar</button>
                                        </td>
                                        <td>
                                            <form action="{{ route('web.orders.sendEmail', $order->id) }}" method="post">
                                                @csrf
                                                <button type="submit" class="btn btn-primary">Enviar email</button>
                                            </form>
                                        </td>
                                    </tr>
                                </table>
                                
                            </td>
                            
                        </tr>

                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="d-flex justify-content-center">
        {{ $orders->links('pagination::bootstrap-4') }}
    </div>
@endsection