<?
$dbhost="127.0.0.1";
$dbuser="root";
$pwd="";
$dbname="stock";

$ProductID   = $_POST['txtProductID'];
$ProduckName = $_POST['txtProduckName'];
$Amout       = $_POST['txtAmout'];
$cost        = $_POST['txtcost'];

$connect = mysql_connect($dbhost,$dbuser,$pwd) or die("Not Connect Server");
mysql_select_db($dbname) or die("No Database Name");
$sql = "update product set 
ProduckName= '$ProduckName',Amout='$Amout',cost='$cost' where ProductID='$ProductID' ";

mysql_query($sql) or die("error=$sql");
$result =mysql_query($sql);


$row = mysql_fetch_array($result);
echo "<script>window.location='ListAll.php';</script>";

?>



