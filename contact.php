<?php

$post = (!empty($_POST)) ? true : false;

if($post)
{
$firstName = htmlspecialchars($_POST['firstName']);
$secondName = htmlspecialchars($_POST['secondName']);

$phone = $_POST['phone'];
$email = $_POST['email'];

$valueMoney = $_POST['valueMoney'];
$valueDate = $_POST['valueDate'];

$error = '';





if(!$error) {


$to      = 'golofaev73@gmail.com';
$subject = 'Лист із сайту FinaGuru';
// текст письма
$message = '
<html>
<head>
  <title>Лист із сайту FinaGuru</title>
</head>
<body>
  <table>
    <tr>
      <td>Ім\'я</td>
      <td>'. $firstName .' '. $secondName .'</td>
    </tr>
    <tr>
      <td>Телефон</td>
      <td>'. $phone .'</td>
    </tr>
    <tr>
      <td>Email</td>
      <td>'. $email .'</td>
    </tr>
    <tr>
      <td>Сума</td>
      <td>'. $valueMoney .'</td>
    </tr>
    <tr>
      <td>Строк</td>
      <td>'. $valueDate .'</td>
    </tr>
  </table>
</body>
</html>
';
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

$mail = mail($to, $subject, $message, $headers);

if($mail)
{
echo 'OK';
}

}
else
{
echo '<div class="notification_error">Сталася помилка, спробуйте ще раз...</div>';
}

}
