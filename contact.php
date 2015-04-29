<?php
$name = $_POST['name'];
$email = $_POST['email'];
$msg = $_POST['message'];
$to="shahrukh.sohail@hotmail.com";
//$to="Avialdo Solutions<zohairhemani1@gmail.com>";
$headers = "From: $name<$email>";
$result = mail($to, "Avialdo Website Contact Form Response", $msg, $headers);
echo $result;
?>