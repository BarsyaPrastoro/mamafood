<?php
//KONEK DATABASE
// Create connection
$conn = mysqli_connect('localhost','id6813922_mamafood','mamafood123','id6813922_mamafood');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = ('select * from data_pedagang where statusAkun = 0');
$sql0= ('select * from data_pedagang where statusAkun = 1');
$sql1 = ('select * from pemesan');
$sql2 =('select * from saldo_user');
$sql3 =('select * from menu_pedagang');
$sql4 =('select * from userperusahaan');
$sql5 =('select * from user');

$query0= mysqli_query($conn, $sql0);
$query = mysqli_query($conn, $sql);
$query1 = mysqli_query($conn, $sql1);
$query2 = mysqli_query($conn, $sql2);
$query3 = mysqli_query($conn, $sql3);
$query4 = mysqli_query($conn, $sql4);
$query5 = mysqli_query($conn, $sql5);

?>