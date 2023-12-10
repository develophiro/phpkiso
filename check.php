<!DOCTYPE HTML PUBLIC"-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>PHP基礎</title>
</head>
<body>

<?php
$nickname=$_POST['nickname'];
$email=$_POST['email'];
$goiken=$_POST['goiken'];

$nickname=htmlspecialchars($nickname);
$email=htmlspecialchars($email);
$goiken=htmlspecialchars($goiken);
if($nickname=='')
{
     print'ニックネームが入力されていません。<br />';
 }
 else
 {
     print'ようこそ';
     print$nickname;
     print'様'; 
     print'<br />';
     }   
     
 if($email=='')
 {
      print'メールアドレスが入力されていません。<br />';
 }
 else
 {
      print'メールアドレス:';
      print $email;
      print'<br />';
  }
  
  if($goiken=='')
  {
       print'ご意見が入力されていません。<br />';
   }
   else
   {
         print'ご意見『';   
         print $goiken;
         print'』<br />';
    }
    
 if($nickname==''|| $email==''|| $goiken=='')
 {   
     print'<form>';
     print'<input type="button" onclick="history.back()" value="戻る">'; 
     print'</form>';
 }
  else
  {     
      print'<form method="post"action="thanks.php">';
      print'<input name="nickname" type="hidden" value="'.$nickname.'">';
      print'<input name="email" type="hidden" value="'.$email.'">';
      print'<input name="goiken" type="hidden" value="'.$goiken.'">';
      print'<input type="button" onclick="history.back()"value="戻る">';
      print'<input type="submit" value="OK">';
  }
 print'</form>';
?>


</body>
</html>