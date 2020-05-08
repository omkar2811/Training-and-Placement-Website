<?php
include('connection.php');
$query="select * from admin";
$result=mysqli_query($db,$query);
?>
<!DOCTYPE html>
<html>
<title>
<head>Fetch data</head>
</title>
<body>
<table align="center" border="1px" style="width:500px; line-height:30px;">
<tr>
<th colspan="2"><h2>Records</h2></th>
</tr>
<t>
<th>email </th>
<th> password</th>
</t>
<?php
 while($rows=mysqli_fetch_array($result,MYSQLI_ASSOC))
{
?>
<tr>

<td> <?php echo $rows['email'];?></td>
<td> <?php echo $rows['password'];?></td>
</tr>
<?php

}
?>

</table>
</body>
</html>