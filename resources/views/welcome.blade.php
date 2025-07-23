<!-- CARRUSEL -->
<x-app-layout>
    <x-carrusel/>


   
    <section>
        <x-nav/>
        
 <!-- RECETAS DESTACADAS -->
        <x-destacado  :recetasRandom="$recetasRandom" />

    <!-- TODAS LAS RECETAS -->
    <br>
    <br> <!-- inventar algo por aca.... -->
    <br>
    
        <x-todas-recetas :recetasTodas='$recetasTodas' />
    </section>

    <section>

    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</x-app-layout>
