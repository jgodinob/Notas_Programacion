<?php 
require_once 'includes/header.php'; 
include 'includes/connect.php';
?>
<?php 
// si el parámetro está no existe o está vacio o no es un número, me llevas a index.php
if(!isset($_GET["user_id"]) || empty($_GET["user_id"]) || !is_numeric($_GET["user_id"])){
	header("Location:index.php");
}

$id=$_GET["user_id"];
$user_query=mysqli_query ($db,"SELECT * FROM users WHERE user_id={$id}");
//var_dump (mysqli_fethc_assoc($user)); 
//muestra los datos del usuario sin necesidad de recorrer toda la tabla, es un array asociativo
$user=mysqli_fetch_assoc($user_query);
// si el parámetro está no existe o está vacio dentro del array asociativo me llevas a index.php
if(!isset($user["user_id"]) || empty($user["user_id"])){
	header("Location:index.php");
}
?>

<?php if($user["image"] != null){ ?>
<div class="col-lg-2">
		<img src="uploads/<?php echo $user["image"] ?>" width="120"/><br/>
</div>
<?php } ?>

<div class="col-lg-6">
	<h3><strong><?php echo $user["name"]." ".$user["surname"]; ?></strong></h3>
	<p>Email: <?php echo $user["email"]; ?></p>
	<p>Biografia: <?php echo $user["bio"]; ?></p>
</div>
<div class="clearfix"></div>
<!-- 
<a href="index.php" class="btn btn-success">Volver al listado</a>
-->
<?php require_once 'includes/footer.php'; ?>