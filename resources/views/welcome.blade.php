<!-- CARRUSEL -->
<x-app-layout>
    <section>
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://static-cse.canva.com/blob/598737/Fotografiadecomida.93145c51.avif"
                        class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://www.bupasalud.com/sites/default/files/inline-images/bupa_598072389.jpg"
                        class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://media.istockphoto.com/id/1398630614/es/foto/hamburguesa-con-queso-de-tocino-en-un-bollo-tostado.jpg?s=1024x1024&w=is&k=20&c=n2CLk2LtRwFgQsXfQlJsx2l9fkeXzwVSaV1-ykYziDM="
                        class="d-block w-100" alt="...">
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
    </section>
    <!-- RECETAS DESTACADAS las que tenga mcas comentarios-->
    <section>
        <h1 class="text-star ms-3 mt-3 mb-3">Recetas destacadas</h1>
        <!-- estaria bueno que cargue las tarjetas con las tres recetas mas destacadas -->
        <div class='container-fluid mt-2 row aling-items-center justify-content-center'>
            <div class="card me-3 mt-3" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card’s content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            <div class="card me-3 mt-3" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card’s content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            <div class="card me-3 mt-3" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card’s content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
    </section>
    <!-- TODAS LAS RECETAS -->
    <section>
        <h1 class="text-star ms-3 mt-3 mb-3">Recetas destacadas</h1>
        <!-- que se genere la lista dinamicamente -->
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</x-app-layout>
