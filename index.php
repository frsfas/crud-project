<?php
include_once("config.php");
$result=mysqli_query($mysqli,"select * from users order by id desc");
?>

<html>
<head>
<title>homepage</title>
<link rel="stylesheet" type="text/css" href="design.css">
</head>
<body>
<a href="new.html">add new data</a><br/><br/>
<table width="80%" border="0">
<tr bgcolor='#00ffff'>
<td>name</td>
<td>age</td>
<td>location</td>
<td>mobile_no</td>
<td>update</td>
</tr>
<?php
while($res = mysqli_fetch_array($result))
{
echo"<tr>";
echo"<td>".$res['name']."</td>";
echo"<td>".$res['age']."</td>";
echo"<td>".$res['location']."</td>";
echo"<td>".$res['mobile_no']."</td>";
echo "<td><a href=\"edit.php?id=$res[id]\">__</a><a href=\"delete.php?id=$res[id]\" onclick=\"return confirm('are you sure you want to delete?')\">delete__</a></td>";
}
?>

</table>
</body>
</html>

