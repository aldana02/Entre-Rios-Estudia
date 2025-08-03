@extends('layouts.app')

@section('content')

    <section class="seccion-hero">
        <h1 class="titulo-seccion">Información por Rubro</h1>
        <p class="subtitulo-seccion">
            Explorá los distintos rubros de formación para encontrar el área que más te interesa.
        </p>
    </section>

    <section class="seccion-contenido">
        <div class="cards-grid">
            @forelse ($rubros as $rubro)
                <div class="card-box">
                    <h2>{{ $rubro->nombre_rubro }}</h2>
                    <p>Explorá las ofertas disponibles dentro de este rubro.</p>
                    <a href="#" class="btn-vermas">Ver más</a>
                </div>
            @empty
                <div class="estado-vacio">
                    <h3>Aún no hay rubros registrados</h3>
                    <p>Estamos trabajando para que pronto puedas explorar la oferta educativa por rubros.</p>
                </div>
            @endforelse
        </div>
    </section>

@endsection
