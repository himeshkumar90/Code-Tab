<!---copyrights himesh and kapil --->
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css"/>
<script src="jquery.min.js">
</script>
<script src="jquery-ui.min.js">
</script>
<!--- hyperlink effects on sample program list--->
<script >
var ch=0;
$(document).ready(function(){
  
  $("h3").hover(function(){
 $(this).css("cursor","hand");
  
 $(this).css("color","blue");
   },
   function(){
 $(this).css("color","black");
 $(this).css("cursor","pointer");
 });
 
  $("#flip").hover(function(){
 $(this).css("cursor","hand");
  
 $(this).css("color","blue");
   },
   function(){
 $(this).css("color","black");
 $(this).css("cursor","pointer");
 });   $("#flip").click(function(){
  
   $('html, body').animate({ scrollTop:0 }, 'slow');
   
    if(ch%2==0){
      $("#sample").delay(100);
      $("#sample").slideToggle("900").effect("bounce",{ times:3 }, 250);
      ch++;
      }
      else
      { 
            $("#sample").effect("bounce", { times:3 }, 250).slideToggle("900");
      ch++;
      $("#sample").delay(100);
      $('html, body').animate({ scrollTop:0 }, 'slow');
      }
  });
});
</script>
<!--- COMPILING THE PROGRAM THROUGH AJAX--->
<script>

function funcp(){
document.getElementById('out').value='HHHHHHHH';
}
function func(x){
editor.setValue("//Type a "+x.value+" program");
editor.getSession().setMode("ace/mode/"+x.value);
}
function initialize()
{
var code = editor.getSession().getValue();
document.getElementById('code1').value = code;

}
function getVal()
{
                       // "editor" is the id of the editor div
 //alert("efew");    
  var code = editor.getSession().getValue();
 var ext1= $('#ext').val();
  document.getElementById('code1').value = code;
var input123 = $('#input').val();
//alert(input123);
var xmlhttp;
  xmlhttp=new XMLHttpRequest();
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
          {
        
	document.getElementById("codeTextarea").innerHTML=xmlhttp.responseText;
    //alert(xmlhttp.responseText);
    }
  }
  var data = 'code='+ encodeURIComponent(code)  + '&ext='+ encodeURIComponent(ext1) + '&input='+ encodeURIComponent(input123);
  //var  the_data = 'code1='+document.getElementById('code1').innerHTML;
xmlhttp.open("POST","pr.php",true);
xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
xmlhttp.send(data);
                    

}
</script>
</head>
  <body style='background-image:url("img11.png")'>
<!--- HANDLING THE SAMPLE PROGRAM--->
  <script>  
  function samplefunc($s)
{  // ajax stuff 
   var xmlhttp;
  xmlhttp=new XMLHttpRequest();
  var prog_name=$s;
   var ext1= $('#ext').val();
   var data = 'program='+ encodeURIComponent(prog_name) +'&ext='+ encodeURIComponent(ext1);
   xmlhttp.open("POST","sample_prog.php",true);
xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
xmlhttp.send(data);

//handling the response
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
          {
    var sample_code=xmlhttp.responseText;
	  editor.setValue(sample_code);
    }
  }
   
}
 </script>
    <!---<img id="logo" src="nitjlogo.jpg"/>--->
   
 
 <div id="topmenu">
 <div class="wrapper">
 <div id="left">
 <a href="index.php"  target="_top" title="Compile and Execute C Programs Online" >C </a>
 <a href="indexc++.php"  style="color:#00FF66;" target="_top" title="Compile and Execute C++ Programs Online" >C++ </a>
 <a href="indexjava.php" target="_top" title="Compile and Execute java Programs Online" >JAVA</a>
 <a href="indexpl.php" target="_top" title="Compile and Execute perl Programs Online" >PERL</a>
 <a href="indexprolog.php"  target="_top" title="Compile and Execute prolog Programs Online" >PROLOG</a>
 <a href="indexpy.php"  target="_top" title="Compile and Execute python Programs Online" >PYTHON</a>
 <a href="indexcs.php"  target="_top" title="Compile and Execute C Sharp (mono) Programs Online" >C#</a>

 </div>
 <div id="right">
 <a href="index.php" target="_top" title="Home">Home</a> |
 <a href="10.10.54.11/dev/" target="_top" title="Home">About</a> |
 <a href="contact.php" target="_top" title="Home">Contact</a>
 </div>
 </div>
 </div>
 <h4 class="source">  YOUR SOURCE CODE:  </h4> 
  <h4 class="output">  OUTPUT:</h4>
   
 	<div id="editor">
        </div>

   <div id="flip1"><a id="flip" name="flip" >Click here to show/hide sample programs</a></div>	
  <div>
     
     
   <button class="but2"   name="save" value='Run' onClick="getVal()" > RUN YOUR PROGRAM </button>   
      <form onSubmit="initialize();" method="post" action="save.php">
      
  	<input type="hidden" name="code1" id="code1" value="" />
        <input type="hidden" name="ext" id="ext" value="c++"/>

		

		<div id="sample"  name="sample";>
<?php

$dh=opendir("sample/c++");

while($filename=readdir($dh))
{ if($filename!='.')
   if($filename!='..')
   {
     $temp_filename=str_replace(' ','#@#!', $filename);
   echo "<h3  onClick=samplefunc('$temp_filename');>". $filename ."</h3></br> ";
   }

//echo "<a onClick=samplefunc($filename);>$filename</a></br>";
}

?>



</div>    
<script src='src-min-noconflict/ace.js' type='text/javascript' charset='utf-8'></script>
  
<script>

 editor = ace.edit("editor");

 
 editor.setTheme("ace/theme/monokai");
  editor.getSession().setMode("ace/mode/c_cpp");
     //editor.setVal''st2); 
editor.setValue('');
 
 //editor.insert('hhhhhhhhhhh\"hhhh\'hhhhhh\nskbgadxbkjtdj');
 ob_clean();
   </script>
   
   <?php  
        echo "<script>";
        if(isset($_POST['code_block']))
        {
        
	}
	                else
		       $txt='//Type a C++ program \n#include<iostream>\nusing namespace std; \nint main(){\n\ncout<<\"hello world\";\nreturn 0;\n}';
	                
        echo "var code1 = editor.getSession().getValue();";
        echo "</script>";     
	//echo $txt;
	   //$txt=str_replace("<br />","\n", $txt);             
     echo "<script>   ";
    echo "editor.insert('$txt');";
    echo "</script>";
     
    ?>
   
 
 </br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br>


<center><button class="but1" style="background-colour:red;"type="submit" name="save" value='Save' > SAVE IT ON YOUR PC </button>

</form>

  
  </br></br>
   </div>
    <span>
      <textarea id="codeTextarea" readonly style ="resize:none;">
    HOW IT WORKS 

Write your code/program in the your source code section (i.e the right box)

Give your input stream to the program in the input section(i.e the bottom section)

Click on the "Run your program" button to compile and execute your program

The output to your program will come here (i.e the output section)	 
       
   
          </textarea>
	 </span> 
 <h4 id="inputheading" >TYPE HERE YOUR INPUT STREAM </h4>     
<textarea id="input" rows='7' cols='25'>
</textarea>	   
  
  </body>
  </html>