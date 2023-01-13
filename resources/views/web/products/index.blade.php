@extends('generals.base')
@section('title')Productos | Lista @endsection
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
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createModal">Crear</button>
        </div>
    </div>

    @include('web.products._sections.createModal',['categories'=>$categories])

    <div class="col-12 m-3">
        <div class="row">
            <table class="table table-hover">
                <thead class="thead-dark">
                    <th scope="col">Nombre</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Imagen</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Acciones</th>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td>{{$product->name}}</td>
                            <td>{{$product->description}}</td>
                            <td>{{$product->price}}</td>
                            <td>
                                <img src="{{ asset('images/'.$product->image) }}" width="50" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="{{$product->name}}">
                            </td>
                            <td>{{$product->category->name}}</td>
                            <td>
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal{{$product->id}}">Eliminar</button>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editModal">Editar</button>
                            </td>
                            
                        </tr>

                        @include('web.products._sections.deleteModal',['product'=>$product])

                        @include('web.products._sections.editModal',['product'=>$product,'categories'=>$categories])

                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="d-flex justify-content-center">
        {{ $products->links('pagination::bootstrap-4') }}
    </div>
@endsection