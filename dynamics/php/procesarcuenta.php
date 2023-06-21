<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "guapayasos";

// Crear una conexión
$conn = new mysqli($servername, $username, $password, $dbname);

function validarEntrada($dato) {
    $dato = trim($dato); // Eliminar espacios en blanco al inicio y al final
    $dato = stripslashes($dato); // Eliminar barras invertidas
    return $dato;
}

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión a la base de datos: " . $conn->connect_error);
}

// Obtener los datos del formulario
$nombres = $_POST['nombres'];
$numeroCuenta = $_POST['numeroCuenta'];
$correoElectronico = $_POST['correoElectronico'];
$contraseña = $_POST['contraseña'];
$apellidos = $_POST['apellidos']
// Preparar la consulta SQL para insertar los datos en la tabla de usuarios
$sql = "INSERT INTO usuarios (nombre, apellidos, numero_cuenta, correo_electronico, contraseña) VALUES ('$nombres', '$apellidos', '$numeroCuenta', '$correoElectronico', '$contraseña')";

// Ejecutar la consulta
if ($conn->query($sql) === TRUE) {
    echo "Cuenta creada exitosamente.";
} else {
    echo "Error al crear la cuenta: " . $conn->error;
}

// Cerrar la conexión a la base de datos
$conn->close();
?>
