<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>usuarios</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

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
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>

    <div class="container">
        <form action="clientes2.php" method="post">
            <div class="form-group">
                <label for="">Nombre</label>
                <input type="text" class="form-control" name="nombre" id="">
            </div>
            <select class="form-select" aria-label="Default select example" name="sexo">
                <option selected>selecciona tu sexo</option>
                <option value="1">femenino</option>
                <option value="2">masculino</option>
                <option value="3">no decirlo</option>
            </select>

            <select class="form-select" aria-label="Default select example" name="depar">
                <option selected>selecciona tu departamento</option>
                <option value="1">Sonsonate</option>
                <option value="2">La Libertad</option>
                <option value="3">San Miguel</option>
                <option value="4">Morazan</option>
                <option value="5">San Salvador</option>
                <option value="6">La Union</option>
                <option value="7">San Vicente</option>
            </select>
            <div class="form-group">
                <label for="">Edad</label>
                <input type="number" class="form-control" name="edad" id="">
            </div>
            <div class="form-group">
                <label for="">Credito</label>
                <input type="text" class="form-control" name="credito" id="">
            </div>
            <button type="submit" class="btn btn-success">Guardar</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
</body>

</html>