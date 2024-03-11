<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invitación Baby Shower</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        body {
            background: linear-gradient(135deg, #f3e5f5 0%, #9575cd 100%);
            font-family: 'Arial', sans-serif;
            animation: gradientBg 10s infinite alternate;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }

        @keyframes gradientBg {
            0% {
                background-position: 0% 50%;
            }

            100% {
                background-position: 100% 50%;
            }
        }

        .container {
            text-align: center;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.95);
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 600px;
        }

        .header {
            color: #6a1b9a;
            font-size: 2rem;
            margin-bottom: 20px;
        }

        .baby-images {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
        }

        .baby-image {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            margin: 0 10px;
            animation: bounce 1s infinite alternate;
        }

        @keyframes bounce {
            from {
                transform: translateY(0);
            }

            to {
                transform: translateY(-10px);
            }
        }

        .details {
            color: #4527a0;
            font-size: 1.2rem;
            margin-top: 20px;
        }

        .countdown {
            color: #4527a0;
            font-size: 1.8rem;
            margin-top: 20px;
        }

        .btn-confirm {
            background-color: #7e57c2;
            border-color: #7e57c2;
            padding: 10px 20px;
            font-size: 1.2rem;
            margin-top: 20px;
            transition: background-color 0.3s ease-in-out;
            cursor: pointer;
        }

        .btn-confirm:hover {
            background-color: #5e35b1;
        }

        .confirmation-form {
            display: none;
            margin-top: 30px;
        }

        .form-group {
            text-align: left;
            margin-top: 20px;
        }

        .alert {
            margin-top: 20px;
            display: none;
            animation: fadeIn 1s ease-out;
            color: #43a047;
            background-color: #e8f5e9;
            border: 1px solid #43a047;
            padding: 10px;
            border-radius: 5px;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @media (max-width: 768px) {
            .baby-image {
                width: 60px;
                height: 60px;
            }

            .header {
                font-size: 1.5rem;
            }

            .countdown {
                font-size: 1.5rem;
            }

            .btn-confirm {
                padding: 8px 16px;
                font-size: 1rem;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <h1 class="header">¡Bienvenido a nuestro Baby Shower!</h1>

        <div class="baby-images">
            <img src="{{ asset('baby.jpg') }}" alt="Mama Image" class="baby-image">
            <img src="{{ asset('baby.jpg') }}" alt="Mama Image" class="baby-image">
            <!-- Agrega más imágenes si lo deseas -->
        </div>

        <p>Estamos emocionados de celebrar la llegada de nuestra pequeña princesa. ¡Esperamos contar contigo!</p>
        <p class="details"><strong>Lugar:</strong> Salón de eventos "Felicidad"</p>
        <p class="details"><strong>Fecha y Hora:</strong> 20 de abril de 2024 a las 3:00 PM</p>

        <!-- Cuenta Regresiva -->
        <h2 class="countdown">Cuenta Regresiva</h2>
        <div id="countdown" class="countdown"></div>

        <!-- Botón de Confirmar Asistencia -->
        <button id="confirmBtn" class="btn btn-confirm" onclick="showConfirmationForm()">Confirmar Asistencia</button>

        <!-- Formulario de Confirmación de Asistencia -->
        <div id="confirmationForm" class="confirmation-form">
            <!-- Mensaje de confirmación -->
       <!-- Mensaje de confirmación de asistencia -->
<div id="confirmationAlert" class="alert alert-success">
    ¡Gracias por confirmar tu asistencia!
</div>

            <!-- Resto del formulario -->
            <form method="post" action="{{ route('confirmar-asistencia') }}" onsubmit="return confirmSubmit()">
                @csrf

                <div class="form-group">
                    <label for="nombre">Nombre:</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Tu Nombre" required>
                </div>

                <button type="submit" class="btn btn-confirm">Enviar Confirmación</button>
            </form>
        </div>
    </div>

    <script>
        // Cuenta regresiva
        const countdownDate = new Date("April 20, 2024 15:00:00").getTime();

        const x = setInterval(function () {
            const now = new Date().getTime();
            const distance = countdownDate - now;

            const days = Math.floor(distance / (1000 * 60 * 60 * 24));
            const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((distance % (1000 * 60)) / 1000);

            document.getElementById("countdown").innerHTML = days + "d " + hours + "h " +
                minutes + "m " + seconds + "s ";

            if (distance < 0) {
                clearInterval(x);
                document.getElementById("countdown").innerHTML = "¡El Baby Shower ha comenzado!";
            }
        }, 1000);

        // Función para mostrar mensaje de confirmación y ocultar formulario
        function confirmSubmit() {
            const confirmationForm = document.getElementById("confirmationForm");
            const confirmationMessage = document.getElementById("confirmationMessage");

            confirmationForm.style.display = "none";
            confirmationMessage.style.display = "block";

            return true; // Permite que el formulario se envíe
        }

        // Función para mostrar el formulario de confirmación
        function showConfirmationForm() {
            const confirmationForm = document.getElementById("confirmationForm");
            confirmationForm.style.display = "block";
        }
    </script>
</body>

</html>
