<?php
//pubblicato su github
//modificato online
$usr_id=$_GET['usr_id'];
echo $usr_id."<BR>";
$conn= new MySQLi ('localhost','app','Xo82tj!e','blog');
echo $conn ->errno."<BR>";
$query= "SELECT * FROM post WHERE usr_id=$usr_id";
echo $query."<BR>";
$ris= $conn -> query($query);
echo $ris->num_rows."<BR>";
echo "post di $usr_id <BR>";
while ($riga= $ris ->fetch_assoc()){
	echo"post:".$riga['post_id']." contenuto:".$riga['post_content']." data:".$riga['post_dt']."<BR>";
}
