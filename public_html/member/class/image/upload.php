<?php
require_once  "bulletproof.php";
$folderName="uploads";
$optionalPermission="rwx r-x r-x";
$image = new Bulletproof\Image($_FILES);
$image->setLocation($folderName, $optionalPermission);  

if($image["pictures"]){
  $upload = $image->upload(); 

  if($upload){
    echo $upload->getFullPath(); // uploads/cat.gif
  }else{
    echo $image->getError(); 
  }
}
?>