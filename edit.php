<?php
	
	include 'dbconfig.php';
 
	$sql = "SELECT rowid, * FROM usuarios WHERE rowid = '".$_GET['id']."'";
	$query = $db->query($sql);
	$row = $query->fetchArray();
 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>LAB 3 DB CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<form method="POST">
    <br>
<a href="index.php"><button type="button" class="btn btn-outline-primary">Volver</button></a>
<br>
	<p>
        <div class="col-md-6">
        <label for="firstname" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="firstname" name="firstname" required value="<?php echo $row['firstname']; ?>">
        <div class="valid-feedback">
        </div>
	</p>
	<p>
        <div class="col-md-6">
        <label for="lastname" class="form-label">Apellido </label>
        <input type="text" class="form-control" id="lastname" name="lastname" required value="<?php echo $row['lastname']; ?>">
        <div class="valid-feedback">
        </div>
	</p>
	<p>
        <div class="col-md-6">
        <label for="address" class="form-label">Direccion </label>
        <input type="text" class="form-control" id="address" name="address" required value="<?php echo $row['address']; ?>">
        <div class="valid-feedback">
        </div>
	</p>
    <a href="index.php"><button type="submit"  name="save" class="btn btn-outline-success">Guardar</button></a>
</form>
<?php

if(isset($_POST['save'])){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $address = $_POST['address'];

    
    $sql = "UPDATE usuarios SET firstname = '$firstname', lastname = '$lastname', address = '$address' WHERE rowid = '".$_GET['id']."'";
    $db->exec($sql);

    header('location: index.php');
}
?>
</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>