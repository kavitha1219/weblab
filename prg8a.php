<?php
if(isset($_POST['res']))
{
$res = $_POST['display'];
$res = eval('return '.$res.';');
}
?>

<html>
<head>
<title> Calcuator</title>
<style>
input{
width:100%;
}
td{
background-color:#dcd4d4;
}
</style>
</head>
<body>
<form name="cal" method="POST">
<table align="center">
<tr>
<td colspan="4"><input type="text" name="dis" value="<?php if(isset($res)){ echo $res;}?>"></td>
</tr>

<tr>
<td><input type="button" value="1" onclick="cal.dis.value+='1'"></td>
<td><input type="button" value="2" onclick="cal.dis.value+='2'"></td>
<td><input type="button" value="3" onclick="cal.dis.value+='3'"></td>
<td><input type="button" value="+" onclick="cal.dis.value+='+'"></td>
</tr>

<tr>
<td><input type="button" value="4" onclick="cal.dis.value+='4'"></td>
<td><input type="button" value="5" onclick="cal.dis.value+='5'"></td>
<td><input type="button" value="6" onclick="cal.dis.value+='6'"></td>
<td><input type="button" value="-" onclick="cal.dis.value+='-'"></td>
</tr>

<tr>
<td><input type="button" value="7" onclick="cal.dis.value+='7'"></td>
<td><input type="button" value="8" onclick="cal.dis.value+='8'"></td>
<td><input type="button" value="9" onclick="cal.dis.value+='9'"></td>
<td><input type="button" value="*" onclick="cal.dis.value+='*'"></td>
</tr>
<tr>
<td><input type="button" value="0" onclick="cal.dis.value+='0'"></td>
<td><input type="button" value="/" onclick="cal.dis.value+='/'"></td>
<td><input type="reset" value="c"></td>
<td><input type="submit" value="=" name="res"></td>
	
</tr>

</table>
</form>
</body>
</html>
