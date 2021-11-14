<!DOCTYPE html>
<?php
	include('../../src/csdldiendan.php');
	$p=new csdl();
	$p->connect();
?>
<?php
$layid=$_GET['id_bl'];
$id_bai=$_GET['id_baiviet'];
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Xoa binh luan -->
    <?php
        if($p->nhapbaiviet("DELETE FROM binhluan WHERE binhluan.id_bl = $layid")==1)
        {
            header('location: baiviet.php?id_baiviet='.$id_bai.'');
            exit();
        }
        else
        {
            echo 'Ops! ERROR 000.' ;
        }
    ?>
    <!-- Xoa Bai Viet -->
    <?php
        if($p->nhapbaiviet("DELETE FROM baiviet WHERE baiviet.id_bai = $id_bai")==1)
        {
            $p->nhapbaiviet("DELETE FROM binhluan WHERE binhluan.id_bai = $id_bai")==1;
            header('location: diendan.php');
        }
        else
        {
            echo 'Ops! ERROR 001.' ;
        }
    ?>
</body>
</html>