<?php 
include("conexion.php");
$usuarios="SELECT * FROM medico";
header("Content-Type: application/xls; charset=iso-8859-1");
header("Content-Disposition: attachment; filename=datos-medicos.xls");
?>
<table>
<caption>Datos del Paciente</caption>
<tr>
    <th>ID_Medico</th>
    <th>Nombre</th>
    <th>Apellido Paterno</th>
    <th>Apellido Materno</th>
    <th>Genero</th>
    <th>T_Doc</th>
    <th>Nr_Doc</th>
    <th>Telefono</th>
    
    
</tr>
<?php $resultado = mysqli_query($conexion, $usuarios);
while ($row = mysqli_fetch_assoc($resultado)) { ?>
 <tr>
    <td><?php echo $row["id"]; ?></td>
    <td><?php echo $row["Nombre"]; ?></td>
    <td><?php echo $row["Ape_Paterno"]; ?></td>
    <td><?php echo $row["Ape_Materno"]; ?></td>
    <td><?php echo $row["Genero"]; ?></td>
    <td><?php echo $row["T_Doc"]; ?></td>
    <td><?php echo $row["Nro_Doc"]; ?></td>
    <td><?php echo $row["Telefono"]; ?></td>
</tr>
    <?php } mysqli_free_result($resultado);?>
</table>