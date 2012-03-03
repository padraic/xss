<!DOCTYPE html>
<?php

$input = <<<INPUT
' onmouseover='alert(/Meow!/);
INPUT;
$output = htmlspecialchars($input);

?>
<html>
<head>
    <title>Single Quoted Attribute</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
    <div>
        <span title='<?= $output ?>'>What's that latin placeholder text again?</span>
    </div>
</body>
</html>