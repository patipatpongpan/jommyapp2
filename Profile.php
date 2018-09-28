

</html>

<html>
<head>
    <title>Profile</title>
</head>

<body>
  
   <table border="0" width=100% align="center"  >
      <tr>
	     <td align="center" >
	            <img src='Logo.jpg' width="80" height="100"><br><br><br>
				<font size="5" >สร้างโปรไฟล์ 50 ปี ม.อ.</font>  <br><br>
				<font size="4" font color="#7a7a7a" >ร่วมฉลองครบรอบ 50 ปี มหาวิทยาลัยสงขลานครินทร์</font><br><br><br><br>
				
				<hr>
		<form action="Profile.php" method="GET">	
		<button name="foo" type="submit" value="logo2.png" > <img src="logo2.png" width="150" height="150"> </button>
		<button name="foo" type="submit" value="logo3.png" > <img src="logo3.png" width="150" height="150"> </button>
		<button name="foo" type="submit" value="logo4.png" > <img src="logo4.png" width="150" height="150"> </button>
		<button name="foo" type="submit" value="logo5.png" > <img src="logo5.png" width="150" height="150"> </button>
		<button name="foo" type="submit" value="logo6.png" > <img src="logo6.png" width="150" height="150"> </button>		
		<button name="foo" type="submit" value="logo7.png" > <img src="logo7.png" width="150" height="150"> </button>		
		</form>
				<hr>
				
				<?
				//echo $Gender=$_GET['foo']; // รับค่า gender จาก method get
				?>
				<img src='picc/<?php echo $_GET['foo'];?>' width="300" height="300">
				
				
		 </td>
      </tr>
      <tr>
	</html>
				<td > <form name="frm">








<head>

<script src="http://code.jquery.com/jquery-latest.js"></script>

</head>

 

<script type="text/javascript">

function readURL(input) 
	{

if (input.files && input.files[0])
	{

var reader = new FileReader();

 

reader.onload = function (e) 
	{

$('#blah').attr('src', e.target.result);

}

 

reader.readAsDataURL(input.files[0]);

}

}

</script>

<body>

<table border="0" width=30% align="center">
<form id="form1" runat="server">

</form>
</table>
</body>

</html>

<br><br>



<body>
<table border="0" width=30% align="center">
<tr>
<td>
<div style="position: absolute; z-index: 99;"><br><br><br><img id="blah"  width="380" height="380"  /></div>


</td>
</tr>
</table>

</body>

<form action="test2.php" method="GET">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type='file' name="rdo" value="เลือกภาพ" onchange="readURL(this);"  />
<input type="hidden" name="fname" value = <?php echo $_GET['foo'];?>><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type ="submit" value="ประมวลผลรูปภาพ" onclick=return check();>
</form>




