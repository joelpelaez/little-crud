@extends('master')

@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Registrar nueva categoría</h1>
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Error!</strong> Revise los campos obligatorios.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('category.store') }}" method="post">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-6">
                        <label for="name">Nombre</label>
                        <input name="name" id="name" type="text" placeholder="Nombre" class="form-control">
                    </div>
                    <div class="col-6">
                        <label for="description">Descripción</label>
                        <input name="description" id="description" type="text" placeholder="Descripción" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <input class="btn btn-primary" type="submit" value="Crear">
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection