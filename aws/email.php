<? require_once("./email/SimpleEmailService.php");

$ses = new SimpleEmailService('AKIAJUMWRZQLLLZ2ACFA', '37eA4qhq4L9KL6wf6Vuf5nRuDZSUADqhPa9bkt99');

$m = new SimpleEmailServiceMessage();
$m->addTo('earl909@yahoo.com');
$m->setFrom('earl909@yahoo.com');
$m->setSubject('Hello, world!');
$m->setMessageFromString('This is the message body.');

echo $ses->sendEmail($m);

?>