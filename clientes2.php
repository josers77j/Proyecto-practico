<?php
$nom =  $_POST["nombre"];
$sexo =  $_POST["sexo"];
$dep =  $_POST["depar"];
$ed =   $_POST["edad"];
$cred = $_POST["credito"];
//si el cliente es mayor de 40 y pide un credito de 10k sera 1000 dolares 
//si es meor de 40 y mayor de 25 se le otorga el credito de 10k
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>usuarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Team Cherry</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="principal.php">Inicio <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="clientes.php">Clientes</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Configuracion
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Perfil</a>
                        <a class="dropdown-item" href="#">Seguridad</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">permisos</a>
                        <a class="dropdown-item" href="usuarios.php">Usuarios</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">cerrar sesion</a>
                </li>
            </ul>
      
        </div>
    </nav>

    <div class="container">
        <table class="table">
            <tr>
                <th>Nombre</th>
                <th>Sexo</th>
                <th>Edad</th>
            </tr>
            <tr>
                <td><?=$nom?></td>
                <td><?=$sexo?></td>
                <td><?=$ed?></td>
            </tr>
            
        </table>
        <?php 
            if($ed > 40){
                echo '<p class="badge bg-primary text-wrap ">Solicitud de credito por el monto de $' . $cred . ' denegada, solamente puede optar por un credito mayor a $1000 </p>';
                }
                else if($ed > 25 && $ed <= 40){
                    echo '<p class"badge bg-success text-wrap">Solicitud de credito por el monto de $' . $cred . ' "aprobada" </p>';
                }
                else{
                    echo "su rango de edad no cumple los requisitos para un credito";
                }
            ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
</body>

</html>