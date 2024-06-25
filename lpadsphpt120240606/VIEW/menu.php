<?php
  session_start(); 
   if (!isset($_SESSION['login']))
       Header("Location: ../index.php");   
?> 

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />



    <title>Detalhes de Equipamentos</title>
</head>

<body>
    <nav>
        <div class="nav-wrapper deep-purple accent-3">
            <a href="#" class="brand-logo right">
                <img src="/lpadsphpt1/lpadsphpt120240606/VIEW/images/Femalogo.png.png" alt=""
                width="130" height="65"> <span class="material-symbols-outlined"> person </span>  <?php echo $_SESSION['login']; ?>
            </a>
            <ul id="nav-mobile" class="left hide-on-med-and-down">
                <li><a href="/lpadsphpt1/lpadsphpt120240606/VIEW/menu.php">Menu</a></li>
                <li><a href="/lpadsphpt1/lpadsphpt120240606/VIEW/Departamento/lstDepartamento.php">Departamentos</a></li>
                <li><a href="/lpadsphpt1/lpadsphpt120240606/VIEW/Equipamento/lstEquipamento.php">Equipamentos</a></li>
                <li><a href="/lpadsphpt1/lpadsphpt120240606/VIEW/Inventario/lstInventario.php">Inventarios</a></li>
                <li><a href="/lpadsphpt1/lpadsphpt120240606/VIEW/logout.php">Logout</a></li>
            </ul>
        </div>
    </nav>
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="/view/js/materialize.js"></script>
    <script src="/view/js/init.js"></script>
 
</body>

</html>


