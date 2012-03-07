<?php header('Content-Type: text/html; charset=UTF-8'); ?>
<!DOCTYPE html>
<?php
$input = <<<INPUT
' onmouseover='alert(/Meow!/);
INPUT;
/**
 * NOTE: This is equivalent to using htmlspecialchars($input, ENT_COMPAT)
 */
$output = htmlspecialchars($input);
?>
<html>
<head>
    <title>Single Quoted Attribute</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
    <div>
        <span title='<?php echo $output ?>'>
            What's that latin placeholder text again?
        </span>
    </div>
</body>
</html>