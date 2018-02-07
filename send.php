<?php
 $destino="nicolas.senn90@gmail.com";
 $name=$_POST["name"];
 $email=$_POST["email"];
 $asunto=$_POST["asunto"];
 $message=$_POST["message"];
 $contenido="Nombre: ".$name."\nE-mail: ".$email."\nAsunto: ".$asunto."\nMensaje: ".$message;
 mail($destino,"Contacto", $contenido);
 header("Location: index.html");

?>