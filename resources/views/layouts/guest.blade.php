@extends('layouts.app')
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión - Entre Ríos Estudia</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem;
        }

        .auth-container {
            background: white;
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            width: 100%;
            max-width: 1500px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            min-height: 600px;
        }

        /* Panel izquierdo con imagen de fondo */
        .auth-hero {
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), 
                        url('{{ asset('images/bandera2.jpg') }}') center/cover;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 3rem;
            color: white;
        }

        .auth-hero .logo {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin-bottom: 1.5rem;
            border: 3px solid rgba(255, 255, 255, 0.3);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
        }

        .auth-hero h1 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        .auth-hero p {
            font-size: 1.1rem;
            opacity: 0.9;
            line-height: 1.6;
        }

        /* Panel derecho con formulario */
        .auth-form {
            padding: 3rem;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .form-header {
            text-align: center;
            margin-bottom: 2rem;
        }

        .form-header h2 {
            color: #2c3e50;
            font-size: 2rem;
            margin-bottom: 0.5rem;
        }

        .form-header p {
            color: #666;
            font-size: 0.95rem;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            color: #2c3e50;
            font-weight: 500;
        }

        .form-input {
            width: 100%;
            padding: 1rem;
            border: 2px solid #e1e8ed;
            border-radius: 10px;
            font-size: 1rem;
            transition: all 0.3s ease;
            background: #f8f9fa;
        }

        .form-input:focus {
            outline: none;
            border-color: #3498db;
            background: white;
            box-shadow: 0 0 0 3px rgba(52, 152, 219, 0.1);
        }

        .form-input:hover {
            border-color: #bdc3c7;
        }

        .form-checkbox {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            margin-bottom: 1.5rem;
        }

        .form-checkbox input {
            width: 18px;
            height: 18px;
            accent-color: #3498db;
        }

        .form-checkbox label {
            margin-bottom: 0;
            color: #666;
            font-size: 0.9rem;
        }

        .btn-primary {
            background: linear-gradient(135deg, #3498db, #2980b9);
            color: white;
            border: none;
            padding: 1rem 2rem;
            border-radius: 10px;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-bottom: 1.5rem;
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(52, 152, 219, 0.4);
        }

        .form-divider {
            text-align: center;
            margin: 1.5rem 0;
            position: relative;
            color: #666;
        }

        .form-divider::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 0;
            right: 0;
            height: 1px;
            background: #e1e8ed;
        }

        .form-divider span {
            background: white;
            padding: 0 1rem;
        }

        .auth-links {
            text-align: center;
        }

        .auth-links a {
            color: #3498db;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .auth-links a:hover {
            color: #2980b9;
        }

        .forgot-password {
            text-align: right;
            margin-top: 0.5rem;
        }

        .forgot-password a {
            color: #666;
            text-decoration: none;
            font-size: 0.9rem;
        }

        .forgot-password a:hover {
            color: #3498db;
        }

        .back-home {
            position: absolute;
            top: 2rem;
            left: 2rem;
            background: rgba(255, 255, 255, 0.1);
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 25px;
            text-decoration: none;
            font-size: 0.9rem;
            transition: all 0.3s ease;
            backdrop-filter: blur(10px);
        }

        .back-home:hover {
            background: rgba(255, 255, 255, 0.2);
            transform: translateY(-2px);
        }

        /* Responsive */
        @media (max-width: 768px) {
            .auth-container {
                grid-template-columns: 1fr;
                max-width: 400px;
            }

            .auth-hero {
                padding: 2rem;
                min-height: 250px;
            }

            .auth-hero h1 {
                font-size: 1.8rem;
            }

            .auth-form {
                padding: 2rem;
            }

            .back-home {
                top: 1rem;
                left: 1rem;
            }
        }

        /* Animaciones */
        @keyframes slideInRight {
            from {
                opacity: 0;
                transform: translateX(30px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes slideInLeft {
            from {
                opacity: 0;
                transform: translateX(-30px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .auth-hero {
            animation: slideInLeft 0.6s ease;
        }

        .auth-form {
            animation: slideInRight 0.6s ease;
        }

        /* Estilos para registro */
        .register-form .form-group {
            margin-bottom: 1.2rem;
        }

        .name-group {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1rem;
        }

        @media (max-width: 480px) {
            .name-group {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <div class="auth-container">
        <!-- Panel izquierdo con hero -->
        <div class="auth-hero">
            <a href="/" class="back-home">← Volver al inicio</a>
            <img src="{{ asset('images/logoER.png') }}" alt="Logo Entre Ríos" class="logo">
            <h1>Entre Ríos Estudia</h1>
            <p>Tu portal de acceso a la educación de calidad. Conecta con miles de recursos educativos y mantente actualizado.</p>
        </div>

        <!-- Panel derecho con formulario de login -->
        <div class="auth-form" id="loginForm">
            <div class="form-header">
                <h2>Iniciar Sesión</h2>
                <p>Ingresa a tu cuenta para continuar</p>
            </div>

            <form>
                <div class="form-group">
                    <label for="email">Correo Electrónico</label>
                    <input type="email" id="email" class="form-input" placeholder="tu@email.com" required>
                </div>

                <div class="form-group">
                    <label for="password">Contraseña</label>
                    <input type="password" id="password" class="form-input" placeholder="Tu contraseña" required>
                </div>

                <div class="form-checkbox">
                    <input type="checkbox" id="remember">
                    <label for="remember">Recordarme</label>
                </div>

                <button type="submit" class="btn-primary">Iniciar Sesión</button>

                <div class="forgot-password">
                    <a href="#" onclick="showForgotPassword()">¿Olvidaste tu contraseña?</a>
                </div>
            </form>

            <div class="form-divider">
                <span>o</span>
            </div>

            <div class="auth-links">
                <p>¿No tienes cuenta? <a href="#" onclick="showRegister()">Regístrate aquí</a></p>
            </div>
        </div>

        <!-- Panel derecho con formulario de registro (oculto inicialmente) -->
        <div class="auth-form register-form" id="registerForm" style="display: none;">
            <div class="form-header">
                <h2>Crear Cuenta</h2>
                <p>Únete a la comunidad educativa</p>
            </div>

            <form>
                <div class="name-group">
                    <div class="form-group">
                        <label for="firstName">Nombre</label>
                        <input type="text" id="firstName" class="form-input" placeholder="Tu nombre" required>
                    </div>
                    <div class="form-group">
                        <label for="lastName">Apellido</label>
                        <input type="text" id="lastName" class="form-input" placeholder="Tu apellido" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="registerEmail">Correo Electrónico</label>
                    <input type="email" id="registerEmail" class="form-input" placeholder="tu@email.com" required>
                </div>

                <div class="form-group">
                    <label for="registerPassword">Contraseña</label>
                    <input type="password" id="registerPassword" class="form-input" placeholder="Mínimo 8 caracteres" required>
                </div>

                <div class="form-group">
                    <label for="confirmPassword">Confirmar Contraseña</label>
                    <input type="password" id="confirmPassword" class="form-input" placeholder="Confirma tu contraseña" required>
                </div>

                <div class="form-checkbox">
                    <input type="checkbox" id="terms" required>
                    <label for="terms">Acepto los términos y condiciones</label>
                </div>

                <button type="submit" class="btn-primary">Crear Cuenta</button>
            </form>

            <div class="form-divider">
                <span>o</span>
            </div>

            <div class="auth-links">
                <p>¿Ya tienes cuenta? <a href="#" onclick="showLogin()">Inicia sesión aquí</a></p>
            </div>
        </div>
    </div>

    <script>
        function showRegister() {
            document.getElementById('loginForm').style.display = 'none';
            document.getElementById('registerForm').style.display = 'flex';
        }

        function showLogin() {
            document.getElementById('registerForm').style.display = 'none';
            document.getElementById('loginForm').style.display = 'flex';
        }

        function showForgotPassword() {
            alert('Funcionalidad de recuperación de contraseña\n(Implementar según tu lógica de Laravel)');
        }

        // Validación básica de formulario
        document.addEventListener('DOMContentLoaded', function() {
            const forms = document.querySelectorAll('form');
            
            forms.forEach(form => {
                form.addEventListener('submit', function(e) {
                    e.preventDefault();
                    
                    // Validaciones básicas
                    const inputs = form.querySelectorAll('input[required]');
                    let valid = true;
                    
                    inputs.forEach(input => {
                        if (!input.value.trim()) {
                            input.style.borderColor = '#e74c3c';
                            valid = false;
                        } else {
                            input.style.borderColor = '#e1e8ed';
                        }
                    });
                    
                    if (valid) {
                        alert('Formulario válido!\n(Conectar con tu lógica de Laravel)');
                    }
                });
            });
        });
    </script>
</body>
</html>