<?php
$authenticate = false;
if (isset($_SERVER['PHP_AUTH_USER']) && isset($_SERVER['PHP_AUTH_PW']))
{
 $name = $_SERVER['PHP_AUTH_USER'];
 $plaintext_pass = $_SERVER['PHP_AUTH_PW'];
 $pass = "Password";

 $hash_pass = password_hash($plaintext_pass, PASSWORD_DEFAULT);

 $check = password_verify($pass,$hash_pass);
 
 if ($name == 'admin' && $check)
 {
  $authenticate = true;
  echo "Users List - Naruto, Sasuke, Itachi";
 }
}
 
if ($authenticate==false)
{
 header('WWW-Authenticate: Basic realm="Restricted Page Enter Details To Continue"');
 header('HTTP/1.0 401 Unauthorized');
 echo "Authentication Failed Refresh To Do It Again";
}
?>