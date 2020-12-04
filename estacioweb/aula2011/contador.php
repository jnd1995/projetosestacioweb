<html>
<head>
<title>cookies, contador </title>
</head>
<body>
<?php
if (isset ($_COOKIE['contador'])){
    setcookie('contador', [$_COOKIE('contador')+1]);
}   
else{
    setcookie('contador', 1);
}  
echo " Vc visitou essa pagina foi.$_COOKIE['contador'].vezes"; 
?>
 </body>
</html>