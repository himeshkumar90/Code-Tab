<?php
$temp_filename=str_replace('#@#!',' ', $_POST[program]);
$lang=$_POST[ext];
$filename='sample/'.$lang.'/'.$temp_filename;
$sample_code=file_get_contents($filename);
    ob_clean();
	//echo $filename;
	echo $sample_code;
?>