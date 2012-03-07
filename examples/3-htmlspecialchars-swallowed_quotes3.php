<?php header('Content-Type: text/html; charset=UTF-8'); ?>
<!DOCTYPE html>
<?php
$input1 = 'fakeimage'."\xC0";
$input2 = <<<INPUT2
onerror=alert(/Meow!/)//
INPUT2;
/**
 * If you think PHP 5.4 will save you - empty strings make it guess the encoding
 * or use the default_charset value from php.ini. You sure everyone on the whole
 * planet uses UTF-8? Under 5.3 - empty strings === default encoding.
 */
$encoding = ''; // from outside source or unvalidated variable
$output1 = htmlspecialchars($input1, ENT_QUOTES, $encoding);
$output2 = htmlspecialchars($input2, ENT_QUOTES, $encoding);
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