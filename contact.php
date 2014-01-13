<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script>
function check()
{
var person={name,branch,emailid,message}; 
alert("lekmkl");
document.getElementbyId("name").innerHTML="kajdhkja";
for (x in person)
  {
  alert(x);
  if(document.getElementbyId(x)=="")
  {
      document.getElementbyId(x).innerHTML=x."cannot be left empty";
      //<meta http-equiv='refresh' content='2; URL=contact.php'>
  }
  }
  }

</script>

<title>Untitled Document</title>
</head>

<body background="img11.png">
<br><br><br><br><br><br><br>
<form  name="MainForm" action="stats.php" method="post" target="_self">
<center>
<div style="width:960px;border:0px solid #cdcdcd;">
<table style="border:0px solid #cdcdcd; width:100%; padding:5px;">
<tbody>
  <tr>
    <td id="name1" style="text-align:right;width:30%;padding:10px;">Your Name:</td>
    <td><input type="text" name="name" id="name" maxlength="30" style="width:340px;border:1px solid #cdcdcd;" /></td>
  </tr>
  <tr>
<td style="text-align:right;width:30%;padding:10px;"> Year and Branch:</td>
<td> <input type="text" name="branch" id="branch" maxlength="30" style="width:340px;border:1px solid #cdcdcd;"></td>
</tr>
<tr>
<td style="text-align:right;width:30%;padding:10px;">Your Email <i>(required)</i> :</td><td> <input type="text" name="emailid" id="emailid" maxlength="75" style="width:340px;border:1px solid #cdcdcd;"></td>
</tr>
<tr>
<td style="text-align:right;width:30%;padding:10px;">Subject : </td><td><input type="text" name="subject"  maxlength="50" style="width:340px;border:1px solid #cdcdcd;"></td>
</tr>
<tr>
<td style="text-align:right;width:30%;padding:10px;">Message <i>(required)</i>:</td><td><textarea id="Message" name="message" style="width:340px;border:1px solid #cdcdcd; height:150px;max-width:340px;"></textarea>
</td>
</tr>
</tbody></table>
<br>
<table style="border:0px solid #cdcdcd; width:100%; padding:5px;">
<tbody><tr>
<td colspan="2" style="text-align:center;padding:0px;">
<input type="submit" name="submit" value="Submit" />
</td>
</tr>
</tbody></table>

<br>
</div>
</center></form>


</body>
</html>
