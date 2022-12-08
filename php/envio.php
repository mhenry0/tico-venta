<?php
$remitente = $_POST['correo'];
$destinatario = 'florymoravergel@gmail.com'; // en esta línea va el mail del destinatario.
$asunto = 'Mensaje enviado del Sitio Web'; // acá se puede modificar el asunto del mail
if (!$_POST){
?>

<?php
}else{
     
    $cuerpo = "Nombre: " . $_POST["nombre"] . "\r\n"; 
    $cuerpo .= "Email: " . $_POST["correo"] . "\r\n";
    $cuerpo .= "Detalle: " . $_POST["mensaje"] . "\r\n";
    //las líneas de arriba definen el contenido del mail. Las palabras que están dentro de $_POST[""] deben coincidir con el "name" de cada campo. 
    // Si se agrega un campo al formulario, hay que agregarlo acá.

    $headers  = "MIME-Version: 1.0\n";
    $headers .= "Content-type: text/plain; charset=utf-8\n";
    $headers .= "X-Priority: 3\n";
    $headers .= "X-MSMail-Priority: Normal\n";
    $headers .= "X-Mailer: php\n";
    $headers .= "From: \"".$_POST['nombre']." \" <".$remitente.">\n";

    mail($destinatario, $asunto, $cuerpo, $headers);
       $mensaje = "Mensaje enviado";
echo "<script>";
echo "alert('$mensaje');";  
echo "window.location = 'Index.html';";
echo "</script>";

}
?>
