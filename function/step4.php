<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
   require 'PHPMailer.php';
   require 'Exception.php';
   require 'SMTP.php';

    session_start();
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $mysqli = new mysqli("localhost","root","root","simple",3306);

        $obs = $_POST["obs"];

        $sql = "UPDATE user_informacoes SET obs = '$obs' WHERE id_user = 1";
        
        if ($mysqli->query($sql) === TRUE) {
            $mail = new PHPMailer(true); 
            $mail->isSMTP(); 
            $mail->Host        = 'smtp.gmail.com'; 
            $mail->SMTPAuth = true; 
            $mail->Username = 'wellingtonluiiiz@gmail.com'; 
            $mail->Password = 'Melancia0509!';
            $mail->SMTPSecure = 'tls'; 
            $mail->Port        = 587; 
            
            // Sender info  
            $mail->setFrom('wellingtonluiiiz@gmail.com', 'Simple'); 
            
            // Add a recipient  
            $mail->addAddress($_SESSION["email_client"] ? $_SESSION["email_client"] : 'wellingtonluiiiz@gmail.com', 'Cliente');
            //$mail->addCC('odair@fronte.net.br','Odair Fronte');
            
            // Email subject  
            $mail->Subject = 'Sua compra na Simple';  
            
            // Set email format to HTML  
            $mail->isHTML(true);  
            

            $sql = "SELECT * FROM user_produto where id_user = " . $_SESSION["id_client"];
            $result = $mysqli->query($sql);

            // Email body content  
            ob_start();
            //include 'email.html';
            $mailContent = '<html>
            <head>
            </head>
            <body id="mainbody">
              <div style="padding:0px; margin-bottom: 10px;display: flex;border-bottom: 1px solid grey;" >
                    <div style="width: 100%;">
                        <div style="float: left;">
                            <h3 style="color: #063549;font-size: 20px;">Seus pedidos</h3>
                        </div>
                        <div style="float: right;width: 100px;">
                            <img class="w-100" src="/public/img/svg/logo.svg" />
                        </div>
                    </div>
                </div>
                <div style="width: 100%;">
                    <table style="width: 100%;margin: 50px 0px;">
                        <thead>
                          <tr>
                            <th style="text-align: center;padding: 10px;">Produto</th>
                            <th style="text-align: center;padding: 10px;">Quantidade</th>
                            <th style="text-align: center;padding: 10px;">Valor Unitário</th>
                            <th style="text-align: center;padding: 10px;">Total</th>
                          </tr>
                        </thead>
                        <tbody>';
                
                        $total = 0;
                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                                $mailContent .= '<tr>';
                                    $mailContent .= '<td style="text-align: center;padding: 10px;">';
                                    $mailContent .= $row["descricao"];
                                    $mailContent .= '</td>';
                                    $mailContent .= '<td style="text-align: center;padding: 10px;">';
                                    $mailContent .= $row["qtd"];
                                    $mailContent .= '</td>';
                                    $mailContent .= '<td style="text-align: center;padding: 10px;">';
                                    $mailContent .= 'R$' . $row["valor_unitario"];
                                    $mailContent .= '</td>';
                                    $mailContent .= '<td style="text-align: center;padding: 10px;">';
                                    $mailContent .= 'R$' . intval($row["qtd"]) * intval($row["valor_unitario"]);
                                    $mailContent .= '</td>';
                                $mailContent .= '</tr>';
                                
                                $total += intval($row["qtd"]) * intval($row["valor_unitario"]);
                            }
                        }
                        $mailContent .= '<tr>
                            <td style="font-weight: bold;text-align: center;padding: 10px;" colspan="1">Total</td>
                            <td colspan="2"></td>
                            <td style="text-align: center;padding: 10px;" colspan="1">';
                        $mailContent .= 'R$' . $total . '</td>
                        </tr>
                        </tbody>
                      </table>
                </div>
        
                <div style="text-align: center;margin-bottom: 300px;">
                    <a href="http://localhost:8080/step5.php?email=' . $_SESSION["email_client"] ? $_SESSION["email_client"] : 'wellingtonluiiiz@gmail.com'. ' class="button" style="background: #063549 !important;color: white !important;border: none !important; padding: 10px 20px; border-radius: 5px;text-decoration: none;">Confirmar pedido</a>
                </div>
            </body>
        </html>';

            $mail->Body = $mailContent;
            try{
                $mail->send();
            }catch(Exception $e){
                echo "<pre>";
                print_r($e);
                exit();
            }

            header("location: fim-venda.php");
        } else {
            header("location: step4.php");
        }
        exit();
    }
?>