<?php
session_start();
$nombre = $_SESSION["usuario"];
include("conexion.php");
$consultaUsuario="SELECT * FROM usuario where '$nombre' = DOCUMENTO";
$resultado=mysqli_query($link,$consultaUsuario); 
$row=(mysqli_fetch_assoc($resultado));
$nombreUsuario=$row['NOMBRES'];
$apellidoUsuario=$row['APELLIDOS'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CJS</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="menu">
        <ion-icon name="menu-outline"></ion-icon>
        <ion-icon name="close-outline"></ion-icon>
    </div>

    <div class="barra-lateral">
        <div>
            <div class="nombre-pagina">
                <img src="../Imagenes/logo (2).png" alt="" width="30%">
                <span>CJS</span>
            </div>
           
        </div>

        <nav class="navegacion">
            <ul>
                <li>
                    <a id="inbox" href="Perfil.html">
                        <ion-icon name="mail-unread-outline"></ion-icon>
                        <span>Perfil</span>
                    </a>
                </li>
                <li>
                    <a href="Asignaturas.html">
                        <ion-icon name="star-outline"></ion-icon>
                        <span>Asignaturas</span>
                    </a>
                </li>
                <li>
                    <a href="Asistencias.html">
                        <ion-icon name="paper-plane-outline"></ion-icon>
                        <span>Asistencias</span>
                    </a>
                </li>
                <li>
                    <a href="Notas.html">
                        <ion-icon name="document-text-outline"></ion-icon>
                        <span>Notas</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <ion-icon name="bookmark-outline"></ion-icon>
                        <span>Important</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <ion-icon name="alert-circle-outline"></ion-icon>
                        <span>Spam</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <ion-icon name="trash-outline"></ion-icon>
                        <span>Trash</span>
                    </a>
                </li>
            </ul>
        </nav>

        <div>
            <div class="linea"></div>

            <div class="modo-oscuro">
                <div class="info">
                    <ion-icon name="moon-outline"></ion-icon>
                    <span>Drak Mode</span>
                </div>
                <div class="switch">
                    <div class="base">
                        <div class="circulo">
                            
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="usuario">
                <img src="../Imagenes/profile.jpg" alt="">
                <div class="info-usuario">
                    <div class="nombre-email">
                        <span class="nombre"><?php echo $nombreUsuario?></span>
                        <span class="email"><?php echo $correoUsuario?></span>
                    </div>
                    <ion-icon name="ellipsis-vertical-outline"></ion-icon>
                </div>
            </div>
        </div>

    </div>


    <main>
        <h1>Perfil</h1>
        <span class="nav_image">
            <img src="../Imagenes/profile.jpg"logo_img" width="15%" />
          </span>
          <center><h1>Colegio Codema IED </h1></center>
        <br>
        <br>
        <P>Nombres: <?php echo $nombreUsuario?></P>
        <br>
        <p>Apellidos: <?php echo $apellidoUsuario?></p> 
        <br>
        <p>Numero de documento: <?php echo $documentoUsuario?></p>
        <br>
        <p>Direccion: <?php echo $direccionUsuario?></p>
        <br>
        <p>Celular: <?php echo $celularUsuario?></p>
        <br>
        <p>Genero: <?php echo $generoUsuario?></p>
        <br>
        <p>Correo: <?php echo $correoUsuario?></p>
        </main>


    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="/script.js"></script>
</body>
</html>