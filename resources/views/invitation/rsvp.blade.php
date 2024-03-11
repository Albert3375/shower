<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmar Asistencia</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Confirmar Asistencia</h2>
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <p>¡Gracias por confirmar tu asistencia! Esperamos verte en el Baby Shower.</p>
    </div>
</body>
</html>
