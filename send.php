<?php
$server = 'localhost:3306';
$username = 'root';
$password = '';
$database = 'tucita';

try {
    $con = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        // Ver los datos que llegan del formulario
       

        $nombre = trim($_POST["nombre"]);
        $cedula = trim($_POST["cedula"]);
        $telefono = trim($_POST["telefono"]);
        $correoInput = trim($_POST["correo"]);
        $correo = $correoInput !== '' ? $correoInput : null;
        $fecha1 = $_POST["fecha1"];
        $fecha2 = $_POST["fecha2"];
        $eps = $_POST["eps"];
        $tipo_cita = $_POST["tipo_cita"];
        $turno_medicamentos = $_POST["turno_medicamentos"];

        $sql = "INSERT INTO user (name, cedula, telefono, correo, fecha1, fecha2, eps, tipo_cita, turno_medicamentos)
                VALUES (:nombre, :cedula, :telefono, :correo, :fecha1, :fecha2, :eps, :tipo_cita, :turno_medicamentos)";

        $stmt = $con->prepare($sql);
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':cedula', $cedula);
        $stmt->bindParam(':telefono', $telefono);
        $stmt->bindParam(':correo', $correo);
        $stmt->bindParam(':fecha1', $fecha1);
        $stmt->bindParam(':fecha2', $fecha2);
        $stmt->bindParam(':eps', $eps);
        $stmt->bindParam(':tipo_cita', $tipo_cita);
        $stmt->bindParam(':turno_medicamentos', $turno_medicamentos);


        if ($stmt->execute()) {
            echo "✅ Datos insertados correctamente.";
        } else {
            echo "❌ Error al insertar los datos.";
        }
    }

} catch (PDOException $e) {
    echo "❌ Error de conexión: " . $e->getMessage();
}
?>


