<?php
if(filter_has_var(INPUT_POST, 'submit')){
    $name = htmlentities($_POST['name']);
    $email = htmlentities($_POST['email']);
    $message = htmlentities($_POST['message']);
    if(!empty($name) && !empty($email) && !empty($message)){

    }else{
        echo'please fill the  from ';
    }
    if(filter_input(INPUT_POST, 'email',FILTER_VALIDATE_EMAIL===false)){

    }else{
        echo 'enter a valid email';
    }
    //recepient email
    $TO ='jeffjr2060@gmail.com';
    $subject = 'Contact Request Form'. $name;
    $body = '
             <h2>Contact Request</h2>
             <h4>name</h4><p>'.$name.'</p>
             <h4>email</h4><p>'.$email.'</p>
             <h4>message</h4><p>'.$message.'</p>
            ';
//emai headers
$headers ="MIME-version:1.0"."\r\n";
$headers = "Content.Type: text/html; charset=UTF-8"."\r\n";

//additional headers
$headers.="from:".$name."<".$email.">"."\r\n";

//mail function to send

if(mail($TO, $subject,$body, $headers)){
    //mail sent
}else{
    //alert
}

 
 }else{
    
 }





?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact form</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container" style=" background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url(background.jpg) center/cover no-repeat fixed; min-height: 100vh;">
        <div class="box">
            <span>Contact form</span>
            <hr id="indicator">
            <form method="$_POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">
                <input type="text" name="name" placeholder="enter name">
                <input type="email" name="email" placeholder="enter email">
                <textarea name="message" cols="30" rows="10" placeholder="message"></textarea>
                <button type="submit" name="submit">Submit</button>
            </form>
        </div>
    </div>
    
</body>
</html>