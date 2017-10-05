<!DOCTYPE html>
<html>
<head>
	<title>Translator Test</title>
</head>
<body>
	<form action="#" method="get">
		<input type="text" name="inTrans">
		<input type="submit" name="submit" value="Translators">
	</form>
</body>
</html>
<?php
    $language = $_REQUEST['inTrans'];

    echo $language.' = ';

    //Translate API
    require 'vendor/autoload.php';
    use Stichoza\GoogleTranslate\TranslateClient;
    $tr = new TranslateClient(null, 'bn');
    $st= $tr->translate($language);
    echo $st;
?>