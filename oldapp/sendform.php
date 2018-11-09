<?php 
error_reporting(E_ALL);

// echo phpinfo();

$name = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);
$phone = htmlspecialchars($_POST['phone']);
$message = htmlspecialchars($_POST['message']);

$name = urldecode($name);
$email = urldecode($email);
$phone = urldecode($phone);
$message = urldecode($message);

$name = trim($name);
$email = trim($email);
$phone = trim($phone);
$message = trim($message);

  if ($_SERVER['REQUEST_METHOD']=="POST" && !empty($_POST)) {
    $to = 'office@synproeng.com ';
    $subject = 'Test';
    $body = wordwrap($message, 70);

    $headers = "From:abc@somedomain.com \r\n";
    $headers .= "Cc:afgh@somedomain.com \r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html\r\n";


    require_once "../oldassets/Mail-1.4.1/Mail-1.4.1/Mail.php";


    $from = $email;
    $to = '<office@synproeng.com>';
    $subject = 'Hi!';
    $body = "Hi,\n\nHow are you?";

    $headers = array(
        'From' => $from,
        'To' => $to,
        'Subject' => $subject
    );

    $smtp = Mail::factory('smtp', array(
            'host' => 'ssl://smtp.gmail.com',
            'port' => '465',
            'auth' => true,
            'username' => 'synproenginfo@gmail.com',
            'password' => '04072018'
        ));

    $mail = $smtp->send($to, $headers, $body);

    if (PEAR::isError($mail)) {
        echo('<p>' . $mail->getMessage() . '</p>');
    } else {
        echo('<p>Message successfully sent!</p>');
    }

} else {
  echo 'Error send message';
}

?>

