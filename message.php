<html>
<head><title>Rare Positivity Page</title>
<link rel="stylesheet" type="text/css" href="style.css">


</head>

<script>
function playSound(file) {
    var soundFile = new Audio(file);
    soundFile.play();
}


</script>

<body>

<?php 

$from = $_GET["from"];
$to = $_GET["to"];
$message = $_GET["message"];

$soundclip = $_GET["sounds"];

echo "<div id='message'>";


echo "<p>" . $message . "</p>";

echo "<h2>From " . $from . "</h2>";

echo '<embed src="' . $soundclip . '" hidden="true">';
echo '</div>';

echo '<br>';
echo '<br>';
echo '<br>';

echo '<h3><a href="index.php">Return home</a></h3>';

require_once("./email/SimpleEmailService.php");
require_once("./email/SimpleEmailServiceMessage.php");
require_once("./email/SimpleEmailServiceRequest.php");

$ses = new SimpleEmailService('AKIAJNFOLU5VSTOFXC2A', 'A5kDR/R6DbzvLLPfARRW6OQxhAxUls1xqQyqvYgo');
$ses->enableVerifyPeer(false);

//print_r($ses->verifyEmailAddress('vishantk@gmail.com'));

$m = new SimpleEmailServiceMessage();
$m->addTo('earl909@yahoo.com');
$m->setFrom('vishantk@gmail.com');
$m->setSubject('You have a positive message from ' . $from);
$m->setMessageFromString('Go here to view your rare positive message: localhost/' . basename($_SERVER['PHP_SELF']) . "?" . $_SERVER['QUERY_STRING']);

$ses->sendEmail($m);


?>


</body>
</html>
