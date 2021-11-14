<?php
session_start();
if(isset($_SESSION['quyen']))
{
	if($_SESSION['quyen'] != 0)
	{
		header('location:../../index.php');
	}
}
else
{
	header('location:../../index.php');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="../css/css.css" rel="stylesheet" type="text/css">
		<link href="../css/dshv.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <?php
header('location:QL_index.php');
        ?>
    </body>
</html>