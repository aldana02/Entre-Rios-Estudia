@extends('layouts.app')

@section('content')
    <section class="hero pt-32 text-center bg-gradient-to-b from-[#e6f0fa] to-white">
        <h1 class="text-4xl font-bold text-[#032348] mb-4">Bienvenidos a Entre Ríos Estudia</h1>
        <p class="text-lg text-gray-600">Un espacio para informarte, capacitarte y crecer con las oportunidades educativas en nuestra provincia.</p>
    </section>

    <section class="search-section py-12 bg-white">
        <form method="GET" action="{{ route('cursos.index') }}" class="max-w-xl mx-auto px-4">
            <div class="search-container flex">
                <input type="text" name="q" placeholder="Buscar cursos..." class="search-input flex-1 p-3 rounded-l-lg border border-gray-300 focus:outline-none" />
                <button type="submit" class="search-btn bg-[#032348] text-white px-6 rounded-r-lg hover:bg-[#021a34] transition">Buscar</button>
            </div>
        </form>
    </section>

    <section class="features py-16 bg-[#f2f6fb] grid grid-cols-1 md:grid-cols-2 gap-8 max-w-5xl mx-auto px-4">
        <div class="feature-card bg-white p-8 rounded-xl shadow-md border-t-4 border-blue-300">
            <div class="feature-icon text-4xl mb-4">📚</div>
            <h3 class="text-xl font-semibold text-[#032348] mb-2">Información por rubro</h3>
            <p class="text-gray-600 mb-4">Explorá los distintos rubros de formación para encontrar el área que más te interesa.</p>
            <a href="/informacion" class="feature-btn bg-[#032348] text-white px-4 py-2 rounded hover:bg-[#021a34] transition">Ver rubros</a>
        </div>
        <div class="feature-card bg-white p-8 rounded-xl shadow-md border-t-4 border-red-300">
            <div class="feature-icon text-4xl mb-4">🏛️</div>
            <h3 class="text-xl font-semibold text-[#032348] mb-2">Instituciones educativas</h3>
            <p class="text-gray-600 mb-4">Conocé todas las instituciones habilitadas en Entre Ríos y lo que ofrecen.</p>
            <a href="/noticias" class="feature-btn bg-[#032348] text-white px-4 py-2 rounded hover:bg-[#021a34] transition">Ver instituciones</a>
        </div>
    </section>
@endsection
