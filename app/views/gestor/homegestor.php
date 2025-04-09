<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestor - Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }

        .header {
            background-color: #007bff;
            color: white;
            padding: 20px;
            text-align: center;
        }

        .container {
            margin-top: 20px;
        }

        .card {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Bienvenido, Gestor</h1>
        <p>Panel principal</p>
    </div>

    <div class="container">
        <div class="row">
            <!-- Gestión de Usuarios -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Gestión de Usuarios</h5>
                        <p class="card-text">Añade, edita o elimina colaboradores del sistema.</p>
                        <a href="index.php?controller=UserController&action=index" class="btn btn-primary">Administrar Usuarios</a>
                    </div>
                </div>
            </div>

            <!-- Gestión de Proyectos -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Gestión de Proyectos</h5>
                        <p class="card-text">Administra los proyectos, asigna tareas y supervisa el progreso.</p>
                        <a href="index.php?controller=ProjectController&action=index" class="btn btn-primary">Administrar Proyectos</a>
                    </div>
                </div>
            </div>

            <!-- Gestión de Tareas -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Gestión de Tareas</h5>
                        <p class="card-text">Crea, edita o elimina tareas dentro de los proyectos.</p>
                        <a href="index.php?controller=TaskController&action=index" class="btn btn-primary">Administrar Tareas</a>
                    </div>
                </div>
            </div>

            <!-- Reportes -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Generación de Reportes</h5>
                        <p class="card-text">Genera reportes sobre el rendimiento y el estado de los proyectos.</p>
                        <a href="index.php?controller=ReportController&action=index" class="btn btn-primary">Ver Reportes</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
