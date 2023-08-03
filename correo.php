<?php


if(isset($_POST['enviar'])){
    if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['comment'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $comment = $_POST['comment'];
        $destinatario="monkeyamazingmeomak@gmail.com";
        $header = "Enviado desde la pagina creada de Monkey Amazing S.A de C.v" . "\r\n";
       
        $mail = mail ($name, $email, $comment, $header, $destinatario);
        if ($mail){
            echo "<h4>'Correo Enviado'</h4>)";
        }
    }

}

?>