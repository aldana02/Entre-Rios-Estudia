@extends('layouts.app')

@section('title', 'Instituciones Educativas')
@section('description', 'Listado de instituciones habilitadas en Entre Ríos.')

@section('content')
<section class="instituciones-container">
    <div class="instituciones-header">
        <h1 class="instituciones-title">Instituciones Educativas</h1>
        <p class="instituciones-subtitle">Conocé todas las instituciones habilitadas en Entre Ríos y descubrí lo que tienen para ofrecerte.</p>
    </div>

    <div class="instituciones-empty">
         @forelse ($instituciones as $institucion)
                <div class="bg-white rounded-2xl shadow-lg p-6 border-t-4 border-[#c3dff6] hover:shadow-xl transition duration-300">
                    <h2 class="text-xl font-bold text-[#032348] mb-2">{{ $institucion->nombre }}</h2>
                    <p class="text-gray-600 mb-4">{{ $institucion->descripcion }}</p>
                    <div class="text-sm text-gray-500 space-y-1">
                        <p><strong>Localidad:</strong> {{ $institucion->localidad }}</p>
                        <p><strong>Email:</strong> {{ $institucion->email ?? 'No disponible' }}</p>
                    </div>
                    <a href="{{ route('instituciones.show', $institucion->id) }}"
                       class="inline-block mt-6 bg-[#032348] text-white px-5 py-2 rounded-lg font-medium hover:bg-[#021a34] transition">
                        Ver más
                    </a>
                </div>
            @empty
                <div class="col-span-full text-center py-20">
                    <h3 class="instituciones-alert">Aún no hay instituciones registradas</h3>
                    <p class="instituciones-info">Estamos trabajando para que pronto puedas ver toda la oferta educativa de la provincia.</p>
                </div>
            @endforelse
    </div>
</section>
@endsection

