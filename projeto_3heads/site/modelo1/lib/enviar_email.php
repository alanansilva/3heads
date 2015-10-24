<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
header("Content-Type: text/html;  charset=ISO-8859-1", true);
ob_start();

require_once './conn.php';
require_once '../../../sis_3heads/lib/php/class.phpmailer.php';

$mail = new PHPMailer();

extract($_REQUEST);

UtilString::pr($_REQUEST);
?>
<table>
    <tr>
        <td>
            Nome:
        </td>
        <td>
            <?php echo a ?>
        </td>
    </tr>
    <tr>
        <td>
            E-mail:
        </td>
        <td>
            <?php echo  a?>
        </td>
    </tr>
    <tr>
        <td>
            Assunto:
        </td>
        <td>
            <?php echo a  ?>
        </td>
    </tr>
    <tr>
        <td>
            Mensagem:
        </td>
        <td>
            <?php echo dd ?>
        </td>
    </tr>
<!--    <tr>
        <td>
            Pacote indicado:
        </td>
        <td>
            <a href="<?php //echo $url_enviar_email?>">
                <?php// echo $objPacote['nome'] ?>
            </a>
        </td>
    </tr>-->
</table>
<?php
//$content = ob_get_clean();

$host = "webmail.motor-reserva.com.br";
$userName = "mensagens@motor-reserva.com.br";
$password = "F0c0_@#123**_.";
$from = "mensagens@motor-reserva.com.br";

//$host     = "mail.meusitenaweb.com.br";
//$userName = "formulario@meusitenaweb.com.br";
//$password = "formulario!@foco#";
//$from     = "formulario@meusitenaweb.com.br";


$mail->IsSMTP(); // send via SMTP
$mail->SMTPAuth = true; // 'true' para autenticacao
$mail->CharSet = "ISO-8859-1";


$mail->Host = $host;
$mail->Username = $userName;
$mail->Password = $password;
$mail->From = $from;
$mail->FromName = 'Indicação de pacote';

//$mail->AddAddress($email_enviar_email, $nome_enviar_email);
$mail->AddAddress('alanansilva@gmail.com');

$mail->WordWrap = 64; // Definicao de quebra de linha
$mail->IsHTML(true); // envio como HTML se 'true'


$content = ob_get_contents();
ob_get_clean();
//die($content);

$mail->Subject = 'Solicitação de reserva';
$mail->Body = $content;
die ($content);
if (!$mail->Send())
    die($mail->ErrorInfo);
else
    echo 'Solicitação efetuada com sucesso';


