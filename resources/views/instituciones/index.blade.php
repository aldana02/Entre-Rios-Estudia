@extends('layouts.app')

@section('content')

    <!-- Hero de la sección -->
    <section class="seccion-hero">
        <h1 class="titulo-seccion">Instituciones Educativas</h1>
        <p class="subtitulo-seccion">
            Conocé todas las instituciones habilitadas en Entre Ríos y descubrí lo que tienen para ofrecerte.
        </p>
    </section>

    <!-- Tarjetas -->
    <section class="seccion-contenido">
        <div class="cards-grid">
            @forelse ($instituciones as $institucion)
                <div class="card-box">
                    <h2>{{ $institucion->nombre }}</h2>
                    <p>{{ $institucion->descripcion }}</p>
                    <p class="text-sm text-gray-500">
                        <strong>Localidad:</strong> {{ $institucion->localidad }}
                    </p>
                    <p class="text-sm text-gray-500">
                        <strong>Email:</strong> {{ $institucion->email ?? 'No disponible' }}
                    </p>
                    <a href="{{ route('instituciones.show', $institucion->id) }}" class="btn-vermas mt-4">
                        Ver más
                    </a>
                </div>
            @empty
                <div class="estado-vacio">
                    <h3>Aún no hay instituciones registradas</h3>
                    <p>Estamos trabajando para que pronto puedas ver toda la oferta educativa de la provincia.</p>
                </div>
            @endforelse
        </div>
    </section>

@endsection
