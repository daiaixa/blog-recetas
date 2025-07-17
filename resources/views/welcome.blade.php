<!-- CARRUSEL -->

    <section>
        <a href="{{ route('categories.index') }}">

            <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://aprende.com/wp-content/uploads/2022/05/canapes.jpg" class="d-block w-100"
                            alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h3 style="font-family: 'Walter Turncoat';">Entradas</h3>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://media.istockphoto.com/id/1403973419/es/foto/mesa-de-comida-extendida-en-la-mesa.jpg?s=612x612&w=0&k=20&c=L64uuvK0u2J9iGVqzU-FiCTfbAT0mHuNjc9IKWhJvDE="
                            class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h3 style="font-family: 'Walter Turncoat';">Plato principal</h3>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://www.cocinadelirante.com/sites/default/files/images/2018/03/recetas-faciles-de-postres-con-fresa-y-yogurt.jpg"
                            class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h3 style="font-family: 'Walter Turncoat';">Postres</h3>
                        </div>
                    </div>
                    <div class="carousel-item">

                        <img src="https://th.bing.com/th/id/R.041a3bfab5e963ad43bb730d5852cf1a?rik=aPQow5s1HzBUlA&riu=http%3a%2f%2f4.bp.blogspot.com%2f_kn2M0xjakeg%2fTHkcbjEKbgI%2fAAAAAAAAAB8%2fLBS_fY4xPmM%2fs1600%2f_DSC8590.jpg&ehk=za66OrYZovH2wp5B7BTml83ey4Xo7QxMo4JiZZG4pKg%3d&risl=&pid=ImgRaw&r=0"
                            class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h3 style="font-family: 'Walter Turncoat';">Panaderia</h3>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </a>
    </section>

    <!-- RECETAS DESTACADAS -->
    <section>
        <ul class="nav justify-content-center">
            <li class="nav-item">
                <a class="nav-link icon-link icon-link-hover" aria-current="page" href={{ route('recipes.index') }}>
                    <h3 class="text-star ms-3 mt-3 mb-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                            class="bi bi-fork-knife" viewBox="0 0 16 16">
                            <path
                                d="M13 .5c0-.276-.226-.506-.498-.465-1.703.257-2.94 2.012-3 8.462a.5.5 0 0 0 .498.5c.56.01 1 .13 1 1.003v5.5a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5zM4.25 0a.25.25 0 0 1 .25.25v5.122a.128.128 0 0 0 .256.006l.233-5.14A.25.25 0 0 1 5.24 0h.522a.25.25 0 0 1 .25.238l.233 5.14a.128.128 0 0 0 .256-.006V.25A.25.25 0 0 1 6.75 0h.29a.5.5 0 0 1 .498.458l.423 5.07a1.69 1.69 0 0 1-1.059 1.711l-.053.022a.92.92 0 0 0-.58.884L6.47 15a.971.971 0 1 1-1.942 0l.202-6.855a.92.92 0 0 0-.58-.884l-.053-.022a1.69 1.69 0 0 1-1.059-1.712L3.462.458A.5.5 0 0 1 3.96 0z" />
                        </svg>
                        Recetas
                    </h3>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href={{ route('ingredients.index') }}>
                    <h3 class="text-star ms-3 mt-3 mb-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                            viewBox="0 0 512 512">
                            <path
                                d="M346.7 6C337.6 17 320 42.3 320 72c0 40 15.3 55.3 40 80s40 40 80 40c29.7 0 55-17.6 66-26.7c4-3.3 6-8.2 6-13.3s-2-10-6-13.2c-11.4-9.1-38.3-26.8-74-26.8c-32 0-40 8-40 8s8-8 8-40c0-35.7-17.7-62.6-26.8-74C370 2 365.1 0 360 0s-10 2-13.3 6zM244.6 136c-40 0-77.1 18.1-101.7 48.2l60.5 60.5c6.2 6.2 6.2 16.4 0 22.6s-16.4 6.2-22.6 0l-55.3-55.3 0 .1L2.2 477.9C-2 487-.1 497.8 7 505s17.9 9 27.1 4.8l134.7-62.4-52.1-52.1c-6.2-6.2-6.2-16.4 0-22.6s16.4-6.2 22.6 0L199.7 433l100.2-46.4c46.4-21.5 76.2-68 76.2-119.2C376 194.8 317.2 136 244.6 136z" />
                        </svg>
                        Ingredientes
                    </h3>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href={{ route('categories.index') }}>
                    <h3 class="text-star ms-3 mt-3 mb-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                            class="bi bi-tag" viewBox="0 0 16 16">
                            <path d="M6 4.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0m-1 0a.5.5 0 1 0-1 0 .5.5 0 0 0 1 0" />
                            <path
                                d="M2 1h4.586a1 1 0 0 1 .707.293l7 7a1 1 0 0 1 0 1.414l-4.586 4.586a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 1 6.586V2a1 1 0 0 1 1-1m0 5.586 7 7L13.586 9l-7-7H2z" />
                        </svg>
                        Categorias
                    </h3>
                </a>
            </li>

        </ul>

        <h1 class="text-star ms-5 mt-3 mb-3">Recetas destacadas</h1>
        <!-- estaria bueno que cargue las tarjetas con las tres recetas mas destacadas -->
        <div class='container-fluid mt-2 ms-5 row aling-items-center justify-content-start'>
            @foreach ($recetas as $receta)
                <div class="card text-bg-light d-flex flex-column justify-content-between me-3 mt-3" style="max-width: 18rem;">
                    <div class="card-header">{{ $receta->category->name }}</div>
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">{{ $receta->title }}</h5>
                        <p class="card-text">{{ $receta->content }}</p>
                        <div class="mt-auto">
                            <a href="{{route('recipes.show', $receta->id)}}" class="btn btn-primary">Ver aqui sus ingredientes</a>
                        </div>   
                    </div>
                </div>
            @endforeach
        </div>
    </section>
    <!-- TODAS LAS RECETAS -->
    <section>



        <!-- que se genere la lista dinamicamente -->
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</x-app-layout>
