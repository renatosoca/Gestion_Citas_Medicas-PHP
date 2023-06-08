<table>
<caption>Datos del Paciente</caption>
<tr>
    <th>ID</th>
    <th>Nombre</th>
    <th>Apellido Paterno</th>
    <th>Apellido Materno</th>
    <th>Especialidad</th>
    <th>Genero</th>
    <th>T_Doc</th>
    <th>Nr_Doc</th>
    <th>Telefono</th>
    
</tr>
<?php foreach($medico as $row) { ?>
 <tr>
    <td><?php echo $row->id; ?></td>
    <td><?php echo $row->Nombre; ?></td>
    <td><?php echo $row->Ape_Paterno; ?></td>
    <td><?php echo $row->Ape_Materno; ?></td>
    <td><?php echo $row->ID_Especialidad; ?></td>
    <td><?php echo $row->Genero; ?></td>
    <td><?php echo $row->T_Doc; ?></td>
    <td><?php echo $row->Nro_Doc; ?></td>
    <td><?php echo $row->Telefono; ?></td>
</tr>
    <?php } ?>
</table>