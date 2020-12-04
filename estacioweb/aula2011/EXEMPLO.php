<?php session_start();?>
<html>
<head>
<title>Sessoes</title>
</head>
<body>
<?php
if (!isset ($_SESSION['visistas']))
$_SESSION['visitas']= 0;
?>
Esta e a pagina visita numero
<?php echo $_SESSION['visitas']++ ?>
<?php 
echo session_id(); 

session_regenerate_id();
?>

</html>