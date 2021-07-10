<?php
$servername = 'localhost';
$username = 'root';
$password = '123456';
$database = 'CSEFirst';
$mysqli = new mysqli($servername, $username, $password, $database);

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

function mysql_get_prim_key($table){
$sql = "SHOW INDEX FROM students";
$gp = mysql_query($sql);
$cgp = mysql_num_rows($gp);
if($cgp > 0){
// Note I'm not using a while loop because I never use more than one prim key column
$agp = mysql_fetch_array($gp);
extract($agp);
return($Column_name);
}else{
return(false);
}
}

?>


INSERT INTO `students`(`matric`, `name`, `groupof`, `sex`, `phonenum`, `email`, `address`, `nxtkin`, `phonenum_nxtkin`) VALUES ('4364743577','[ytdfyafggkfg aygusguigf]','ggrggeg','male','09055466747','[xvckugk@gmail.com]','[vfjbdkgfisegfewf]','[uyasfgjaff]','09055466747')