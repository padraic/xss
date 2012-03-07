<?php header('Content-Type: text/html; charset=UTF-8'); ?>
<!DOCTYPE html>
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$input1 = 'fakeimage'."\xC0";
$input2 = <<<INPUT2
onerror=alert(/Meow!/)//
INPUT2;
/**
 * Invalid encoding makes htmlspecialchars() throw a warning but it continues
 * the current operation anyway using the default encoding even if the default
 * is an unsafe choice for the application. Don't allow invalid encodings!
 */
$encoding = 'invalid-encoding'; // from outside source or unvalidated variable
$output1 = htmlspecialchars($input1, ENT_QUOTES, $encoding);
$output2 = htmlspecialchars($input2, ENT_QUOTES, $encoding);
?>
<html>
<head>
    <title>htmlspecialchars() $encoding parameter value #2</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
    <div>
        <img src="http://example.com/images/<?php echo $output1 ?>"
        title="<?php echo $output2 ?>">
    </div>
</body>
</html>