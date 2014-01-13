<!---copyrights himesh and kapil --->
<html>
<head>
<script src="jquery.min.js">
</script>
<script src="jquery-ui.min.js">
</script>
<link rel="stylesheet" type="text/css" href="style.css"/>
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
  
   $('html, body').animate({ scrollTop:250 }, 'slow');
   
    if(ch%2==0){
      $("#sample").delay(500);
      $("#sample").slideToggle("900").effect("bounce",{ times:3 }, 250);
      ch++;
      }
      else
      { 
            $("#sample").effect("bounce", { times:3 }, 250).slideToggle("900");
      ch++;
      $("#sample").delay(500);
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
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
        {
        
	document.getElementById("codeTextarea").innerHTML=xmlhttp.responseText;
    }
  }
  var data = 'code='+ encodeURIComponent(code)  + '&ext='+ encodeURIComponent(ext1) + '&input='+ encodeURIComponent(input123);
  //var  the_data = 'code1='+document.getElementById('code1').innerHTML;
xmlhttp.open("POST","pr.php",true);
xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
xmlhttp.send(data);
                    

}
</script>
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
</head>
  <body style='background-image:url("img11.png")'>
   <!--- <body style='background-image:url("img11.png")'>
   <h2 class="center" ><center> THE ONLINE COMPILER</center> </h2>
   <h4 class="center" style="margin:top=-5px;"> <center> Dr B.R. Ambedkar National Institute of Technology<br/>Department of Computer Science & Engineering</center></h4>
 --->
 <div id="topmenu">
 <div class="wrapper">
 <div id="left">
 <a href="index.php" target="_top" title="Compile and Execute C Programs Online" >C </a>
 <a href="indexc++.php"  target="_top" title="Compile and Execute C++ Programs Online" >C++ </a>
 <a href="indexjava.php" target="_top" title="Compile and Execute java Programs Online" >JAVA</a>
 <a href="indexpl.php" target="_top" title="Compile and Execute perl Programs Online" >PERL</a>
 <a href="indexprolog.php"  target="_top" title="Compile and Execute prolog Programs Online" >PROLOG</a>
 <a href="indexpy.php" style="color:#00FF66;" target="_top" title="Compile and Execute python Programs Online" >PYTHON</a>
 <a href="indexcs.php"  target="_top" title="Compile and Execute C Sharp (mono) Programs Online" >C#</a>
  </div>
 <div id="right">
 <a href="index.php" target="_top" title="Home">Home</a> |
 <a href="http://10.10.54.11/dev/" target="_top" title="Home">About</a> |
 <a href="contact.php" target="_top" title="Home">Contact</a>
 </div>
 </div>
 </div>
 <h4 class="source">  YOUR SOURCE CODE:  </h4><!---&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;---> 
  <h4 class="output">  OUTPUT:</h4>
   
 	
   <div id="flip1"><a id="flip" name="flip" >Click here for sample programs</a></div>	
  <div>
     
     
   <button class="but2"   name="save" value='Run' onClick="getVal()" ><center> RUN YOUR PROGRAM </center></button>   
      <form onSubmit="initialize();" method="post" action="save.php">
      
  	<input type="hidden" name="code1" id="code1" value="" />
        <input type="hidden" name="ext" id="ext" value="py"/>

	<div id="sample"  name="sample";>	
<?php

$dh=opendir("sample/prolog");

while($filename=readdir($dh))
{ if($filename!='.')
   if($filename!='..')
   {
     $temp_filename=str_replace(' ','#@#!', $filename);
   echo "<center><h3  onClick=samplefunc('$temp_filename');>". $filename ."</h3></center></br> ";
   }
}

?>	
</div>
       	
			<div id="editor">
        </div>


<script src='src-min-noconflict/ace.js' type='text/javascript' charset='utf-8'></script>
  
<script>

 editor = ace.edit("editor");

 
 editor.setTheme("ace/theme/monokai");
  editor.getSession().setMode("ace/mode/c_cpp");
     //editor.setVal''st2); 
editor.setValue('');
 

 ob_clean();
   </script>
   
   <?php  
        echo "<script>";
        if(isset($_POST['code_block']))
        {
        
	}
	                else
		       $txt="print \'hello\'";
	                
        echo "var code1 = editor.getSession().getValue();";
        echo "</script>";     
     echo "<script>   ";
    echo "editor.insert('$txt');";
    echo "</script>";
     
    ?>
   
 
 </br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br>


<center><button class="but1" style="background-colour:red;"type="submit" name="save" value='Save' > <center> SAVE IT ON YOUR PC </center></button>

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