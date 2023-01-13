@extends('generals.base')
@section('title')Pedidos | Crear @endsection
@section('body')
    
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#productos" role="tab" aria-controls="home"
            aria-selected="true">Productos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#direccion" role="tab" aria-controls="profile"
            aria-selected="false">Dirección</a>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade" id="productos" role="tabpanel" aria-labelledby="profile-tab">
            <div class="card">
                <div class="card-body">
                    <div class="row m-3">
                        <div class="col-5 m-3">
                            <table class="table table-hover">
                                <thead class="thead-dark">
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Descripción</th>
                                    <th scope="col">Precio</th>
                                    <th scope="col">Acciones</th>
                                </thead>
                                <tbody id="sourceTable">
                                    @foreach ($products as $key=> $product)
                                        <tr id="{{$key}}">
                                            <td>{{$product->name}}</td>
                                            <td>{{$product->description}}</td>
                                            <td>{{$product->price."€"}}</td>
                                            <td>
                                                <button type="button" class="btn btn-primary" onclick="moveRow({{ $key }})">Añadir</button>
                                            </td>
                                            
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div id="paginate" style="padding-left: 30%;padding-bottom: 5%"></div>
                        </div>
                        <div class="col-5 m-3">
                            <table  class="table table-hover">
                                <thead class="thead-dark">
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Descripción</th>
                                    <th scope="col">Precio</th>
                                    <th scope="col">Acciones</th>
                                </thead>
                                <tbody id="targetTable">
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>            
                    
    <button type="submit" class="btn btn-primary">Crear</button>
        
    <script src="{{asset('js/web/orders/create.js')}}"></script>
   
@endsection