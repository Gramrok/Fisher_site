<?php
session_start();
$login     = htmlspecialchars($_POST['login']);
$email     = htmlspecialchars($_POST['email']);
$password1 = htmlspecialchars($_POST['password1']);
$password2 = htmlspecialchars($_POST['password2']);
$logins    = file('files/logins.txt', FILE_IGNORE_NEW_LINES);
if (strlen($login) < 6) {
    $_SESSION['login_too_short'] = true;
    echo '<script>location.href="registration.php"</script>';
    exit;
}
for ($i = 0; $i < count($logins); $i++) {
    if ($login == $logins[$i]) {
        $_SESSION['login_already_exist'] = true;
        echo '<script>location.href="registration.php"</script>';
        exit;
    }
}
if ($password1 != $password2) {
    $_SESSION['passwords_not_the_same'] = true;
    echo '<script>location.href="registration.php"</script>';
    exit;
}
if (strlen($password1) < 8) {
    $_SESSION['password_too_short'] = true;
    echo '<script>location.href="registration.php"</script>';
    exit;
}
file_put_contents('files/logins.txt', htmlspecialchars($login) . "\n", FILE_APPEND);
file_put_contents('files/emails.txt', htmlspecialchars($email) . "\n", FILE_APPEND);
file_put_contents('files/passwords.txt', htmlspecialchars($password1) . "\n", FILE_APPEND);
$_SESSION['login'] = $login;
echo '<script>location.href="index.php"</script>';
?>