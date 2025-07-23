@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<x-app-layout>
    <br>
    <br>
    <!-- boton atras -->
    <div class="container-md align-items-center">
        <a class="btn btn-primary" href={{ route('recipes.index') }} role="button">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                class="bi bi-chevron-double-left" viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="M8.354 1.646a.5.5 0 0 1 0 .708L2.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0" />
                <path fill-rule="evenodd"
                    d="M12.354 1.646a.5.5 0 0 1 0 .708L6.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0" />
            </svg>
            Voler atrás
        </a>
    </div>
    <br>
    <br>

    <!-- formulario -->
    <div class="container-fluid p-4">
        <div class="d-flex justify-content-center align-items-center">
            <form action="{{ route('recipes.update', $receta->id) }}" method="POST" enctype="multipart/form-data"
                class="w-100" style="max-width: 600px;">
                @csrf
                @method('PUT')

                <!-- Campo titulo -->
                <div class="row mb-3">
                    <div class="col-12 mb-2"> <!-- Contenedor fijo para label + input -->
                        <label class="form-label">Titulo de la receta</label>
                        <input type="text" name="title" class="form-control" style="height: 40px;"
                            value="{{ $receta->title }}">
                        <!-- Altura fija -->
                    </div>
                    <div class="col-12"> <!-- Mensaje de error fuera del flujo -->
                        @error('title')
                            <div class="text-danger small mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <!-- Campo imagen -->
                <div class="row mb-3">
                    <div class="col-12 mb-2"> <!-- Contenedor fijo para label + input -->
                        <label class="form-label">Imagen de la receta</label>

                        @if (isset($receta) && $receta->image_recipe)
                            <div class="mb-3">
                                <img src="{{ $receta->image_url }}" class="img-thumbnail" style="max-height: 200px;">
                            </div>
                        @endif

                        <input type="file" name="image_recipe" class="form-control" accept="image/*"
                            style="height: 40px;">
                    </div>
                    <div class="col-12"> <!-- Mensaje de error fuera del flujo -->
                        @error('image_recipe')
                            <div class="text-danger small mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <!-- descripcion de los pasos -->
                <div class="row mb-3">
                    <div class="col-12 mb-2">
                        <label class="form-label">Describa los pasos</label>
                        <input type="text" name="content" class="form-control" style="height: 150px;"
                            value="{{ $receta->content }}">
                        <!-- Altura fija -->
                    </div>
                    <div class="col-12"> <!-- Mensaje de error fuera del flujo -->
                        @error('content')
                            <div class="text-danger small mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <!-- este quiero que sea un selector de categorias -->
                <label class="form-label">Seleccione la categoria</label>
                <div class="form-floating">
                    <select class="form-select" id="floatingSelect" name='category_id'
                        aria-label="Floating label select example">
                        <option selected value="{{ $categoria_receta->id }}"> {{ $categoria_receta->name }}</option>
                        @foreach ($categorias as $categoria)
                            @if ($categoria->id != $categoria_receta->id)
                                <option value="{{ $categoria->id }}">{{ $categoria->name }}</option>
                            @endif
                        @endforeach
                    </select>
                    <label for="floatingSelect">{{ $categoria_receta->name }}</label>
                </div>

                <br>
                <!-- Campo ingredientes -->
                <!-- Podria existir un boton que le permita añadir rapidamente un nuevo ingrediente -->
                <div class="row mb-3">
                    <label class="form-label">Seleccione los ingredientes</label>
                    <div class="container text-start mt-2">
                        @foreach ($ingredientes as $ingrediente)
                            @php
                                $recetaIngrediente = $receta->ingredients->firstWhere('id', $ingrediente->id); //firstWhere('id', $ingrediente->id) busca dentro de esa colección el primer ingrediente cuyo ID coincida con el actual del @foreach
                                $cantidad = $recetaIngrediente ? $recetaIngrediente->pivot->amount : '';
                            @endphp
                            <div class="row">
                                <label class="col-6 col-sm-3 me-2">{{ $ingrediente->name }}</label>
                                <input class="col-6 mb-2" type="text"
                                    name="ingredients[{{ $ingrediente->id }}][amount]" placeholder="Cantidad"
                                    value="{{ old('ingredients.' . $ingrediente->id . '.amount', $cantidad) }}">
                                <!-- value permite mostrar las cantidades de quellos ingredientes que tiene asociados -->
                            </div>
                        @endforeach
                    </div>

                    <div class="col-12"> <!-- Mensaje de error fuera del flujo -->
                        @error('ingredients')
                            <div class="text-danger small mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <br>
                <!-- Botón -->
                <div class="text-center">
                    <button type="submit" class="btn btn-primary px-4 py-2">Guardar</button>
                </div>
            </form>
        </div>
    </div>

</x-app-layout>
