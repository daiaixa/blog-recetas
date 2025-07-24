<x-app-layout>

    <br>
    <br>
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
    <div class="container text-center">
        <div class="row justify-content-center card border-dark mb-3">
            <div class="card-header">Categoria</div>
            <div class="row"> <!-- Contenedor principal flex -->
                <div class="col-md-4 mb-3">
                    <img src="{{ $categoria->image_url }}" class="img-fluid rounded shadow mt-3"
                        alt="{{ $categoria->title }}" style="max-height: 400px; width: 100%; object-fit: cover;">
                </div>
                <div class="col-md-8 mb-3">
                    <div class="card-body">
                        <h5 class="card-title">{{ $categoria->name }}</h5>
                        @if (empty($categoria->description))
                            <p class="card-text">Sin descripción</p>
                        @else
                            <p class="card-text">{{ $categoria->description }}</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>



</x-app-layout>
