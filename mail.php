<?php
ini_set('display_errors','On');
error_reporting('E_ALL');


$to = "info@webted.ru"; // Здесь нужно написать e-mail, куда будут приходить письма
$from = $_POST['email']; // this is the sender's Email address
$name = $_POST['name'];
$subject = "Форма отправки сообщений с сайта";
$subject2 = "Copy of your form submission";
$message = $name . " оставил сообщение:" . "\n\n" . $_POST['message'];
$message2 = "Here is a copy of your message " . $name . "\n\n" . $_POST['message'];

$headers = "From:" . $from;
$headers2 = "From:" . $to;
mail($to , $subject , $message , $headers);
if (mail($to ,  $subject, $message , $headers))
{


}
else
{
   
}


?>

Переадресация на главную страницу сайта, через 3 секунды
<script language="JavaScript" type="text/javascript">
function changeurl(){eval(self.location="https://webted.ru");}
window.setTimeout("changeurl();",3000);
</script>

