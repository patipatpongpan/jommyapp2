

<?
$dbhost="127.0.0.1";
$dbuser="root";
$pwd="";
$dbname="stock"; 

$ProductID   = $_POST['txtProductID'];



$connect = mysql_connect($dbhost,$dbuser,$pwd) or die("Not Connect Server");
mysql_select_db($dbname) or die("No Database Name");
$sql = "delete from product where ProductID=$ProductID";
$result =mysql_query($sql);

//header("location:ListAll.php");


echo "<script>window.location='ListAll.php';</script>";

?>



