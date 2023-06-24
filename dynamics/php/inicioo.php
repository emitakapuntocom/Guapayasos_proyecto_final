<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="../statics/media/Imágenes/logo.png" href="../statics/media/Imágenes/logo.png" size="32x32">
    <title>Red Social de la Prepa</title>
</head>
<body>
    <table border="1" align="center" width="300">
        <thead>
            <th>
                <img src="../statics/media/Imágenes/logo.png" alt="logo" height="128" widht="128">
            </th>
        </thead>
        <tbody align="center">
            <td>
                <form action="../dynamics/php/guardatos.php" method="post">
                    <label for="nombre" required"">Nombre:</label><br>
                    <input type="text" name="Nombre de usuario" id="nombre" placeholder="Introduce el nombre con el que quieres que se te conozca">          
        
                    <br><br>

                    <label for="usuario">Introduce nombre de usuario:</label><br>
                    <input type="text" name="Usuario" id="usuario" placeholder="Introduce un nombre o apodo">

                    <br><br>

                    <label for="correo">Correo electrónico:</label><br>
                    <input type="email" name="correo" id="correo" placeholder="Introduce una dirección de correo electrónico válida">

                    <br><br>

                    <label for="contra">Crea una contraseña:</label>
                    <input type="password" name="contra" id="contra" placeholder="Introduce una contraseña">

                    <br><br>

                    <label for="confcontra">Confirmar contraseña:</label>
                    <input type="password" name="contra2" id="confcontra" placeholder="Reintroduce la contraseña">

                    <br><br>

                    <button type="submit">¡Crear cuenta!</button>
                </form>
            </td>
        </tbody>
        <tbody align="center">
            <td>
                ¿Ya tienes una cuenta?
                <br>
                <a href="https://www.youtube.com">¡Haz click aquí!</a>
            </td>

        </tbody>
    </table>
</body>
</html>