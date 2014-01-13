
<?php
set_time_limit("10");
$file="temp/abc.txt";
$fg="code.txt";
$fp="temp/code";
$tp=$fp;
file_put_contents("input.txt",$_POST['input']);

$a=0;
If(!is_dir("temp"))
{
mkdir("temp");
}

while(file_exists($tp.".txt"))
{ 
$tp=$fp.$a;
$a++;
}
$tp=$tp.'.'.$_POST['ext'];
echo "</br></br></br>";
file_put_contents($tp,$_POST['code']);
//header("Content-Description: File Transfer");
system("del out");
system("del javaout");
system("del perlout");
if($_POST['ext']=='c'||$_POST['ext']=='c++')
  {
  system("g++-3 ".$tp." -o as 2> error", $compile_error);
  if($compile_error ==0)
    { 
    
    
ob_clean();
passthru("as.exe");  
  passthru("taskkill /im as.exe /f");
  $out=ob_get_contents();

     
    
      
    }
    else 
    {
    $out = file_get_contents("error");
    }
  
  }
else if($_POST['ext']=='pl')
{
system("prlkill.bat");
ob_clean();
passthru("perl ".$tp);  
  $out=ob_get_contents();
	  //$out= file_get_contents("perlout");
}
  else if($_POST['ext']=='java')
  {
    $pth="temp\code.java";
    system("javac ".$pth." 2> error", $compile_error);
  if($compile_error ==0)
  { 
  //$pth1="java code > out < input.txt";
  //system("cd temp");
  system("javac1.bat");
     $out = file_get_contents("javaout");
  }
  else 
  {
  $out = file_get_contents("error");
  }
 }	 
  
ob_clean();

  
$number=file_get_contents("number.txt");
$number++;
file_put_contents("number.txt",$number);
echo strip_tags($out);

?>
