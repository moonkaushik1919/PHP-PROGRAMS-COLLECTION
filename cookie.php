<?php
setcookie("user", "Chhavi",time()+30*24*60*60);
if(isset($_COOKIE["username"])){
echo"Hi".$_COOKIE["username"];
}else{
echo("Welcome guest");
}
?>