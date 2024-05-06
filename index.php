<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>LAB 3 DB CRUD</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<br>
<a href="add.php"><button type="button" class="btn btn-outline-primary">Agregar Usuario</button></a>
<br>
<br>
<br>
<table class="table table-striped">
	<thead>
		<th>ID</th>
		<th>Nombre</th>
		<th>Apellido</th>
		<th>Direccion</th>
		<th>Accion</th>
	</thead>
	<tbody>
		<?php
			
			include 'dbconfig.php';
 
			
			$sql = "SELECT rowid, * FROM usuarios";
			$query = $db->query($sql);
 
			while($row = $query->fetchArray()){
				echo "
					<tr>
                    <td>".$row['rowid']."</td>
						<td>".$row['firstname']."</td>
						<td>".$row['lastname']."</td>
						<td>".$row['address']."</td>
						<td>
							<a href='edit.php?id=".$row['rowid']."'>Editar</a>
							<a href='delete.php?id=".$row['rowid']."'>Eliminar</a>
						</td>
					</tr>
				";
			}
		?>
	</tbody>
</table>
</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>