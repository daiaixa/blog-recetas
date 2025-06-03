<!-- -->

<x-app-layout>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">

    <br>
    <br>

    @if (session('success'))
        <p> {{ session('success') }} </p>
    @endif
    <div class="container">
        <div>
            <h3>CATEGORIAS: </h3>
        </div>
        @if (empty($categorias))
            <p class="text-danger">No hay categorías que mostrar</p>
        @endif

        @foreach ($categorias as $categoria)
            <div class="row justify-content-center mt-2 p-lg-4">
                <div class="col-8 flex-column justify-content-center align-items-center">
                    <h5 class="m-0"> {{ $categoria->name }}</h5>
                    <p class="m-0"> {{ $categoria->description }}</p>
                </div>
                <div class="col-3">
                    <a href="{{ route('categories.show', $categoria) }}" class="btn btn-primary mt-1">Ver</a>
                    <a href="{{ route('categories.edit', $categoria) }}" class="btn btn-primary mt-1">Editar</a>
                    <button type="button" class="btn btn-danger mt-1" data-bs-toggle="modal"
                        data-bs-target="#modalCategory{{ $categoria->id }}">
                        Eliminar
                    </button>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="modalCategory{{ $categoria->id }}" tabindex="-1"
                    aria-labelledby="modalCategoryLabel{{ $categoria->id }}" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalCategoryLabel{{ $categoria->id }}">
                                    Está por eliminar un elemento
                                </h5>
                            </div>
                            <div class="modal-body">
                                ¿Estás seguro de que deseas eliminar la categoría "{{ $categoria->name }}"?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Salir</button>
                                <form action="{{ route('categories.destroy', $categoria) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Eliminar post</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</x-app-layout>
