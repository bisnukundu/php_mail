<?php
if (isset($_REQUEST["submit"])) {
    $email ="From:".$_REQUEST["email"] . "\r\r";
    $subject = $_REQUEST["subject"];
    $message = $_REQUEST["message"];
    if(mail("bisnukundu@gmail.com",$subject,$message,$email)){
        echo "Email Sent";
    }else{
        echo "Email Not Sent";
    }
    
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bisnu-Mail</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form class="form-group" action="" method="post">
                    <label for="email">Email</label>
                    <input name="email" type="email" class="mb-4 form-control" placeholder="Email">
                    <label for="subject">Subject</label>
                    <input name="subject" type="text" class="mb-4 form-control" placeholder="Subject">
                    <label for="message">Message</label>
                    <textarea name="message" class="mb-4 form-control" cols="30" rows="10"></textarea>
                    <input type="submit" class="btn btn-success" value="Send" name="submit">
                </form>
                <div class="display-4 text-center" style="font-family:gabriola">
                   Created by Bisnu kundu
                </div>
            </div>
        </div>
    </div>

</body>

</html>