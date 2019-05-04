@extends('master')

@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Lista de categorias</h1>
            <p>
                Añadir <a href="{{ route('category.create') }}">nueva categoría</a>
            </p>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
                </thead>
                <tbody>
                @foreach($categories as $category)
                    <tr>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->description }}</td>
                        <td>
                            <a class="btn btn-primary btn-sm" href="{{action('CategoryController@edit', $category->id)}}">Editar</a>
                        </td>
                        <td>
                            <form action="{{action('CategoryController@destroy', $category->id)}}" method="post">
                                {{csrf_field()}}
                                <input name="_method" type="hidden" value="DELETE">
                                <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

