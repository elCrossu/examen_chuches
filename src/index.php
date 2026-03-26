<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Gestión de Chucherías</title>
    <link rel="stylesheet" href="estilos.css">
</head>

<body>

    <h1 class="titulo-principal">Tienda de Chucherías</h1>
    <h2 class="subtitulo-autor">CIFP Txurdinaga - Raul Perancho Nieto</h2>

    <div class="caja-formulario">
        <h2>Añadir o Modificar Producto</h2>
        <form action="procesar.php" method="POST">

            <div class="grupo-formulario">
                <label class="etiqueta-formulario" for="id">ID (Opcional - Solo para modificar):</label>
                <input class="entrada-datos" type="number" id="id" name="id" placeholder="Ej: 1">
            </div>

            <div class="grupo-formulario">
                <label class="etiqueta-formulario" for="nombre">Nombre de la chuche:</label>
                <input class="entrada-datos" type="text" id="nombre" name="nombre" required>
            </div>

            <div class="grupo-formulario">
                <label class="etiqueta-formulario" for="info">Información (Ingredientes):</label>
                <input class="entrada-datos" type="text" id="info" name="info" required>
            </div>

            <div class="grupo-formulario">
                <label class="etiqueta-formulario" for="precio">Precio:</label>
                <input class="entrada-datos" type="number" id="precio" name="precio" step="0.01" required>
            </div>

            <button class="boton boton-guardar" type="submit">Guardar Datos</button>
        </form>
    </div>

    <div class="contenedor-botones">
        <a class="boton boton-enlace-bd" href="ver_productos.php">Ver Productos (Base de Datos)</a>
        <a class="boton boton-enlace-csv" href="ver_historico.php">Ver Histórico (CSV)</a>
    </div>

</body>

</html>