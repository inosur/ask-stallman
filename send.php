<?php

if (isset($_POST['question'])) {

    $name = utf8_decode ($_POST['name']);
    $email = $_POST['email'];
    $question = utf8_decode ($_POST['question']);
    if ($email == '') {
      $email = 'info@matrproject.com';
    }

    $to = 'info@matrproject.com'; 

    $subject = 'Nueva Pregunta';

    $headers[] = 'MIME-Version: 1.0';
    $headers[] = 'Content-type: text/html; charset=iso-8859-1';

    $headers[] = 'From: '.$name.' <'.$email.'>';

    $message = '
    <html>
    <head>
      <title>Pregunta para Richard Stallman:</title>
    </head>
    <body>
      <p>Pregunta: '.$question.'</p>
      <br>
      <p>Nombre: '.$name.'</p>
      <br>
      <p>E-mail: '.$email.'</p>
      
    </body>
    </html>
    ';


    mail($to, $subject, $message, implode("\r\n", $headers));

}

header("Location:preguntas-ok.html");
?>