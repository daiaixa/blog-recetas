<x-app-layout>
    <br>
    <br>
    <!-- boton atras -->
    <div class="container-md align-items-center">
        <a class="btn btn-primary" href={{ route('categories.index') }} role="button">
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
            <form action="{{ route('categories.store') }}" method="POST" enctype="multipart/form-data" class="w-100" style="max-width: 600px;">
                @csrf
                <!-- Campo Nombre -->
                <div class="row mb-3">
                    <div class="col-12 mb-2"> <!-- Contenedor fijo para label + input -->
                        <label class="form-label">Nombre de categoría</label>
                        <input type="text" name="name" class="form-control" style="height: 40px;">
                        <!-- Altura fija -->
                    </div>
                    <div class="col-12"> <!-- Mensaje de error fuera del flujo -->
                        @error('name')
                            <div class="text-danger small mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-12 mb-2"> <!-- Contenedor fijo para label + input -->
                        <label class="form-label">Cargue una imagen para identificar la categoria:</label>
                        <input type="file" name="image_category" class="form-control" style="height: 40px;">
                        <!-- Altura fija -->
                    </div>
                    <div class="col-12"> <!-- Mensaje de error fuera del flujo -->
                        @error('title')
                            <div class="text-danger small mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <!-- Campo Descripción -->
                <div class="row mb-4"> <!-- Aumenté el margen inferior -->
                    <div class="col-12 mb-2">
                        <label class="form-label">Descripción</label>
                        <input type="text" name="description" class="form-control" style="height: 40px;">
                    </div>
                    <div class="col-12">
                        @error('description')
                            <div class="text-danger small mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <!-- Botón -->
                <div class="text-start">
                    <button type="submit" class="btn btn-primary px-4 py-2">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
