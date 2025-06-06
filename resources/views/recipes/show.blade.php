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

    <div class="container text-center">
        <H1 class="row ms-3">Recetas</H1>
        <div class="row justify-content-center card border-dark mb-3">

            <div class="card-header">
                <H3>{{ $receta->title }}</H3>
            </div>
            <div class="card-body">
                <h5 class="card-title">Pasos a seguir:</h5>
                <h5 class="card-title">{{$receta->content}}</h5>
            </div>
            <div class="card-body">
                <h5 class="card-title">Ingredientes:</h5>
                @foreach ($ingredientesReceta as $ingrediente)
                    <h5 class="card-title">{{$ingrediente['name']}} - cantidad: {{$ingrediente['amount']}}  </h5>
                @endforeach
                
            </div>
        </div>
    </div>
</x-app-layout>
