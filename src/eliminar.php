<?php
require_once 'conexion.php';

class Log
{
    private static function obtenerRuta()
    {
        $directorio = __DIR__ . '/logs';
        if (!is_dir($directorio)) {
            mkdir($directorio, 0777, true);
        }
        return $directorio . '/registro_app.log';
    }

    public static function debug($mensaje)
    {
        file_put_contents(self::obtenerRuta(), date('Y-m-d H:i:s') . " [DEPURACIÓN] " . $mensaje . PHP_EOL, FILE_APPEND);
    }

    public static function error($mensaje)
    {
        file_put_contents(self::obtenerRuta(), date('Y-m-d H:i:s') . " [ERROR] " . $mensaje . PHP_EOL, FILE_APPEND);
    }
}

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];

    try {
        $sql = "DELETE FROM chuches WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([':id' => $id]);

        Log::debug("Éxito: Se ha borrado de la base de datos la chuchería correspondiente al ID $id.");
    } catch (PDOException $e) {
        Log::error("Fallo al intentar borrar la chuchería con ID $id: " . $e->getMessage());
    }
}

header("Location: ver_productos.php");
exit();
