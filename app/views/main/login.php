<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <style>
        /* Estilo CSS integrado */

        /* Fondo decorativo */
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: url('<?=base_url()?>/assets/img/colored-pencils-background-with-space-for-text-vector.jpg') no-repeat center center fixed;
            background-size: cover;
            color: #333;
        }

        /* Contenedor principal */
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        /* Estilo del formulario */
        .login-form {
            background: rgba(255, 255, 255, 0.95);
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 350px;
        }

        h1 {
            font-size: 24px;
            margin-bottom: 20px;
            color: #444;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            font-size: 16px;
            margin-bottom: 5px;
            text-align: left;
        }

        input {
            padding: 10px;
            font-size: 14px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            outline: none;
            transition: border-color 0.2s ease;
        }

        input:focus {
            border-color: #007bff;
        }

        button {
            padding: 10px;
            background-color: #007bff;
            border: none;
            color: white;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #0056b3;
        }

        .register-link {
            margin-top: 15px;
        }

        .register-link p {
            margin: 0;
            font-size: 14px;
        }

        .register-link a {
            color: #007bff;
            text-decoration: none;
            font-weight: bold;
            margin-top: 5px;
            display: inline-block;
        }

        .register-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="login-form">
            <h1>Iniciar Sesión</h1>
            <form action="index.php?controller=MainController&action=processLogin" method="POST">
                <label for="email">Correo Electrónico:</label>
                <input type="email" id="email" name="email" placeholder="Ingresa tu correo" required>
                
                <label for="password">Contraseña:</label>
                <input type="password" id="password" name="password" placeholder="Ingresa tu contraseña" required>
                
                <button type="submit">Ingresar</button>
            </form>
            <div class="register-link">
                <p>¿No tienes cuenta?</p>
                <a href="<?=base_url()?>main/register">Registrarse</a>
            </div>
        </div>
    </div>
</body>
</html>


