@extends('layouts.app')

@section('content')

    <section class="seccion-hero">
        <h1 class="titulo-seccion">Contacto</h1>
        <p class="subtitulo-seccion">
            ¿Tenés dudas, consultas o querés comunicarte con el equipo de Entre Ríos Estudia? Completá el siguiente formulario.
        </p>
    </section>

    <section class="seccion-contenido">
    <div class="contact-form-wrapper">
    <form method="POST" action="#">
        @csrf

        <label for="nombre">Nombre completo</label>
        <input type="text" name="nombre" id="nombre" class="contact-input" required>

        <label for="email">Correo electrónico</label>
        <input type="email" name="email" id="email" class="contact-input" required>

        <label for="mensaje">Mensaje</label>
        <textarea name="mensaje" id="mensaje" class="contact-textarea" required placeholder="Escribí tu mensaje..."></textarea>

        <button type="submit" class="contact-btn">Enviar mensaje</button>
    </form>
</div>

</section>


@endsection
