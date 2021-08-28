<?php 

    if(isset($_POST['submit']))
    {
       $name = $_POST['name'];
       $email = $_POST['email'];
       $subject = $_POST['subject'];
       $Msg = $_POST['messge'];

       if(empty($name) || empty($email) || empty($subject) || empty($Msg))
       {
           header('location:index.php?error');
       }
       else
       {
           $to = "naeemaziyad9@gmail.com";

           if(mail($to,$Subject,$Msg,$Email))
           {
               header("location:index.php?success");
           }
       }
    }
    else
    {
        header("location:index.php");
    }
?>
