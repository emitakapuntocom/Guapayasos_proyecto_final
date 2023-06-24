<?php
    //CONEXION PHP-DB
    require "guardatos.php";
    $conexion= connect();

    //TERNARIOS 
    $nombre = (isset($_POST["usuario"]) && $_POST["usuario"] != "")? $_POST["usuario"]: false;
    $apellidos = (isset($_POST["apellidos"]) && $_POST["apellidos"] != "")? $_POST["apellidos"]: false;
    $no_cuenta = (isset($_POST["no_cuenta"]) && $_POST["no_cuenta"] != "")? $_POST["no_cuenta"]: false; 
    $telefono = (isset($_POST["no_tel"]) && $_POST["no_tel"] != "")? $_POST["no_tel"]: false;
    $contraseña = (isset($_POST["contraseña"]) && $_POST["contraseña"] != "")? $_POST["contraseña"]: false;
    $foto = (isset($_POST["PFP"]) && $_POST["PFP"] != "")? $_POST["PFP"]: false;
    $turno = (isset($_POST["turno"]) && $_POST["turno"] != "")? $_POST["turno"]: false;
    $grado = (isset($_POST["grado"]) && $_POST["grado"] != "")? $_POST["grado"]: false;

    //REGEX
    /*Para no_cuenta*/$miregex1= "/^3(21|22|23)[0-9]{6}/";
    /*Para teléfono*/$miregex2= "/^55[0-9]{8}/";
    /*Para contraseña*/$miregex3= "/[A-z 0-9 \W]{8,}/";

    $respuesta = " ";

    //FILTROS
    if($no_cuenta)
    {
        if(preg_match($miregex1, $no_cuenta))
        {
            $sql = "SELECT ID_usuario FROM usuarios WHERE ID_usuario LIKE '$no_cuenta'";//Peticion a la DB
            $query = mysqli_query($conexion, $sql);//Conexion
            $datos = mysqli_fetch_assoc($query);

            if(!$datos)
            {
                $no_cuenta_clean = filter_var($no_cuenta, FILTER_SANITIZE_NUMBER_INT);//Sanitización de entradas
                
                if($nombre && $apellidos && $turno && $grado && $foto)
                {
                    $nombre_clean = filter_var($nombre, FILTER_SANITIZE_STRING);
                    $apellidos_clean = filter_var($apellidos, FILTER_SANITIZE_STRING);

                    if($telefono)
                    {
                        if(preg_match($miregex2, $telefono))
                        {
                            $telefono_clean = filter_var($telefono, FILTER_SANITIZE_NUMBER_INT);
                            
                            if($contraseña)
                            {
                                if(preg_match($miregex3, $contraseña))
                                {
                                    //HASHEO
                                    $sal=uniqid();
                                    
                                    $caracteres = str_split("ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz");
                                    $partes_pimienta= array_rand($caracteres,2);
                                    $p1 = $caracteres[$partes_pimienta[0]];
                                    $p2 = $caracteres[$partes_pimienta[1]];
                                    $pimienta = $p1.$p2;
                                    
                                    $contraHash=hash("SHA256", $contraseña);
 
                                    $help = $contraHash.$pimienta.$sal;

                                    $sql2 = "INSERT INTO usuarios (ID_usuario, nombre, foto_perfil, apellidos, grupo, turno, numero_contacto, contraseña, rol) VALUES ('$no_cuenta_clean', '$nombre_clean', '$foto', '$apellidos_clean', '$grado', '$turno', $telefono, '$help', 1)";
                                    $query2 = mysqli_query($conexion,$sql2);

                                }else
                                    {
                                        $respuesta= array("mensaje" => "Contraseña no válida");
                                    }

                            }else   
                                {
                                    $respuesta= array("mensaje" => "Por favor ingresa una contraseña");
                                }
                        }else   
                            {
                                $respuesta= array("mensaje" => "Número de contacto no válido");
                            }

                    }else
                        {
                            $respuesta= array("mensaje" => "Por favor ingresa un número de contacto");
                        }

                }elseif(!$nombre)
                {
                    $respuesta= array("mensaje" => "Por favor ingresa tu nombre");

                }elseif(!$apellidos)
                {
                    $respuesta= array("mensaje" => "Por favor ingresa tus apellidos");

                }elseif(!$turno)
                {
                    $respuesta= array("mensaje" => "Por favor ingresa tu turno");

                }elseif(!$grado)
                {
                    $respuesta= array("mensaje" => "Por favor ingresa tu grado");

                }elseif(!$foto)
                {
                    $respuesta= array("mensaje" => "Selecciona una foto de perfil");
                }
    

            }else 
                {
                    $respuesta= array("mensaje" => "Este usuario ya existe");
                }

        }else
            {
                $respuesta= array("mensaje" => "Número de cuenta no válido");
            }

    }else
        {
            $respuesta= array("mensaje" => "Por favor ingresa tu número de cuenta");
        }

    echo json_encode($respuesta);

?>