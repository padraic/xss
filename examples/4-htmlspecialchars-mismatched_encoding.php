<!DOCTYPE html>
<?php
$input1 = 'UTF-7';
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
        <?= $output2 ?>
    </div>
</body>
</html>