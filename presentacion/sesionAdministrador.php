
<?php
    include "presentacion/menuAdministrador.php";
    $administrador = new Administrador($_SESSION["id"]);
    $administrador->consultar();
?>




<main class="bg-primary">

    <h1 class="text-center text-3xl text-gray-800 font-bold "> Bienvenido <?php echo " {$administrador->getNombre()}  {$administrador->getApellido()}" ?></h1>
    <h3 class="text-center text-gray-500 "><?php echo "Su correo es {$administrador->getCorreo()}"?></h3>



</main>



