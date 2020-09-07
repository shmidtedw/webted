<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WebTED - студия веб-разработки </title>
    <link rel="stylesheet" href="css/zaglushka.css">
</head>
<body>
<?php
ini_set('display_errors','On');
error_reporting('E_ALL');


$to = "shmidtedw@yandex.ru"; // Здесь нужно написать e-mail, куда будут приходить письма
$from = $_POST['email']; // this is the sender's Email address
$name = $_POST['name'];
$subject = "Форма отправки сообщений с сайта";
$subject2 = "Copy of your form submission";
$message = $name . " оставил сообщение:" . "\n\n" . $_POST['message'];
$message2 = "Here is a copy of your message " . $name . "\n\n" . $_POST['message'];

$headers = "From:" . $from;
$headers2 = "From:" . $to;
mail($to , $subject , $message , $headers);
?>

        <div id="bg-canvas">
        <canvas id="canvas"></canvas>
        <div class="logo"></div>
        <div id="text-canvas"><h1>Сайт находится в разработке!</h1>
            <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
            <script src="https://e-timer.ru/js/etimer.js"></script>
            <script type="text/javascript">
                jQuery(document).ready(function() {
                    jQuery(".eTimer").eTimer({
                        etType: 0, etDate: "01.10.2020.0.0", etTitleText: "До старта осталось:", etTitleSize: 20, etShowSign: 1, etSep: ":", etFontFamily: "Verdana", etTextColor: "#a3a3a3", etPaddingTB: 15, etPaddingLR: 15, etBackground: "rgba(51, 51, 51, 0.56)", etBorderSize: 0, etBorderRadius: 7, etBorderColor: "white", etShadow: " 0px 0px 10px 0px #333333", etLastUnit: 4, etNumberFontFamily: "Verdana", etNumberSize: 35, etNumberColor: "white", etNumberPaddingTB: 0, etNumberPaddingLR: 8, etNumberBackground: "#e0aa18", etNumberBorderSize: 0, etNumberBorderRadius: 6, etNumberBorderColor: "white", etNumberShadow: " 0px 0px 10px 0px rgba(0, 0, 0, 0.5)"
                    });
                });
            </script>
            <div class="eTimer"></div>
            <div id='wrapper'>
                <form action="index.php" method="POST" class='form'>
                  <p class='field required half'>
                    <input class='text-input' id='name' name='name' required placeholder='Ваше имя' required type='text'>
                  </p>
                  <p class='field required half'>
                    <input class='text-input' id='email' required placeholder='Email' name='email' required type='email'>
                  </p>
                  <p class='field'>
                    <textarea class='textarea' cols='50' id='message' required placeholder='Ваше сообщение' name='message' required rows='4'></textarea>
                  </p>
                  <p class='field'>
                    <a href="#openModal"><input class='button' type='submit' value='Отправить'></a>
                  </p>
                </form>
              </div>
              
              <!--<a href="#openModal">Открыть модальное окно</a>-->
              <div id="openModal" class="modalDialog">
               <div>
                <a href="#close" title="Закрыть" class="close">X</a>
                <h2>Модальное окно</h2>
               </div>
              </div>
              
    </div>
    </div>
    <script src="js/script.js"></script>
    
</body>
</html>