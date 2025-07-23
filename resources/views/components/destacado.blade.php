@props(['recetasRandom'])


<h1 class="text-star ms-5 mt-3 mb-3">Recetas destacadas</h1>
        <!-- estaria bueno que cargue las tarjetas con las tres recetas mas destacadas -->
        <div class='container-fluid mt-2 ms-3 row aling-items-center justify-content-center'>
            @foreach ($recetasRandom as $receta)
                <div class="card me-3 mt-3 d-flex flex-column" style="width: 20rem;height:20rem;">
                    <img src="{{ $receta->image_recipe }}" class="card-img-top mt-2" alt="{{ $receta->title }}"
                        style="width: 100%; height: 50%;">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">{{ $receta->title }}</h5>
                        <a href="{{ route('recipes.show', $receta->id) }}" class="btn btn-primary mt-auto "> Ver </a>
                    </div>
                </div>
            @endforeach
        </div>