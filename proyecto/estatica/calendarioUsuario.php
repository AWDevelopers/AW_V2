<!DOCTYPE html>
<html>
<head>
    <title>Calendario Voluntarios</title>
    <link rel="stylesheet" type="text/css" href="css/estilos.css"/>
        <link rel="stylesheet" type="text/css" href="css/colorsandtext.css"/>
    <!--<link rel="stylesheet" type="text/css" href="css/calendario.css"/>-->

   
    <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
    <script src="js/voluntariado.js"></script>
</head>
<body>
    <div id="contenedor">
        <?php require ("common.php");?>

        <div class="contenido">
        <?php
        require_once "includes/ViewScripts/VoluntariosVista.php";
        $vista = new VoluntariosVista();
        $vista->muestraPanelVoluntariado($_GET['id']);
        ?>

               

        </div>
    </div>
</body>
</html>

