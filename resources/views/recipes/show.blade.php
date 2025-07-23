<x-app-layout>
    <br>
    <br>
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

    <div class="container">
        <h1 class="text-start mb-4">Receta:</h1> <!-- Título centrado -->
        <div class="card-header justify-content-center mb-4">
            <h3>{{ $receta->title }}</h3>
        </div>
        <div class="row"> <!-- Contenedor principal flex -->
            <!-- Columna para la imagen (ocupará 4/12 en pantallas medianas/grandes) -->
            <div class="col-md-4 mb-3">
                <img src="{{ $receta->image_url }}" class="img-fluid rounded shadow mt-3" alt="{{ $receta->title }}"
                    style="max-height: 400px; width: 100%; object-fit: cover;">
            </div>

            <!-- Columna para los datos (ocupará 8/12) -->
            <div class="col-md-8">
                <div class="card border-dark">
                    <div class="card-body">
                        <h5 class="card-title">Pasos a seguir:</h5>
                        <p class="card-text">{{ $receta->content }}</p>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Ingredientes:</h5>
                        <ul class="list-unstyled">
                            @foreach ($ingredientesReceta as $ingrediente)
                                <li class="mb-1">
                                    <strong>{{ $ingrediente['name'] }}</strong> -
                                    Cantidad: {{ $ingrediente['amount'] }}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
