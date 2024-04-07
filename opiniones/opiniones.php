<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opiniones</title>

    <!-- Estilos CSS -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            margin: 0 auto;
            text-align: center;
        }

        h2 {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            text-align: left;
        }

        input,
        textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .estrellitas {
            font-size: 30px;
            margin-bottom: 20px;
            display: flex;
            justify-content: center;
        }

        .estrellita {
            display: inline-block;
            color: #ccc;
            /* Color de las estrellas inactivas */
            cursor: pointer;
        }

        .estrellita:hover,
        .estrellita:hover~.estrellita {
            color: gold;
            /* Color de las estrellas activas */
        }

        button {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-right: 10px;
        }

        button:hover {
            background-color: #0056b3;
        }

        button:last-child {
            margin-right: 0;
        }

        .pie-pagina {
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <!-- Formulario de opiniones -->
    <form action="enviar_op.php" method="post">
        <h2>DEJA TU OPINION AQUI!</h2>
        <!-- Campos del formulario -->
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" required><br>

        <label for="apellidos">Apellidos:</label>
        <input type="text" name="apellidos" required><br>

        <label for="email">Email:</label>
        <input type="email" name="email" required><br>

        <label for="telefono">Teléfono:</label>
        <input type="tel" name="telefono" required><br>

        <label for="asunto">Asunto:</label>
        <input type="text" name="asunto" required><br>

        <label for="mensaje">Mensaje:</label>
        <textarea name="mensaje" rows="4" required></textarea><br>

        <!-- Estrellas de calificación -->
        <div class="estrellitas">
            <span class="estrellita" data-calificacion="1">&#9733;</span>
            <span class="estrellita" data-calificacion="2">&#9733;</span>
            <span class="estrellita" data-calificacion="3">&#9733;</span>
            <span class="estrellita" data-calificacion="4">&#9733;</span>
            <span class="estrellita" data-calificacion="5">&#9733;</span>
        </div>

        <input type="hidden" name="calificacion" value="0">
        <!-- Botones del formulario -->
        <button type="submit">Guardar</button>
        <button type="reset">Reiniciar</button>
        <button type="button" onclick="window.history.back()">Cancelar</button>
    </form>

    <!-- Pie de página -->
    <div class="pie-pagina">
        <button onclick="window.location.href='ver_opiniones.php'">Ver opiniones</button>
    </div>
</body>

</html>