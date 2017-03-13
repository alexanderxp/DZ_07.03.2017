<?php

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form method=POST action='action.php'>
    <label for="first">Чило №1<br></label>
    <input type="text" id="first" name="a"><br>
    <label for="second">Чило №2<br></label>
    <input type="text"id="second" name="b"><br>
    <select name="operator">
        <option>+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select><br><br>
    <input type="submit" value="посчитать">
</form>
</body>


$operator = $_POST ['operator'];
$a = $_POST ['a'];
$b = $_POST ['b'];
//echo $a;
//echo $operator;
//echo $b;
//var_dump($operator);
if ($b==0 and $operator=='/'){
    echo "на 0 делить нельзя";
}else {
    if ($operator == '+') {$result=$a + $b; }
    if ($operator == '-') {$result=$a - $b;}
    if ($operator =='/')  {$result=$a / $b;}
    if ($operator == '*') {$result=$a * $b;}
    if ($operator == '%') {$result=$a % $b;}
    echo $a .$operator .$b .'='  .$result;
}
?>