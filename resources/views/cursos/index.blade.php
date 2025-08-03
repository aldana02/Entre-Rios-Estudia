@extends('layouts.app')

@section('content')

    <section class="seccion-hero">
        <h1 class="titulo-seccion">Cursos disponibles</h1>
        <p class="subtitulo-seccion">
            Explorá los cursos de formación, capacitación y oficios ofrecidos por instituciones de Entre Ríos.
        </p>
    </section>

    <section class="seccion-contenido">
        <div class="cards-grid">
            @forelse ($cursos as $curso)
                <div class="card-box">
                    <h2>{{ $curso->nombre }}</h2>
                    <p>{{ $curso->descripcion }}</p>
                    <p class="text-sm text-gray-500"><strong>Modalidad:</strong> {{ $curso->modalidad }}</p>
                    <p class="text-sm text-gray-500"><strong>Duración:</strong> {{ $curso->duracion }}</p>
                    <a href="{{ route('cursos.show', $curso->id) }}" class="btn-vermas mt-4">Ver más</a>
                </div>
            @empty
                <div class="estado-vacio">
                    <h3>Aún no hay cursos registrados</h3>
                    <p>Pronto verás la oferta completa de formación de la provincia.</p>
                </div>
            @endforelse
        </div>
    </section>

@endsection
