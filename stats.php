<?php
$number=file_get_contents("number.txt");

$today = date("d-m-Y");
$fh = fopen("stats.txt","a");



//fwrite ($fh,$_SERVER['HTTP_CLIENT_IP']);
fwrite($fh,"\n");
fwrite ($fh,"DATE:");
fwrite($fh,$today);
fwrite($fh,"\n");

fwrite ($fh,"NAME:");
fwrite($fh,$_POST['name']);
fwrite($fh,"\n");

fwrite ($fh,"BRANCH and YEAR:");
fwrite($fh,$_POST['branch']);
fwrite($fh,"\n");

fwrite ($fh,"EMAILID:");
fwrite($fh,$_POST['emailid']);
fwrite($fh,"\n");

fwrite ($fh,"SUBJECT:");
fwrite($fh,$_POST['subject']);
fwrite($fh,"\n");

fwrite ($fh,"MESSAGE:");
fwrite($fh,$_POST['message']);
fwrite($fh,"\n");
fwrite($fh,"No. of programs compiled till ".$today.":");
fwrite($fh,$number);
fwrite($fh,"\n\n\n");
fclose($fh);

echo "<meta http-equiv='refresh' content='0; URL=thanks.php'>";
?>