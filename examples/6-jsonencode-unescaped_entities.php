<?php header('Content-Type: application/xhtml+xml; charset=UTF-8'); ?>
<!DOCTYPE html>
<?php
$input = <<<INPUT
bar&quot;; alert(&quot;Meow!&quot;); var xss=&quot;true
INPUT;
$output = json_encode($input);
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Unescaped Entities</title>
    <meta charset="UTF-8"/>
    <script type="text/javascript">
        var foo = <?php echo $output ?>;
    </script>
</head>
<body>
    <div>
        <p>This little piggy met json_encode().</p>
    </div>
</body>
</html>