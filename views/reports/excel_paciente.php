<table>
<caption>Datos del Paciente</caption>
<tr>
    <th>ID_paciente</th>
    <th>Nombre</th>
    <th>Apellido Paterno</th>
    <th>Apellido Materno</th>
    <th>Edad</th>
    <th>Genero</th>
    <th>T_Doc</th>
    <th>Nr_Doc</th>
    <th>Fecha de Nacimiento</th>
    <th>Telefono</th>
    
</tr>
<?php foreach($paciente as $row) { ?>
 <tr>
    <td><?php echo $row->id; ?></td>
    <td><?php echo $row->Nombre; ?></td>
    <td><?php echo $row->Ape_Paterno; ?></td>
    <td><?php echo $row->Ape_Materno; ?></td>
    <td><?php echo $row->Edad; ?></td>
    <td><?php echo $row->Genero; ?></td>
    <td><?php echo $row->T_Doc; ?></td>
    <td><?php echo $row->Nr_Doc; ?></td>
    <td><?php echo $row->Fecha_Nacimiento; ?></td>
    <td><?php echo $row->Telefono; ?></td>
</tr>
    <?php } ?>
</table>