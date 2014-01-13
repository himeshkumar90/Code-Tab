<?php
$fg="code.".$_POST['ext'];
header("Content-type: application/txt");
header("Content-Disposition: attachment; filename=$fg");


ob_clean();

die($_POST['code1']);
?>