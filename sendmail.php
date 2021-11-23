<?php
  $body = 'CPH-International.com'.
    '
    Name: '.$_POST['fname'].
    '
    Surname: '.$_POST['fsurname'].
    '
    Email: '.$_POST['femail'].
    '
    Phone: '.$_POST['fphone'].
    '
    Text: '.$_POST['fmessage'].'';

  $message = $body;
  $message = wordwrap($message, 70);

  var_dump(mail('elena.khachieva@cph-international.com', 'Message from CPH-International.com', $message));
?>