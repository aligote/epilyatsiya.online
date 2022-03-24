<?php
 /* Здесь проверяется существование переменных */
  if (isset($_POST['name'])) {$name = $_POST['name'];}
 if (isset($_POST['phone'])) {$phone = $_POST['phone'];}

 
/* Сюда впишите свою эл. почту */
 $address = "89951958278@mail.ru"; 
 


/* А здесь прописывается текст сообщения, \n - перенос строки */
 $mes = "\nТелефон: $phone\nИмя: $name";

/* А эта функция как раз занимается отправкой письма на указанный вами email */
$sub='Заявка с сайта Лазерная эпиляция'; //сабж
$email='epilyatsiya.online'; // от кого
 //$send = mail ($address,$sub,$mes,"Content-type:text/plain; charset = utf-8\r\nFrom:$email");
 mail( $address, $sub, $mes, "Content-type:text/plain; charset = utf-8 \r\n From:$email");

ini_set('short_open_tag', 'On');


