<?php 
include("conexion.php");
$usuarios="SELECT * FROM paciente";
header("Content-Type: application/xls; charset=iso-8859-1");
header("Content-Disposition: attachment; filename=datos-citas.xls");
?>
<table>
<caption>Datos del Paciente</caption>
<tr>
    <th>ID_paciente</th>
    <th>ID_medico</th>
    <th>ID_horario</th>
    <th>Area</th>
    
    
</tr>
<?php $resultado = mysqli_query($conexion, $usuarios);
while ($row = mysqli_fetch_assoc($resultado)) { ?>
 <tr>
    <td><?php echo $row["ID_Paciente"]; ?></td>
    <td><?php echo $row["ID_Medico"]; ?></td>
    <td><?php echo $row["ID_Horario"]; ?></td>
    <td><?php echo $row["Area"]; ?></td>
</tr>
    <?php } mysqli_free_result($resultado);?>
</table>