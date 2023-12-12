<<!DOCTYPE HTML PUBLIC"-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>PHP基礎</title>
</head>
<body>

<?php
$dsn ='mysql:dbname=phpkiso;host=localhost';
$user ='root';
$password ='';
$dbh = new PDO($dsn,$user,$password);
$dbh->query('SET NAMES utf8');






$nickname=$_POST['nickname'];
$email=$_POST['email'];
$goiken=$_POST['goiken'];

print $nickname;
print '様<br />';
print'ご意見ありがとうございました。<br />';
print'いただいたご意見『';
print $goiken;
print'』<br />';
print $email;
print'にメールを送りましたので御確認ください。';











$sql = 'INSERT INTO anketo (nickname,email,goiken) VALUES ("'.$nickname.'","'.$email.'","'.$goiken.'")';
$stmt = $dbh->prepare($sql);
$stmt->execute();

$dbh = null;
?>
</body>
</html>