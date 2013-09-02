<?php 
// writing statement in a file 
include('statement.php');
include('values.php');
include('fontnames.php');
//end of writing statement :


//if($_POST['check1']==5 ||  $_POST['checklogin1']==5  ||  $_POST['checklogin2']==5)
//{
$rand1=rand(1, 8);
$rand2=rand(9, 15);

?>
<!DOCTYPE html 
      PUBLIC "-//W3C//DTD HTML 4.01//EN"
      "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<link href='http://fonts.googleapis.com/css?family=New+Rocker' rel='stylesheet' type='text/css'>

 <link rel="icon" href="./favicon.ico" type="image/x-icon">
<title>
 FONT MASH 
</title>
</head>

<style>
body
{
background-image:url(bg.jpg);
}

table {
    border-collapse: collapse;
}

td {
    padding-top: .5em;
    padding-bottom: .5em;
}
</style>
</body>
<br>
<!-- HEADING -->
<div>
<br>
<br>
<br>
<br>
<h1 style="font-family: 'New Rocker', cursive;"  align="center" style="position:relative; top:100px;">

FONT-MASH 
</h1>
</div>
<br>
<table align="center"  border="0"    cellpadding="15" >
<tr>
<!-- First Column -->
<td>
<?php include('fonts/'.$rand1.'.php') ?>
</td>


<td>
</td> 

<td>
</td> 


<td>
</td>

 

<td>
</td>
<br> 
<!-- Second  Column -->
<td>
<?php include('fonts/'.$rand2.'.php') ?>
</td>

</tr>	

<tr>
<!-- second  row -->
<td>
<table border="0">
<tr>
<td>
Font Name : <?php echo $name[$rand1]; ?>
</td>
</tr>

<tr>
<td>
Current Rating : <?php echo $ratings[$rand1]; ?>
</td>
</tr>


<tr>
<td>
Users Rated : <?php echo $scores[$rand1]; ?>
</td>
</tr>

</table>

</td>


<td>
</td> 

<td>
</td> 


<td>
</td>

 

<td>
</td>
<br> 
<!-- Second  Column -->
<td>
<table border="0">
<tr>
<td>
Font Name : <?php echo $name[intval($rand2)]; ?>
</td>
</tr>

<tr>
<td>
Current Rating : <?php echo $ratings[$rand2]; ?>
</td>
</tr>


<tr>
<td>
Users Rated : <?php echo $scores[$rand2]; ?>
</td>
</tr>

</table>

</td>

</tr>	

<!--4  New row -->

<tr>

<form name="form1"  action="login1.php" method="POST" >
<td>
<input type="hidden" name="checklogin1" value="5" ></input> 
<input type="hidden" name="statement" value=<?php echo $_POST['statement']?> ></input> 
<input type="submit" name="1.php"  value="Vote" ></input>
<input type='hidden' name='redirect'  value='index2.php'></input>
<input type='hidden' name='file1'  value='<?php echo $rand1;?>'></input>
<input type='hidden' name='file2'  value='<?php echo $rand2;?>'></input>
</td>
</form>

<td>
</td>

<td>
</td>


<td>
</td>



<td>
</td>
<!-- Second  Column -->
<form name="form1"  action="login2.php" method="POST" >
<td>
<input type="hidden" name="checklogin2" value="5"></input> 
<input type="hidden" name="statement" value=<?php echo $_POST['statement']?> ></input> 
<input type="submit" name="1.php"  value="Vote" ></input>
<input type='hidden' name='redirect'  value='index2.php'></input>
<input type='hidden' name='file1'  value='<?php echo $rand1;?>'></input>
<input type='hidden' name='file2'  value='<?php echo $rand2;?>'></input>
</td>
</form>

</tr>
 

<!-- end -->
</table>
<br>
<br>

<form action="final.php" method="POST">
<input type='hidden' name='final'  value='9'></input>
<input style="position:relative; left:550px"  type="submit" name="1.php"  value="END" ></input>
</form>	

</body>
</html>

<?php
//}

//else
//{
//header('Location:./welcome.php');

//}
?>

