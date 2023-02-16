<?php
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];

$to="dmitriy_yu_88@mail.ru";
$date=date("d.m.Y");
$time=date("h:i");
$from=$email;
$subject = "Заявка с сайта";

$msg="
Имя:$name /n
Почта:$email /n
Телефон:$phone ";
mail($to,$subject,$msg,"From:$from");
?>
