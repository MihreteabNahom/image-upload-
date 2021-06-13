<?php

// new filename
$filename = 'pic_'.date('YmdHis') . '.jpg';

$url = '';
if( move_uploaded_file($_FILES['webcam']['tmp_name'],'upload/'.$filename) ){
	$url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['REQUEST_URI']) . 'upload/' . $filename;

}
// Return image url
echo url;

// require 'image.compare.class.php';
//  $class = new compareImages;
//  echo $class->compare('1.jpg','2.jpg');