<?php
$login     = htmlspecialchars($_POST['login']);
$password  = htmlspecialchars($_POST['password']);
$logins    = file('files/logins.txt', FILE_IGNORE_NEW_LINES);
$passwords = file('files/passwords.txt', FILE_IGNORE_NEW_LINES);
for ($i = 0; $i < count($logins); $i++) {
    if ($login == $logins[$i] && $password == $passwords[$i]) {
        session_start();
        $_SESSION['login'] = $login;
        if ($_SESSION['login'] == 'eugeny' && $password == 'eugeny4751') {
            $_SESSION['adminmode'] = 'activated';
        }
        echo '<script>location.href="', $_SERVER['HTTP_REFERER'], '"</script>';
        exit;
    }
}
echo '<script>location.href="', $_SERVER['HTTP_REFERER'], '"</script>';
?>