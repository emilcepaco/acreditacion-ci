<!--      //     Conectar Igualdad Jujuy - 2015                            CCCCC  IIIII    JJJJJ -->
<!--      l->                                                              C        I        J   -->
<!--      ll     Autores:                                                  C        I        J   -->
<!--  {   ll            * Roxana Emilce Paco: emilcepaco@gmail.com         C        I        J   -->
<!--  llllll            * Cristian Damián Cazón: cristiancazon@gmail.com   C        I    J   J   -->
<!--  ||  ||     Licencia GPLv3                                            C        I    J   J   -->
<!--  ''  ''                                                               CCCCC  IIIII  JJJJJ   -->

<html> 
<head>
<link href="estilo.css" rel="stylesheet" type="text/css">
</head>
<body class="subtitulo">
<?php
require_once ('includemysql.php');
$result = mysql_query("SELECT * FROM persona p join establecimiento e WHERE p.cue=e.cue");  
echo "<h3>Listado Completo</h3> \n";
$cont = 0;
if ($row = mysql_fetch_array($result)){ 
      echo "<table border = '1'> \n"; 
//Mostramos los nombres de las tablas 
		echo "<tr bgcolor=#79bbff>
					<td>DNI</td>
					<td>Apellido y Nombre</td>
					<td>CUE</td>
					<td>Establecimiento</td>
					<td>1er / M</td>
					<td>1er / T</td>
					<td>2do / M</td>
					<td>2do / T</td>
				</tr>";
      do { 
            echo "<tr> \n"; 
            echo "<td>".$row["id"]."</td> \n"; 
            echo "<td>".$row["nombre"]."</td> \n"; 
            echo "<td>".$row["cue"]."</td> \n";
            echo "<td>".$row["nom_establecimiento"]."</td> \n"; 
            if($row['estado']=='ausente') {
            echo "<td bgcolor=#ff9966>".$row["estado"]."</td> \n"; }
            else {echo "<td bgcolor=#33ff33>".$row["estado"]."</td> \n"; };
            if($row['est2']=='ausente') {
            echo "<td bgcolor=#ff9966>".$row["est2"]."</td> \n"; }
            else {echo "<td bgcolor=#33ff33>".$row["est2"]."</td> \n"; };
            if($row['est3']=='ausente') {
            echo "<td bgcolor=#ff9966>".$row["est3"]."</td> \n"; }
            else {echo "<td bgcolor=#33ff33>".$row["est3"]."</td> \n"; };
            if($row['est4']=='ausente') {
            echo "<td bgcolor=#ff9966>".$row["est4"]."</td> \n"; }
            else {echo "<td bgcolor=#33ff33>".$row["est4"]."</td> \n"; };
            echo "</tr> \n"; 
            $cont++;
      } while ($row = mysql_fetch_array($result)); 
            echo "</table> \n";
            echo "<p>Cantidad de registros: $cont</p>"; 
} else { 
echo "No se ha encontrado ning&uacute;n registro."; 
} 
?>
</body> 
</html> 