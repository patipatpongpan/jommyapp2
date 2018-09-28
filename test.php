<?php
$rdoGender  = $_GET['fname'];
header('Content-Type: image/png');// ส่งออกเป็นไฟล์ภาพ png
$bg_im = imagecreatefromjpeg ($rdoGender); // ตำแหน่งไฟล์รูปภาพสำหรับพื้นหลัง   imagecreatefrompng ($rdoGender);   $_GET['rdo'];
$fg_im = $_GET['rdo'];

list($width, $height) = getimagesize($fg_im); // หาขนาดของไฟล์สำหรับวางทับด้านบน
$newwidth =1200; /// คำกว้าง ใหม่ ในที่นี้มีการกำหนดตายตัว ถ้าภาพไม่ได้สัดส่วน อาจบิดเบี้ยวได้
$newheight =1200; // ค่าความสูงใหม่ ในที่นี้มีการกำหนดตายตัว ถ้
 
// สร้างรูปภาพตามค่าใหม่ สำหรับรูปภาพวางทับด้านบน
$thumb = imagecreatetruecolor($newwidth, $newheight);
// โดยสร้างจากไฟล์ ต้นฉบับ
$source = imagecreatefromjpeg($fg_im);
 
imagealphablending($bg_im, true); // กำหนดโปร่งใส่ภาพพื้นหลัง
imagesavealpha($bg_im, true);  // กำหนดโปร่งใส่ภาพพื้นหลัง
 
// เริ่มสร้างรูปภาพตามค่าใหม่ สำหรับรูปภาพวางทับด้านบน ตามขนาดที่กำหนด
imagecopyresized($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);
 
// ทำการรวมภาพ 2 ภาพ
// imagecopymerge($bg_im, $thumb, ขยับรูปด้านบน จาก x, ขยับรูปด้านบน จาก y, 0,0, $newwidth, $newheight, ค่า 0-100);
imagecopymerge($bg_im, $thumb, 0, 0, 0,0, $newwidth, $newheight, 75);
 
imagepng($bg_im);
imagepng($bg_im, "picc/12.png"); // แสดงภาพ
imagedestroy($bg_im);
imagedestroy($thumb);
?>
