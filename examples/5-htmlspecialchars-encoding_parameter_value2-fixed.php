<?php header('Content-Type: text/html; charset=UTF-8'); ?>
<!DOCTYPE html>
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$supportedEncodings = array(
    'iso-8859-1',   'iso8859-1',    'iso-8859-5',   'iso8859-5',
    'iso-8859-15',  'iso8859-15',   'utf-8',        'cp866',
    'ibm866',       '866',          'cp1251',       'windows-1251',
    'win-1251',     '1251',         'cp1252',       'windows-1252',
    '1252',         'koi8-r',       'koi8-ru',      'koi8r',
    'big5',         '950',          'gb2312',       '936',
    'big5-hkscs',   'shift_jis',    'sjis',         'sjis-win',
    'cp932',        '932',          'euc-jp',       'eucjp',
    'eucjp-win',    'macroman'
);
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
if (empty($encoding)) {
    throw new \InvalidArgumentException(
        'Some idiot set an empty encoding! Burn him! Burn him!'
    );
}
if (!in_array(strtolower($encoding), $supportedEncodings)) {
    throw new \InvalidArgumentException(
        'Some idiot set an invalid encoding! Burn him! Burn him!'
    );
}
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