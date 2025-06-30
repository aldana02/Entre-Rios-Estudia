<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entre Ríos Estudia</title>
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
                        url('public/images/bandera-entre-rios.jpg') center/cover;
            color: white;
            padding: 1rem 0;
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
        }

        .navbar {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 2rem;
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
            padding: 0.5rem 1rem;
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
            padding: 0.4rem 1rem;
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
    </style>
</head>
<body>
    <!-- Header con menú -->
    <header class="header">
        <nav class="navbar">
            <a href="/public/images/logoER.png" class="logo"></a>
            
            <ul class="nav-menu">
                <li><a href="/" class="active">Inicio</a></li>
                <li><a href="/informacion">Información</a></li>
                <li><a href="/noticias">Noticias</a></li>
                <li><a href="/recursos">Recursos</a></li>
                <li><a href="/contacto">Contacto</a></li>
            </ul>

            <div class="auth-buttons">
                <a href="/login" class="btn-login">Iniciar Sesión</a>
                <a href="/register" class="btn-register">Registrarse</a>
            </div>
        </nav>
    </header>

    <!-- Hero Section -->
    <main>
        <section class="hero">
            <h1>Entre Ríos Estudia</h1>
            <p>Tu portal de acceso a la educación de calidad. Encuentra información, recursos y mantente actualizado con las últimas noticias educativas de nuestra provincia.</p>
        </section>

        <!-- Buscador -->
        <section class="search-section">
            <h2 style="text-align: center; margin-bottom: 1.5rem; color: #2c3e50;">¿Qué estás buscando?</h2>
            <div class="search-container">
                <input type="text" class="search-input" placeholder="Buscar información, recursos, noticias...">
                <button class="search-btn">🔍 Buscar</button>
            </div>
            <p style="text-align: center; color: #666; font-size: 0.9rem;">
                Busca entre miles de recursos educativos, noticias y documentos oficiales
            </p>
        </section>

        <!-- Características principales -->
        <section class="features">
            <div class="feature-card info">
                <div class="feature-icon">📚</div>
                <h3>Información Educativa</h3>
                <p>Accede a toda la información oficial sobre el sistema educativo de Entre Ríos, planes de estudio, normativas y documentos importantes.</p>
                <a href="/informacion" class="feature-btn">Ver Información</a>
            </div>

            <div class="feature-card news">
                <div class="feature-icon">📰</div>
                <h3>Noticias Actualizadas</h3>
                <p>Mantente al día con las últimas noticias del ámbito educativo provincial, convocatorias, eventos y anuncios oficiales.</p>
                <a href="/noticias" class="feature-btn">Leer Noticias</a>
            </div>

            <div class="feature-card resources">
                <div class="feature-icon">🛠️</div>
                <h3>Recursos Educativos</h3>
                <p>Descarga materiales didácticos, guías, formularios y herramientas útiles para estudiantes, docentes y familias.</p>
                <a href="/recursos" class="feature-btn">Explorar Recursos</a>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="footer">
        <p>&copy; 2024 Plataforma Educativa de Entre Ríos</p>
        <p>Gobierno de Entre Ríos - Consejo General de Educación</p>
    </footer>

    <script>
        // Funcionalidad del buscador
        document.querySelector('.search-btn').addEventListener('click', function() {
            const searchTerm = document.querySelector('.search-input').value;
            if (searchTerm.trim()) {
                // Aquí integrarías con tu lógica de búsqueda de Laravel
                alert('Buscando: ' + searchTerm + '\n(Integrar con búsqueda de Laravel)');
            }
        });

        // Búsqueda al presionar Enter
        document.querySelector('.search-input').addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                document.querySelector('.search-btn').click();
            }
        });

        // Efecto smooth scroll para navegación
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>
</body>
</html>