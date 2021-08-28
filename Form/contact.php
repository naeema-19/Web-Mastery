<?php

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $mailForm = $_POST['mail'];
    $message = $_POST['message'];

    $mailTo = "naeemaziyad9@gmail.com";
    $headers = "From" .$mailForm;
    $txt = "You have a message " .$name."\n\n".$message;

    mail($mailTo, $name, $txt, $headers);
    header("Location: form.html?MessageSent")
}

?>
