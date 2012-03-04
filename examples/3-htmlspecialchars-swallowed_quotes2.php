<!DOCTYPE html>
<?php
$input1 = 'fakeimage'."\xC0";
$input2 = <<<INPUT2
onerror=alert(/Meow!/)//
INPUT2;
$output1 = htmlspecialchars($input1, ENT_QUOTES);
$output2 = htmlspecialchars($input2, ENT_QUOTES);
?>
<html>
<head>
    <title>Swallowed Quotes</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
    <div>
        <img src="http://example.com/images/<?= $output1 ?>"
        title="<?= $output2 ?>">
    </div>
</body>
</html>