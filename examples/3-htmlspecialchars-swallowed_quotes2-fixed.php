<?php header('Content-Type: text/html; charset=UTF-8'); ?>
<!DOCTYPE html>
<?php
$input1 = 'fakeimage'."\xC0";
$input2 = <<<INPUT2
onerror=alert(/Meow!/)//
INPUT2;
$output1 = htmlspecialchars($input1, ENT_QUOTES, 'UTF-8');
$output2 = htmlspecialchars($input2, ENT_QUOTES, 'UTF-8');
?>
<html>
<head>
    <title>Swallowed Quotes #2</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
    <div>
        <img src="http://example.com/images/<?php echo $output1 ?>"
        title="<?php echo $output2 ?>">
    </div>
</body>
</html>