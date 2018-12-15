<html>
 <head>
  <title>Robot</title>
 </head>
 <body>
 <?php 

date_default_timezone_set('Europe/Paris');


 
$today = date('l jS \of F Y h:i:s A');

$flog = fopen("robotPicture.log","a"); // ouverture du fichier en écriture
fputs($flog,"Starting\n");
fputs($flog,"$today\n");

$target_path = basename( $_FILES['picture']['name']);
move_uploaded_file($_FILES['picture']['tmp_name'], $target_path);

fputs($flog,"File received\n");
fputs($flog,"$target_path\n");
fclose($flog);
	?>
 </body>
</html>

