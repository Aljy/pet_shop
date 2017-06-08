<?
session_start();
if (isset($_SESSION['login']) && isset($_SESSION['adminmode'])) {
	file_put_contents('files/orderscurrentdates_Sj7v9x7zNb6qh1Wq2.txt', '');
    file_put_contents('files/orderslogins_Sj7v9x7zNb6qh1Wq2.txt', '');
    file_put_contents('files/ordersfullnames_Sj7v9x7zNb6qh1Wq2.txt', '');
    file_put_contents('files/ordersphonenumbers_Sj7v9x7zNb6qh1Wq2.txt', '');
    file_put_contents('files/ordersemails_Sj7v9x7zNb6qh1Wq2.txt', '');
    file_put_contents('files/ordersaddresses_Sj7v9x7zNb6qh1Wq2.txt', '');
    file_put_contents('files/ordersitems_Sj7v9x7zNb6qh1Wq2.txt', '');
    echo '<script>location.href="new_orders.php"</script>';
} else
    header('Location:index.php');
?>