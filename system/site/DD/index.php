<?php
session_start();
if(isset($_SESSION['quyen']))
{
	if($_SESSION['quyen'] == 0 || $_SESSION['quyen'] == 1)
	{
		header('location: ./DD_Admin/');
	}
    elseif($_SESSION['quyen'] == 2 || $_SESSION['quyen'] == 3)
    {
        header('location: ./DD_TV/');
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
        
    ?>
    </body>
</html>