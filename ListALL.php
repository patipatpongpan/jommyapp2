<head>
    <title>List of Product in Stock</title>
</head>
<?
$dbhost="127.0.0.1";
$dbuser="root";
$pwd="";
$dbname="stock";

$connect = mysql_connect($dbhost,$dbuser,$pwd) or die("Not Connect Server");
mysql_select_db($dbname) or die("No Database Name");
$sql = "Select * from product";

$result =mysql_query($sql);

?><br><br><br>
<center><font size="+2" color="#ff33ff">List of Product in Stock</font></center>
<br><br><table border="1" width="90%" align="center" >
	<tr align="center">
		<td width="20%" body bgcolor="#ff6600">Product ID<td>
		<td width="20%" body bgcolor="#ff6600">Product Name<td>
		<td width="20%" body bgcolor="#ff6600">Amout<td>
		<td width="20%" body bgcolor="#ff6600">Cost<td>
		<td width="20%" body bgcolor="#ff6600">Total</td>
	<tr>
	<?
		while($row=mysql_fetch_array($result)) {
			
			print "<tr>";
			print "<td >$row[ProductID]<td>";
	        print "<td>$row[ProduckName]<td>";
	        print "<td>$row[Amout]<td>";
			$Total = $row[cost]*$row[Amout];
	        print "<td>$row[cost]<td>";
			print"<td>$Total</td>";
			print "</tr>";
	}
	?>
</table>
<table border="0" width="14%" align="center">
<tr><td><a href="MainMenuStock.php">กด  click กลับรายการหลัก</a></td></tr>
</table>