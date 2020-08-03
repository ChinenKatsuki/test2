<?php
$num1 = $_GET['num1'];
$num2 = $_GET['num2'];
if (is_numeric($num1) && is_numeric($num2)) {
	$answer = $num1 + $num2
} else {
	$answer = '数字以外の文字が入力されています';
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
</head>
<body>
<?php echo $answer; ?>
</body>
</html>

