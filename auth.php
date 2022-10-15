<?php
$authenticate = false;
$myFile = "logindetails.txt";
$string = file_get_contents($myFile);
if (isset($_SERVER['PHP_AUTH_USER']) && isset($_SERVER['PHP_AUTH_PW']))
{
 $name = $_SERVER['PHP_AUTH_USER'];
 $plaintext_pass = $_SERVER['PHP_AUTH_PW'];

 $username_password = explode(' ',$string);

 foreach($username_password as $u_p){

 list($username,$password) = explode(',',$u_p);  

 if($username == $name && $password == $plaintext_pass)
 {

 $hash_pass = password_hash($plaintext_pass, PASSWORD_DEFAULT);

 $check = password_verify($password,$hash_pass);
 
 if ($check)
 {
  $authenticate = true;
  foreach($username_password as $u_p){

  list($username,$password) = explode(',',$u_p);
  echo "$username <br/>";
  }
 }
 }

}
 
if ($authenticate==false)
{
 header('WWW-Authenticate: Basic realm="Restricted Page Enter Details To Continue"');
 header('HTTP/1.0 401 Unauthorized');
 echo "Authentication Failed Refresh To Do It Again";
}
?>