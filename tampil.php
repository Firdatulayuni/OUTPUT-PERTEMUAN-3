<?php
$var1 = $_POST['myname'];
$var2= $_POST['num'];
echo "Nama anda adalah: ".$var1;
echo "<br>NIM anda: ".$var2;
"face: <img src='./gambar/firda.jpg' width='200'>";
	$name = $_FILES['gambar']['name'];
	$loc = $_FILES['gambar']['tmp_name'];
	$new = 'firda.jpg';
	move_uploaded_file($loc, "gambar/".$new);
	echo "<br> <img src='./gambar/firda.jpg' width='200'>";
?>