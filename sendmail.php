<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'phpmailer/src/Exception.php';
    require 'phpmailer/src/PHPMailer.php';

    $mail = new PHPMailer(true);
    $mail->Charset = 'UTF-8';
    $mail->setLanguage('ru', 'phpmailer/language/');
    $mail->IsHTML(true);

    // От кого письмо
    $mail->setFrom('projects@kingdesignn.ru', 'Decont Farm Site');

    // Кому письмо
    $mail->addAddress('zolotojznak@gmail.com');
    
    // Тема письма 
    $mail->Subject = 'Email from Site';


    // Тело письма
    $body = '<h1>Встречайте супер письмо</h1>';

    if(trim(!empty($_POST['fname']))){
        $body.='<p><strong>Имя: <strong>'.$_POST['fname'].'</p>';
    }
    if(trim(!empty($_POST['fsurname']))){
        $body.='<p><strong>Фамилия: <strong>'.$_POST['fsurname'].'</p>';
    }
    if(trim(!empty($_POST['femail']))){
        $body.='<p><strong>Email: <strong>'.$_POST['femail'].'</p>';
    }
    if(trim(!empty($_POST['fphone']))){
        $body.='<p><strong>Телефон: <strong>'.$_POST['fphone'].'</p>';
    }
    if(trim(!empty($_POST['fmessage']))){
        $body.='<p><strong>Текст: <strong>'.$_POST['fmessage'].'</p>';
    }

    $mail->Body = $body;

    if(!$mail->send()){
        $message = 'Ошибка';
    }else{
        $message = 'Данные отправлены!';
    }

    $response = ['message' => $message];

    header('Content-type: application/json');
    echo json_encode($response);
?>