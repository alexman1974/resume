<?php
//проверяем, существуют ли переменные в массиве POST
if(!isset($_POST['user_name']) and !isset($_POST['email'])){
 ?> <form action="send.php" method="post">
<input type="text" name="user_name" placeholder="Введите имя" required>
<input type="text" name="email" placeholder="Введите email" required>
<button type="submit" class="btn">Отправить форму</button>
</form> <?php
} else {
 //показываем форму
 $user_name = $_POST['user_name'];
 $email = $_POST['email'];
 $user_name = htmlspecialchars($user_name);
 $email = htmlspecialchars($email);
 $user_name = urldecode($user_name);
 $email = urldecode($email);
 $user_name = trim($user_name);
 $email = trim($email);
 if (mail("alex_man_74@mail.ru", "Заявка с сайта", "ФИО:".$user_name.". E-mail: ".$email ,"From: example2@mail.ru \r\n")){
 echo "Сообщение успешно отправлено";
 } else {
 echo "При отправке сообщения возникли ошибки";
 }
}
?>