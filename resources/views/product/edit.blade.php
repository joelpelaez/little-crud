@extends('master')

@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Editar producto</h1>
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
            <form action="{{ route('product.update', $product->id) }}" method="post">
                {{ csrf_field() }}
                {{ method_field('PATCH') }}
                <div class="row">
                    <div class="col-6">
                        <label for="name">Nombre</label>
                        <input name="name" id="name" type="text" placeholder="Nombre" value="{{ $product->name }}" class="form-control">
                    </div>
                    <div class="col-6">
                        <label for="code">Código</label>
                        <input name="code" id="code" type="text" placeholder="Código" value="{{ $product->code }}" class="form-control">
                    </div>
                    <div class="col-6">
                        <label for="description">Descripción</label>
                        <input name="description" id="description" type="text" placeholder="Descripción" value="{{ $product->description }}" class="form-control">
                    </div>
                    <div class="col-6">
                        <label for="category">Categoría</label>
                        <select name="category_id" id="category" class="form-control">
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}" @if($product->category->id === $category->id) selected @endif>{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-6">
                        <label for="price">Precio</label>
                        <input name="price" id="price" type="text" placeholder="$ Price" value="{{ $product->price }}" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <input class="btn btn-primary" type="submit" value="Actualizar">
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection