<?php
$rdoGender  = $_GET['rdo'];
header('Content-Type: image/png');// ���͡������Ҿ png
$bg_im = imagecreatefromjpeg ($rdoGender); // ���˹�����ٻ�Ҿ����Ѻ�����ѧ   imagecreatefrompng ($rdoGender);   $_GET['rdo'];   $bg_im   $fg_im
$fg_im = $_GET['fname'];

list($width, $height) = getimagesize($fg_im); // �Ң�Ҵ�ͧ�������Ѻ�ҧ�Ѻ��ҹ��
$newwidth =400; /// �ӡ��ҧ ���� 㹷�����ա�á�˹���µ�� ����Ҿ������Ѵ��ǹ �Ҩ�Դ�������
$newheight =530; // ��Ҥ����٧���� 㹷�����ա�á�˹���µ�� ��
 
// ���ҧ�ٻ�Ҿ���������� ����Ѻ�ٻ�Ҿ�ҧ�Ѻ��ҹ��
$thumb = imagecreatetruecolor($newwidth, $newheight);
// �����ҧ�ҡ��� �鹩�Ѻ
$source = imagecreatefrompng($fg_im);
 
imagealphablending($bg_im, true); // ��˹��������Ҿ�����ѧ
imagesavealpha($bg_im, true);  // ��˹��������Ҿ�����ѧ
 
// ��������ҧ�ٻ�Ҿ���������� ����Ѻ�ٻ�Ҿ�ҧ�Ѻ��ҹ�� �����Ҵ����˹�
imagecopyresized($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);
 
// �ӡ������Ҿ 2 �Ҿ
// imagecopymerge($bg_im, $thumb, ��Ѻ�ٻ��ҹ�� �ҡ x, ��Ѻ�ٻ��ҹ�� �ҡ y, 0,0, $newwidth, $newheight, ��� 0-100);
imagecopymerge($bg_im, $thumb, 0, 0, 0,0, $newwidth, $newheight, 41);
 
imagejpeg($bg_im);
imagejpeg($bg_im, "picc/12.png"); // �ʴ��Ҿ
imagedestroy($bg_im);
imagedestroy($thumb);
?>

