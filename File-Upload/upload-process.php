
<?php
echo '<pre>';
mysql_connect('localhost','root','root')or die();
mysql_select_db('image_upload');
$temp = $_FILES['image']['tmp_name'];
$nm = $_FILES['image']['name'];
$type = $_FILES['image']['type'];
$loc ="uploads/";
$filename = $loc.$nm;
if (!is_dir($loc)) {
mkdir($loc);
}
if( $type == "image/jpeg" || $type == "image/png"){
$path = move_uploaded_file($temp,$loc.$nm);
$sql='INSERT INTO  image_file_upload_db VALUES(NULL,"'.$filename.'")';
mysql_query($sql);

echo'<h3 style="color:green;margin-left:500px;">Success</h3>';
}else {
echo '<h3 style="color:red">Faild</h3>';
}
// print_r($_FILES['image']);
echo '</pre>';
?>