<?php
// Testowy plik

  if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size = $_FILES['image']['size'];
      $file_tmp = $_FILES['image']['tmp_name'];
      $file_type = $_FILES['image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      
	$uploaddir = '../userdata/images/';
	$uploadfile = $uploaddir . basename($_FILES['image']['name']);
      $expensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="Złe rozszerzenie, przyjmujemy tylko .JPEG lub .PNG.";
         exit;
      }
      
      if($file_size > 2097152) {
         $errors[]='Zdjęcie musi mieć mniej niż 2 MB';
         exit;
      }
      else{
echo "errors:";
print_r($errors);
echo '<pre>';
// chmod($_FILES['userfile']['tmp_name'], 0755);
if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile)) {
    echo "Zdjęcie zostało przesłane.\n";
} else {
    echo "Wykryto błąd!\n";
}

echo 'debugging info:';
print_r($_FILES);

print "</pre>";
}}

?>