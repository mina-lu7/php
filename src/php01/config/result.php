<?php

$name = htmlspecialchars($_POST['name'], ENT_QUOTES);
Print "私の名前は、" . $name . "<br>";
$item = $_POST['item'];
Print "ご希望の商品は、" . $item . "<br>";
$order = $_POST['order'];
Print "注文数は、" . $order . "<br>";
