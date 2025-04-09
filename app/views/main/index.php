<?php
session_start();

// Configuración del enrutamiento
$controller = $_GET['controller'] ?? 'MainController'; // Controlador por defecto
$action = $_GET['action'] ?? 'index'; // Acción por defecto

$controllerClass = "Formacom\\Controllers\\{$controller}";

// Manejo de las rutas y ejecución del controlador
if (class_exists($controllerClass)) {
    $controllerInstance = new $controllerClass();
    if (method_exists($controllerInstance, $action)) {
        $controllerInstance->$action($_GET); // Pasa los parámetros a la acción del controlador
    } else {
        echo "Error: Acción '{$action}' no encontrada en el controlador '{$controller}'.";
    }
} else {
    echo "Error: El controlador '{$controller}' no existe.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
          integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">
</head>
<body>
    <div class="container">
        <h1>Admin Shop</h1>
        <div class="menu">
            <ul>
                <a href="<?= base_url() ?>provider">
                    <li>
                        <div>
                            <i class="fa-solid fa-3x fa-building"></i>
                            <p>Providers</p>
                        </div>
                    </li>
                </a>
                <a href="<?= base_url() ?>customer">
                    <li>
                        <div>
                            <i class="fa-solid fa-3x fa-circle-user"></i>
                            <p>Customer</p>
                        </div>
                    </li>
                </a>
                <a href="<?= base_url() ?>product">
                    <li>
                        <div>
                            <i class="fa-solid fa-3x fa-shop"></i>
                            <p>Products</p>
                        </div>
                    </li>
                </a>
                <a href="<?= base_url() ?>sale">
                    <li>
                        <div>
                            <i class="fa-brands fa-3x fa-salesforce"></i>
                            <p>Sales</p>
                        </div>
                    </li>
                </a>
            </ul>
        </div>
    </div>
</body>
</html>
