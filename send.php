<?php
include ("conexion.php");
if (isset($_POST['send']))
{

    if(
        strlen($_POST ['name'])>= 1 &&
         strlen($_POST ['cedula'])>= 1 &&
          strlen($_POST ['email'])>= 1 &&
          strlen($_POST ['Fecha 1'])>= 1 &&
            strlen($_POST ['Fecha  2'])>= 1 &&
               strlen($_POST ['eps'])>= &&
                 strlen($_POST ['Tipo-cita'])>= 1 &&
                 strlen($_POST ['Turno-medicamentos'])>= 1 &&


    ){
        $name = trim ($_POST['name']);
         $cedula = trim ($_POST['cedula']);
          $email = trim ($_POST['email']);
           $Fecha1 = date (d/m/y);
            $Fecha2 = date (d/m/y);
             $eps = trim ($_POST['eps']);
              $Tipo-cita = trim ($_POST['Tipo-cita']);
               $Turno-medicamentos = trim ($_POST['Turno-medicamentos']);
                $Fecha = date (d/m/y);
                $consulta = "INSERT INTO" datos(nombre,cedula,email,Fecha1, Fecha2, eps,Tipo de cita,turno-medicamentos)
                VALUES ('$nombre','$cedula','$correo','$Fecha 1', '$Fecha 2', '$EPS','$Tipo de cita' 'Turno de medicamentos',)'';
                $resultado mysqlite_querry($conex,$consulta);
                if($resultado){
                ?>
                <h3 class= "success">Tu registro se a completado</h3>
                 <?php

                 }else {

                   ?>
                <h3 class= "error">Ocurrio un error</h3>
                 <?php

                 } else {

                   ?>
                <h3 class= "error">Llena todo los campos</h3>
                 <?php

                 }

    }
}
?>
