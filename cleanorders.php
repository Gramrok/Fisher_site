<?
session_start();
if (isset($_SESSION['login']) && isset($_SESSION['adminmode'])) {
    file_put_contents('files/orderslogins8GE72dgr73D12.txt', '');
    file_put_contents('files/ordersfullnames8GE72dgr73D12.txt', '');
    file_put_contents('files/ordersphonenumbers8GE72dgr73D12.txt', '');
    file_put_contents('files/ordersemails8GE72dgr73D12.txt', '');
    file_put_contents('files/ordersaddresses8GE72dgr73D12.txt', '');
    file_put_contents('files/ordersdates8GE72dgr73D12.txt', '');
    file_put_contents('files/ordersitems8GE72dgr73D12.txt', '');
    echo '<script>location.href="new_orders.php"</script>';
} else
    header('Location:index.php');
?>