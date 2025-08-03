<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entre Ríos Estudia</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!-- si usás Laravel Mix -->

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            min-height: 100vh;
        }

        /* Header con fondo de bandera de Entre Ríos */
        .header {
            background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), 
                        url('{{ asset('images/bandera2.jpg') }}') center/cover;
            color: white;
            padding: 1rem 0;
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
            position: relative;
        }

        .navbar {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 2rem;
        }

        /* Logo container */
        .logo-container {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .logo-img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid rgba(255, 255, 255, 0.3);
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
            transition: all 0.3s ease;
        }

        .logo-img:hover {
            transform: scale(1.05);
            border-color: rgba(255, 255, 255, 0.6);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.4);
        }

        .logo {
            font-size: 1.8rem;
            font-weight: bold;
            color: white;
            text-decoration: none;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        .nav-menu {
            display: flex;
            list-style: none;
            gap: 2rem;
        }

        .nav-menu a {
            color: white;
            text-decoration: none;
            font-weight: 500;
            padding: 0.9rem 1rem;
            border-radius: 5px;
            transition: all 0.3s ease;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
        }

        .nav-menu a:hover, .nav-menu a.active {
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px);
            transform: translateY(-2px);
        }

         .auth-buttons {
            display: flex;
            gap: 1rem;
        }

        .btn-login, .btn-register {
            padding: 0.2rem 1rem;
            border: none;
            border-radius: 6px;
            text-decoration: none;
            font-weight: 500;
            font-size: 0.9rem;
            transition: all 0.2s ease;
            cursor: pointer;
            opacity: 0.9;
        }

        .btn-login {
            background: transparent;
            color: white;
            border: 1px solid rgba(255, 255, 255, 0.6);
        }

        .btn-login:hover {
            background: rgba(255, 255, 255, 0.15);
            border-color: rgba(255, 255, 255, 0.9);
            opacity: 1;
        }

        .btn-register {
            background: rgba(255, 255, 255, 0.1);
            color: white;
            border: 1px solid rgba(255, 255, 255, 0.3);
            backdrop-filter: blur(10px);
        }

        .btn-register:hover {
            background: rgba(255, 255, 255, 0.2);
            border-color: rgba(255, 255, 255, 0.5);
            opacity: 1;
        }

        /* Hero Section */
        .hero {
            max-width: 1200px;
            margin: 0 auto;
            padding: 4rem 2rem;
            text-align: center;
        }

        .hero h1 {
            font-size: 3rem;
            margin-bottom: 1rem;
            color: #2c3e50;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);
        }

        .hero p {
            font-size: 1.3rem;
            margin-bottom: 2rem;
            color: #555;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        /* Search Section */
        .search-section {
            background: white;
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            margin: 2rem auto;
            max-width: 800px;
        }

        .search-container {
            display: flex;
            gap: 1rem;
            margin-bottom: 1rem;
        }

        .search-input {
            flex: 1;
            padding: 1rem;
            border: 2px solid #ddd;
            border-radius: 10px;
            font-size: 1rem;
            transition: border-color 0.3s ease;
        }

        .search-input:focus {
            outline: none;
            border-color: #3498db;
            box-shadow: 0 0 0 3px rgba(52, 152, 219, 0.1);
        }

        .search-btn {
            padding: 1rem 2rem;
            background: #3498db;
            color: white;
            border: none;
            border-radius: 10px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .search-btn:hover {
            background: #2980b9;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(52, 152, 219, 0.4);
        }

        /* Features Grid */
        .features {
            max-width: 1200px;
            margin: 4rem auto;
            padding: 0 2rem;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .feature-card {
            background: white;
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border-top: 4px solid transparent;
        }

        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
        }

        .feature-card.info {
            border-top-color: #3498db;
        }

        .feature-card.news {
            border-top-color: #e74c3c;
        }

        .feature-card.resources {
            border-top-color: #27ae60;
        }

        .feature-icon {
            font-size: 3rem;
            margin-bottom: 1rem;
        }

        .info .feature-icon { color: #3498db; }
        .news .feature-icon { color: #e74c3c; }
        .resources .feature-icon { color: #27ae60; }

        .feature-card h3 {
            font-size: 1.5rem;
            margin-bottom: 1rem;
            color: #2c3e50;
        }

        .feature-card p {
            color: #666;
            margin-bottom: 1.5rem;
        }

        .feature-btn {
            display: inline-block;
            padding: 0.8rem 2rem;
            background: #2c3e50;
            color: white;
            text-decoration: none;
            border-radius: 25px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .feature-btn:hover {
            background: #34495e;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(44, 62, 80, 0.4);
        }

        /* Footer */
        .footer {
            background: #2c3e50;
            color: white;
            text-align: center;
            padding: 2rem;
            margin-top: 4rem;
        }

        .footer p {
            margin-bottom: 0.5rem;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .navbar {
                flex-direction: column;
                gap: 1rem;
                padding: 1rem;
            }

            .logo-container {
                order: -1;
                margin-bottom: 1rem;
            }

            .logo-img {
                width: 40px;
                height: 40px;
            }

            .logo {
                font-size: 1.5rem;
            }

            .nav-menu {
                flex-direction: column;
                gap: 0.5rem;
                text-align: center;
            }

            .auth-buttons {
                justify-content: center;
            }

            .hero h1 {
                font-size: 2rem;
            }

            .hero p {
                font-size: 1.1rem;
            }

            .search-container {
                flex-direction: column;
            }

            .features {
                grid-template-columns: 1fr;
            }
        }

        /* Animaciones */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .hero, .search-section, .feature-card {
            animation: fadeInUp 0.6s ease forwards;
        }

        .feature-card:nth-child(2) {
            animation-delay: 0.2s;
        }

        .feature-card:nth-child(3) {
            animation-delay: 0.4s;
        }
        /* === ESTILO GENERAL PARA SECCIONES DE PÁGINAS EDUCATIVAS === */

.seccion-hero {
  background: #fff;
  text-align: center;
  padding-top: 8rem;
  padding-bottom: 3rem;
}
.seccion-hero .titulo-seccion {
  font-size: 2.25rem;
  font-weight: 800;
  color: #032348;
  margin-bottom: 1rem;
}
.seccion-hero .subtitulo-seccion {
  color: #4b5563;
  font-size: 1.125rem;
  max-width: 42rem;
  margin: 0 auto;
}

.seccion-contenido {
  background: #f2f6fb;
  padding: 3rem 1rem;
}

.cards-grid {
  max-width: 72rem;
  margin: 0 auto;
  display: grid;
  gap: 1.5rem;
  grid-template-columns: repeat(1, minmax(0, 1fr));
}
@media (min-width: 640px) {
  .cards-grid {
    grid-template-columns: repeat(2, minmax(0, 1fr));
  }
}
@media (min-width: 1024px) {
  .cards-grid {
    grid-template-columns: repeat(3, minmax(0, 1fr));
  }
}

.card-box {
  background: #fff;
  border-radius: 0.75rem;
  box-shadow: 0 10px 15px -3px rgba(0,0,0,.1), 0 4px 6px -4px rgba(0,0,0,.1);
  padding: 1.5rem;
  border-top: 4px solid #c3dff6;
  transition: box-shadow .2s ease, transform .2s ease;
}
.card-box:hover {
  box-shadow: 0 20px 25px -5px rgba(0,0,0,.1), 0 8px 10px -6px rgba(0,0,0,.1);
  transform: translateY(-2px);
}

.card-box h2 {
  font-size: 1.25rem;
  font-weight: 700;
  color: #032348;
  margin-bottom: .5rem;
}

.card-box p {
  color: #4b5563;
}

.btn-vermas {
  display: inline-block;
  margin-top: 1rem;
  background: #032348;
  color: #fff;
  padding: .5rem 1rem;
  border-radius: .5rem;
  font-weight: 500;
  transition: background .2s ease, transform .2s ease;
  text-decoration: none;
}
.btn-vermas:hover {
  background: #021a34;
  transform: translateY(-1px);
}

.estado-vacio {
  grid-column: 1 / -1;
  text-align: center;
  padding: 4rem 1rem;
}
.estado-vacio h3 {
  font-size: 1.5rem;
  font-weight: 600;
  color: #032348;
  margin-bottom: .75rem;
}
.estado-vacio p {
  color: #4b5563;
}

/* Sección del formulario */
.seccion-contenido {
    background-color: #f2f6fb;
    padding: 4rem 1rem;
    display: flex;
    justify-content: center;
}

.contact-form-section {
    min-height: 60vh;
    display: flex;
    align-items: center;
    justify-content: center;
    background: transparent;
    padding-bottom: 4rem;
    padding-top: 2rem;
}

.contact-form-wrapper {
    background: #fff;
    border-radius: 18px;
    box-shadow: 0 10px 38px rgba(44,62,80,0.13), 0 2px 12px rgba(44,62,80,0.05);
    padding: 2.7rem 2.1rem 2.2rem 2.1rem;
    max-width: 480px;
    width: 100%;
    margin: 0 auto;
    transition: box-shadow 0.2s;
}

.contact-form-wrapper:hover {
    box-shadow: 0 18px 48px rgba(44,62,80,0.16), 0 3px 16px rgba(44,62,80,0.10);
}

.contact-form-wrapper label {
    font-weight: 600;
    color: #032348;
    margin-bottom: 0.5rem;
    margin-left: 0.15rem;
    display: block;
}

.contact-input, .contact-textarea {
    width: 100%;
    padding: 0.95rem 1.1rem;
    margin-bottom: 1.1rem;
    border-radius: 9px;
    border: 1.5px solid #c3dff6;
    background: #f7fafd;
    font-size: 1.10rem;
    font-family: inherit;
    transition: border-color 0.18s, background 0.22s;
}

.contact-input:focus, .contact-textarea:focus {
    outline: none;
    border-color: #032348;
    background: #edf3fa;
}

.contact-textarea {
    resize: vertical;
    min-height: 96px;
    max-height: 220px;
}

.contact-btn {
    background: #032348;
    color: #fff;
    padding: 0.9rem 0;
    width: 100%;
    font-weight: 600;
    font-size: 1.09rem;
    border-radius: 8px;
    border: none;
    box-shadow: 0 2px 12px rgba(44,62,80,0.10);
    cursor: pointer;
    margin-top: 0.15rem;
    letter-spacing: .01em;
    transition: background 0.25s;
}

.contact-btn:hover, .contact-btn:focus {
    background: #1a3366;
}

@media (max-width: 700px) {
    .contact-form-wrapper {
        max-width: 98vw;
        padding: 1.4rem 0.5rem 1.7rem 0.5rem;
        border-radius: 13px;
    }
    .contact-form-section {
        padding-top: 0.8rem;
        padding-bottom: 2.2rem;
    }
}

.login-wrapper {
    display: flex;
    max-width: 980px; /* Más ancho para PC */
    min-height: 480px;
    width: 100%;
    margin: 4rem auto;
    background: white;
    border-radius: 22px;
    overflow: hidden;
    box-shadow: 0 10px 40px rgba(0,0,0,0.11);
}

.login-banner {
    flex: 1 1 47%;
    min-width: 340px;
    background: linear-gradient(rgba(0,0,0,.40), rgba(0,0,0,.4)), url('{{ asset('images/bandera2.jpg') }}') center/cover;
    color: white;
    padding: 3.2rem 2rem 2rem 2rem;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}

.login-logo {
    width: 80px;
    height: 80px;
    margin-bottom: 1.5rem;
    border-radius: 50%;
    background: white;
    box-shadow: 0 2px 8px rgba(0,0,0,0.07);
    object-fit: cover;
}

.login-title {
    font-size: 2.4rem;
    font-weight: bold;
    margin-bottom: 1.1rem;
    line-height: 1.1;
    text-align: center;
    letter-spacing: 1px;
    text-shadow: 2px 2px 7px rgba(0,0,0,0.18);
}

.login-desc {
    font-size: 1.10rem;
    color: #f1f5fa;
    text-align: center;
    margin-top: 1rem;
    margin-bottom: .5rem;
}

.login-form-box {
    flex: 1 1 53%;
    min-width: 350px;
    max-width: 520px;
    padding: 3.2rem 2.2rem 2.3rem 2.2rem;
    display: flex;
    flex-direction: column;
    justify-content: center;
}

.titulo-formulario {
    font-size: 2.2rem;
    color: #032348;
    font-weight: bold;
    margin-bottom: .5rem;
    text-align: left;
}

.subtitulo-formulario {
    color: #556;
    font-size: 1.09rem;
    margin-bottom: 1.5rem;
}

.label-auth {
    display: block;
    font-weight: 600;
    color: #333;
    margin-bottom: 0.4rem;
    margin-top: 1rem;
}

.input-auth {
    width: 100%;
    padding: 0.85rem 1.1rem;
    border: 1.5px solid #b5c4da;
    border-radius: 10px;
    font-size: 1.1rem;
    margin-bottom: 0.4rem;
    background: #f8fafc;
    transition: border-color 0.3s, box-shadow 0.3s;
}

.input-auth:focus {
    outline: none;
    border-color: #032348;
    box-shadow: 0 0 0 2.5px #c3dff6;
}

.btn-auth {
    background-color: #032348;
    color: white;
    padding: 0.8rem 2.5rem;
    border-radius: 10px;
    font-weight: 600;
    font-size: 1rem;
    margin-top: 1.2rem;
    transition: background 0.3s, box-shadow 0.3s;
}

.btn-auth:hover {
    background-color: #021a34;
    box-shadow: 0 4px 15px rgba(3, 35, 72, 0.25);
}

.mensaje-error {
    color: #e3342f;
    font-size: 0.97rem;
    margin-top: -0.3rem;
    margin-bottom: 0.7rem;
}

/* Responsive: Mobile y tablet */
@media (max-width: 900px) {
    .login-wrapper {
        flex-direction: column;
        max-width: 99vw;
        margin: 2rem auto;
    }
    .login-banner, .login-form-box {
        min-width: 100%;
        padding: 2.5rem 1.1rem;
    }
    .login-banner {
        border-radius: 22px 22px 0 0;
    }
    .login-form-box {
        border-radius: 0 0 22px 22px;
        max-width: 100vw;
    }
    .titulo-formulario {
        text-align: center;
    }
}

@media (max-width: 600px) {
    .login-wrapper {
        margin: 0;
        border-radius: 0;
    }
    .login-banner, .login-form-box {
        padding: 1.4rem 0.3rem;
    }
}


    </style>
</head>
<body>

    <!-- Header con menú -->
    <header class="header">
        <nav class="navbar">
            <div class="logo-container">
                <img src="{{ asset('images/logoER.png') }}" alt="Logo Entre Ríos" class="logo-img"><br>
            </div>
            
            <ul class="nav-menu">
                <li><a href="/" class="active">Inicio</a></li>
                <li><a href="/rubros">Rubro</a></li>
                <li><a href="/instituciones">Institución</a></li>
                <li><a href="/cursos">Cursos</a></li>
                <li><a href="/contacto">Contacto</a></li>
            </ul>
            
            <div class="auth-buttons">
                <a href="/login" class="btn-login">Iniciar Sesión</a>
                <a href="/register" class="btn-register">Registrarse</a>
            </div>
        </nav>
    </header>

    <!-- Aquí va el contenido de cada vista -->
    <main>
        @yield('content')
    </main>

    <!-- Footer (opcional) -->
    <footer class="footer">
        <p>&copy; {{ date('Y') }} Entre Ríos Estudia - Todos los derechos reservados.</p>
    </footer>

</body>
</html>
