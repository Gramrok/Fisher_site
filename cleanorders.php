<?
session_start();
if (isset($_SESSION['login']) && isset($_SESSION['adminmode'])) {
    file_put_contents('files/orderslogins.txt', '');
    file_put_contents('files/ordersfullnames.txt', '');
    file_put_contents('files/ordersphonenumbers.txt', '');
    file_put_contents('files/ordersemails.txt', '');
    file_put_contents('files/ordersaddresses.txt', '');
    file_put_contents('files/ordersdates.txt', '');
    file_put_contents('files/ordersitems.txt', '');
    echo '<script>location.href="new_orders.php"</script>';
} else
    header('Location:index.php');
?>