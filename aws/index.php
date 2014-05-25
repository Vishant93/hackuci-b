<html>
<head><title>Rare Positivity Page</title></head>
<body>

<?php require_once("./email/SimpleEmailService.php");

$ses = new SimpleEmailService('AKIAJUMWRZQLLLZ2ACFA', 'XXX');

$m = new SimpleEmailServiceMessage();
$m->addTo('earl909@yahoo.com');
$m->setFrom('earl909@yahoo.com');
$m->setSubject('Hello, world!');
$m->setMessageFromString('This is the message body.');

echo $ses->sendEmail($m);

echo "hello";
?>

<h1> Test </h1>

</body>
</html>
