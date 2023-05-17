<?php

// フォームからデータを取得します。
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// データをデータベースに保存します。
$db = new PDO('mysql:host=localhost;dbname=mydb', 'username', 'password');
$stmt = $db->prepare('INSERT INTO contacts (name, email, message) VALUES (:name, :email, :message)');
$stmt->execute(array(
  ':name' => $name,
  ':email' => $email,
  ':message' => $message
));

// ユーザーに成功メッセージを送信します。
$success_message = 'お問い合わせありがとうございます。できるだけ早くご連絡いたします。';
echo $success_message;

?>