<?php
  use PHPMailer\PHPMailer\PHPMailer;

  

  if(isset($_POST['email'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $message=$_POST['message'];

  require_once 'PHPMailer/Exception.php';
  require_once 'PHPMailer/PHPMailer.php';
  require_once 'PHPMailer/SMTP.php';

  $mail = new PHPMailer(true);
  

  
    $mail->isSMTP();
    $mail->Host='smtp.gmail.com';
    $mail->Username = 'example@gmail.com';
    $mail->Password = '';
    $mail->SMTPAuth = true; 
    $mail->CharSet = 'UTF-8'; 
    $mail->Port='587';
    $mail->SMTPSecure= PHPMailer::ENCRYPTION_STARTTLS;

    $mail->isHTML(true);
    $mail->setFrom('example@gmail.com',$name);
    $mail->addAddress('example@gmail.com');
    $mail->Subject = 'ZSIVÁNY üzleti';
    $mail->Body = 'From: '.$name.'<br><br>'.$message.'<br><br>Email: '.$email;
    if($mail->send()){
      $status="success";
      $response="emailt elkuldtuk";
    }else{
      $status='failed';
      $response='Hiba történt!!';
      $mail->ErrorInfo;
    }
    exit(json_encode(array("status"=>$status,"response"=>$response)));
    
}

?>
