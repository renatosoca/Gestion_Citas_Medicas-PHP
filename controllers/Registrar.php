<?php

require_once ("../controllers/PacienteController.php");


if ((isset($_POST['Nombre'])) && ($_POST['Nombre']!='')
&& (isset($_POST['apellido_Pat'])) &&($_POST['apellido_Pat']!='')
&& (isset($_POST['apellido_Mat'])) &&($_POST['apellido_Mat']!='')
&& (isset($_POST['Genero'])) &&($_POST['Genero']!='')
&& (isset($_POST['TipoDoc'])) &&($_POST['TipoDoc']!='')
&& (isset($_POST['num_doc'])) &&($_POST['num_doc']!='')
&& (isset($_POST['Fech_Naci'])) &&($_POST['Fech_Naci']!='')
&& (isset($_POST['num_tel'])) &&($_POST['num_tel']!='')
&& (isset($_POST['correo'])) &&($_POST['correo']!='')
&& (isset($_POST['contraseña'])) &&($_POST['contraseña']!='')){


    $Nombre=$_POST['Nombre'];
    $Ape_Materno=$_POST['apellido_Pat'];
    $Ape_Paterno=$_POST['apellido_Mat'];
    $Genero=$_POST['Genero'];
    $Tip_Doc=$_POST['TipoDoc'];
    $Nro_Doc=$_POST['num_doc'];
    $Fecha_Nacimiento=$_POST['Fech_Naci'];
    $Telefono=$_POST['num_tel'];
    $Correo=$_POST['correo'];
    $Contraseña=$_POST['contraseña'];
    $Estado="Activo";

    $Registar=new PacienteController();
    $Registar->setPaciente($Nombre,$Ape_Materno,$Ape_Paterno,$Genero,$Tip_Doc,$Nro_Doc,$Fecha_Nacimiento,$Telefono,
    $Correo,$Contraseña,$Nro_Doc,$Estado);


}

if (isset($_POST['btnIniciar'])) {
    
    $Contraseña=$_POST['contraseña'];
    $Usuario=$_POST['usuario'];

    $iniciar= new PacienteController();

    $iniciar->loginPaciente($Contraseña,$Usuario);

}
    

?>