<?
$ProductID   = $_GET['ProductID'];
$dbhost="127.0.0.1";
$dbuser="root";
$pwd="";
$dbname="stock";

$connect = mysql_connect($dbhost,$dbuser,$pwd) or die("Not Connect Server");
mysql_select_db($dbname) or die("No Database Name");



$ProductID   = $_GET['ProductID'];
$sql = "Select * from product where ProductID='$ProductID'";
$result =mysql_query($sql);


	$row = mysql_fetch_array($result);
	

?>




<br><br><br>
<center><font size="+2" color="#ff33ff">Edit</font></center>





<form id="form1" name="form1" method="post" action="changeproduct.php">


<table border="0" width="40%" align="center">
	<tr>
	     <td width="10%">Product ID </td>
		 <td width="10%"><input type="text" name="txtProductID" size="30" id="ProductID" maxlength="5" value="<? echo $row['ProductID']?>"></td>
	</tr>
	<tr>
	     <td width="10%">Product Name</td>
		 <td width="10%"><input type="text" name="txtProduckName" size="30" id="ProduckName" maxlength="10" value="<? echo $row['ProduckName']?>"></td>
	</tr>
	<tr>
	     <td width="10%">Amout</td>
	     <td width="10%"><input type="text" name="txtAmout" size="30" id="Amout" maxlength="4" value="<? echo $row['Amout']?>"></td>
	</tr>
	<tr>
	      <td width="10%">Cost</td>
		  <td width="10%"><input type="text" name="txtcost" size="30" id="cost" maxlength="8" value="<? echo $row['cost']?>"></td>
	</tr>
	<tr>
	     <td align="rigth"width="10%"></td>
		 

		<td width="10%"> <input type="submit" name="Edit" id="Edit" value="Edit" />
		 <input name="ProductID" type="hidden" id="ProductID" value="<? echo $ProductID?>" /><a href="change.php">��Ѻ</a></td>


		 
   </tr>
</table>
</form>