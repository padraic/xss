<!DOCTYPE html>
<?php
$input1 = 'UTF-7'; /** Never let this happen!!! **/
$input2 = <<<INPUT2
<script>alert(/Meow!/)//</script>
INPUT2;
$input2 = mb_convert_encoding($input2, 'UTF-7', 'UTF-8');
$output1 = htmlspecialchars($input1, ENT_QUOTES, 'UTF-8');
$output2 = htmlspecialchars($input2, ENT_QUOTES, 'UTF-8');
?>
<html>
<head>
    <title>Mismatched Encoding</title>
    <meta http-equiv="Content-Type" content="text/html; charset=<?= $output1 ?>">
</head>
<body>
    <div>
        <strong style="font-size: 20em;">I lied, there is no fix!
        Filter your input and only allow charsets from a whitelist
        that does NOT include UTF-7.</strong>
        <?= $output2 ?>
    </div>
</body>
</html>