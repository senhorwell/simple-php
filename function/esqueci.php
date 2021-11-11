<?php
    session_start();
    $mail = new PHPMailer(true); 
    $mail->isSMTP(); 
    $mail->Host        = 'smtp.umbler.com'; 
    $mail->SMTPAuth = true; 
    $mail->Username = 'webmaster@fronte.net.br'; 
    $mail->Password = 'f?R6+}(4RgDo'; 
    $mail->SMTPSecure = 'tls'; 
    $mail->Port        = 587; 
    
    // Sender info  
    $mail->setFrom('webmaster@fronte.net.br', 'Simple'); 
    
    // Add a recipient  
    $mail->addAddress('wellingtonluiiiz@gmail.com', 'Simple');
    //$mail->addCC('odair@fronte.net.br','Odair Fronte');
    
    // Email subject  
    $mail->Subject = 'Novo Cadastro';  
    
    // Set email format to HTML  
    $mail->isHTML(true);  
    
    // Email body content  
    $mailContent = '  
        <h2>Dados do vendedor:</h2>  
        <p>Email:' . $_SESSION["email"] .'</p>' .
        '<p>Esqueceu a senha</p>';

        $mail->Body = $mailContent;  
    
    try{
        $mail->send();
        header("location: index.php");
    }
    catch (phpmailerException $e) {
        header("location: index.php");
    }
?>