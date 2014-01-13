
<?php
set_time_limit("10");
// Function to get the client ip address
// Function to get the client ip address

If(!is_dir("temp"))
{
mkdir("temp");
}
If(!is_dir("temp/".$_POST['ext']))
{
mkdir("temp/".$_POST['ext']);
}


$file="temp/abc.txt";
$fg="code.txt";
$fp="temp/".$_POST['ext']."/code";
$tp=$fp;
file_put_contents("temp/".$_POST['ext']."/input.txt",$_POST['input']);
$ipaddress = $ipaddress = $_SERVER['REMOTE_ADDR'];
file_put_contents("ip.txt",$ipaddress);
$a=0;


while(file_exists($tp.".txt"))
{ 
$tp=$fp.$a;
$a++;
}
$tp=$tp.'.'.$_POST['ext'];
//echo "</br></br></br>";
file_put_contents($tp,$_POST['code']);
//header("Content-Description: File Transfer");
system("del temp\\".$_POST['ext']."\\out");

system("del temp\\".$_POST['ext']."\\error");

//C SECTION

if($_POST['ext']=='c')
  {
  system("gcc-4 ".$tp." -o temp//".$_POST['ext']."//as 2> temp//".$_POST['ext']."//error", $compile_error);
  if($compile_error ==0)
    { 
    
    system("batch\\sc2.bat");
     
      $out = file_get_contents("temp/".$_POST['ext']."/out");
        
    
	}
    else 
    {
    $out = file_get_contents("temp/".$_POST['ext']."/error");
    }
  
  }
  
  //C++ SECTION

  else if($_POST['ext']=='c++')
  {
  system("g++-4 ".$tp." -o temp//".$_POST['ext']."//as 2> temp//".$_POST['ext']."//error", $compile_error);
  if($compile_error ==0)
    { 
    
    system("batch\\sc2cpp.bat");
     
      $out = file_get_contents("temp/".$_POST['ext']."/out");
        
    
	}
    else 
    {
    $out = file_get_contents("temp/".$_POST['ext']."/error");
    }
  
  }
  
  //PERL SECTION
  else if($_POST['ext']=='pl')
{
system("batch\\prl.bat");
      $out= file_get_contents("temp/".$_POST['ext']."/out");
}

//PROLOG SECTION
  else if($_POST['ext']=='pr')
{
system("batch\\prolog.bat");
$it=9;
$fh="temp/".$_POST['ext']."/out";
$out = file($fh);
while($it)
unset($out[--$it]);
$out = array_values($out);
file_put_contents($fh,implode($out));
$out= file_get_contents("temp/".$_POST['ext']."/out");

}

//PYTHON SECTION

else if($_POST['ext']=='py')
{
    system("batch\\pythn.bat");
    
      $out = file_get_contents("temp/".$_POST['ext']."/out");
}

//C# SECTION
else if($_POST['ext']=='cs')
  {

  system("dmcs ".$tp. " 2> temp//".$_POST['ext']."//error", $compile_error);
  if($compile_error ==0)
    { 
    
    system("batch\\csharp.bat");
     
      $out = file_get_contents("temp/".$_POST['ext']."/out");
        
    
	}
    else 
    {
    $out = file_get_contents("temp/".$_POST['ext']."/error");
    }
  
  }
  
  
  //JAVA SECTION
  else if($_POST['ext']=='java')
  {
  
    system("javac ".$tp." 2> temp//".$_POST['ext']."//error", $compile_error);
  if($compile_error ==0)
  { 
  system("batch\\javac1.bat");
     $out = file_get_contents("temp/".$_POST['ext']."/out");
  }
  else 
  {
  $out = file_get_contents("temp/".$_POST['ext']."/error");
  }
 }	 
  
ob_clean();

  
$number=file_get_contents("number.txt");
$number++;
file_put_contents("number.txt",$number);
echo strip_tags($out);

?>
