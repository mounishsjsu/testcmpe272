<?php
$authenticate = false;
if (isset($_SERVER['PHP_AUTH_USER']) && isset($_SERVER['PHP_AUTH_PW']))
{
    $myfile = fopen("logindetails.txt", "r") or die("Unable to open file!");
    //$string = fread($myfile, filesize("logindetails.txt"));
    while (!feof($myfile))
    {
        $stringfgets($file) . "<br />";
    }
    //$string = 'Naruto,Naruto@1 Itachi,Itachi@1';
    $username_password = explode(' ', $string);
    $name = $_SERVER['PHP_AUTH_USER'];
    $plaintext_pass = $_SERVER['PHP_AUTH_PW'];

    foreach ($username_password as $u_p)
    {

        list($username, $password) = explode(',', $u_p);

        if ($username == $name && $password == $plaintext_pass)
        {

            // $hash_pass = password_hash($plaintext_pass, PASSWORD_DEFAULT);
            //  $check = password_verify($password, $hash_pass);
            if ($check)
            {
                $authenticate = true;
            }
            $authenticate = true;
            break;
        }
    }
}

if ($authenticate == false)
{
    header('WWW-Authenticate: Basic realm="Restricted Page Enter Details To Continue"');
    header('HTTP/1.0 401 Unauthorized');
    echo "Authentication Failed Refresh To Do It Again";
}
else
{
    foreach ($username_password as $u_p)
    {

        list($username, $password) = explode(',', $u_p);
        echo "$username <br/>";
    }
}
?>
